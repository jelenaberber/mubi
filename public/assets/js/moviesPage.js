var currentRating;
window.onload = function() {
    // Pristupanje CSRF tokenu
    var csrf_token = window.csrf_token;
    var expanded = false;

    function ajaxCallBack(url, method, result, csrf_token, data={}, error) {
        $.ajax({
            url: url,
            method: method,
            data: {
                _token: csrf_token,
                data: data
            },
            dataType: "json",
            success: result,
            error: error
        })
    }

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
    $('.selectBox').click(showCheckboxes);


    function filterMovies(){
        $('#search').on('keyup', function () {
            checkFilter();
        });
        $('.festivals input[type="checkbox"]').change(function (){
            checkFilter();
        })
        $('.genres input[type=\"checkbox\"]').change(function (){
            checkFilter();
        })
    }
    filterMovies();
    function checkFilter(){
        let search = $('#search').val();
        let festivals = $('.festivals input[type="checkbox"]:checked').map(function() {
            return $(this).val();
        }).get();
        let genres = $('.genres input[type="checkbox"]:checked').map(function() {
            return $(this).val();
        }).get();
        filterChange(genres, search, festivals)
    }
    function filterChange(genres, search, festivals, page){
        var data = {
            "genres" : genres,
            "search" : search,
            "festivals" : festivals,
            'page' : page
        };
        console.log(page)
        ajaxCallBack('/movies', 'post', function(response) {
            loadMovies(response.movies.data);
            updatePagination(response.movies, genres, search, festivals);
        }, csrf_token, data, function(xhr){
            console.log(xhr);
        });
    }

    function updatePagination(movies, genres, search, festivals) {
        let totalPages = movies.last_page;
        let currentPage = movies.current_page;
        let paginationContainer = $('.pagination');
        paginationContainer.empty(); // Clear existing content

        for (let i = 1; i <= totalPages; i++) {
            let activeClass = (i === currentPage) ? 'active' : '';

            (function (pageNumber) {
                let pageLink = $('<a>', {
                    href: '#',
                    text: pageNumber,
                    class: `page-link ${activeClass}`,
                    click: function () {
                        filterChange(genres, search, festivals, pageNumber);
                    }
                });

                let listItem = $('<li>', {
                    class: 'page-item'
                });

                listItem.append(pageLink);
                paginationContainer.append(listItem);
            })(i);
        }
    }




    function loadMovies(data={}){
        let html = ``;
        for( let i=0; i < data.length; i++){
            html += `<div class=" movie blog-entry d-flex flex-wrap blog-entry-search-item col-6">
                            <a href="/movies/${data[i].id}" class="img-link me-5">
                                <img src="http://127.0.0.1:8000/assets/images/${data[i].img_max}" alt="Image" class="img-fluid">
                            </a>
                            <div class="col-12">
                                <span class="date">${data[i].year}<a href="#"></a></span>
                                <h2><a href="/movies/${data[i].id}">${data[i].name}</a></h2>
                                <h2 class="h5"><a href="/movies/${data[i].id}" class="h6">${data[i].original_name}</a></h2>
                            </div>
                        </div>`
        }
        $('#movies').html(html);
    }

    $('#watchlist').click(function (){
        let id = $(this).data("id");
        let data = {
                'movieId' : id
                }
        $.ajax({
            url: '/watchlistAdd',
            type: 'POST',
            data: {
                _token: csrf_token,
                data: data
            },
            success: function(response) {
                if (response.response == 'insert'){
                    $('#watchlist').html(`<i class="fa-solid fa-check icon-white fs-3"></i>`);
                    $('#watchlist').prop('title', 'Remove from Watchlist');
                }
                if(response.response == 'delete') {
                    $('#watchlist').html(`<i class="fa-solid fa-list-ul icon-white fs-3"></i>`);
                    $('#watchlist').prop('title', 'Add to Watchlist');
                }
            },
            error: function(error) {
                console.log(error)
            }
        });
    })



    let currentRating = 0;

    $('.rate').mouseenter(function() {
        let star = $(this).data('star');
        highlightStars(star);
    }).mouseleave(function() {
        resetStars();
    }).click(function() {
        currentRating = $(this).data('star');
        $('.error-star').html('');
        highlightStars(currentRating);
    });

    function highlightStars(rank) {
        for (let i = 1; i <= rank; i++) {
            $('.rate[data-star="' + i + '"]').addClass('yellow');
        }
    }

    function resetStars() {
        $('.rate').removeClass('yellow');
        highlightStars(currentRating);
    }

    $("#contactForm").submit(function (event) {
        let text, movieId, data, error;
        error = 0;
        $('.rate').click(function() {
            $('.rate').removeClass('error-star');
            currentRating = $(this).data('star');
        });
        text = $('#message-text').val();
        movieId = $('#movieId').val();
        if (text == ''){
            $('#message-text').addClass('error');
            error++;
        }
        else{
            $('#message-text').removeClass('error');
        }
        if (currentRating == 0){
            $('.rate').addClass('error-star');
            error++
        }
        event.preventDefault();
        if (error == 0){
            data = {
                'rate' : currentRating,
                'review' : text,
                'movieId' : movieId
            }
            event.preventDefault();
            ajaxCallBack('/movies/rate', 'post', function(response) {
                console.log(5)
                loadReviews(response)
            }, csrf_token, data, function (xhr){
                if (xhr.status === 422) {
                    let rate = xhr.responseJSON.errors.rate;
                    let review = xhr.responseJSON.errors.review;
                    console.log(rate)
                    if (rate){
                        $('.rate-error').html(`${rate[0]}`)
                    }
                    if (review){
                        $('.review-error').html(`${review[0]}`)
                    }
                }
            });
        }
    });

    $("#commentArticle").submit(function (event) {
        let text, article_id, data, error;
        error = 0;
        text = $('#message').val();
        article_id = $('#articleId').val();
        if (text == ''){
            $('#message').addClass('error');
            error++;
        }
        else{
            $('#message').removeClass('error');
        }
        event.preventDefault();
        if (error == 0){
            data = {
                'comment' : text,
                'article_id' : article_id
            }
            event.preventDefault();
            ajaxCallBack('/article/comment', 'post', function(response) {
                loadComments(response)
            }, csrf_token, data, function (xhr){
                if (xhr.status === 422) {
                    // let review = xhr.responseJSON.errors.review;
                    // $('.review-error').html(`${review[0]}`)
                }
            });
        }
    });

    $('.delete-comment').click(function (){
        let commentId = $('.delete-comment').val()
        let articleId = $(this).data('article')
        let data = {
            'commentId' : commentId,
            'article_id' : articleId
        }
        ajaxCallBack('/article/comment/delete', 'post', function(response) {
            let commentId = response.commentId;
            $('.comment[data-id="'+ commentId+'"]').remove();
            $('#numberOfComments').html(response.commNum+' Comments')
            console.log('proba')
        }, csrf_token, data, function (xhr){
            console.log(xhr)
        });
    });

    function loadComments (data){
        console.log(data)
        let html = '';
        let comment = data.comment;
        let user = data.user;
        let commentList = $('.comment-article');
        $('#message').val('');
        html = `<li class="comment" data-id="${comment.id}">
                    <div class="vcard">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <div class="d-flex justify-content-between col-4">
                            <h3>${user.first_name+' '+ user.last_name}</h3>
                            <button class="btn text-danger p-0 delete-comment" value="${comment.id}" data-article="${comment.article_id}">Delete</button>
                        </div>

                        <div class="meta">${comment.created_at}</div>
                        <p>${comment.text}</p>
                    </div>
                </li>`
        commentList.append(html);
        $('#message').val('')
    }


    $('.delete-review').click(function (){
        console.log(5)
        let reviewId = $(this).val()
        let movieId = $(this).data('movie')
        let data = {
            'movieId' : movieId,
            'reviewId' : reviewId
        }
        ajaxCallBack('/movie/review/delete', 'post', function(response) {
            let reviewId = response.reviewId;
            $('.comment[data-id="'+ reviewId+'"]').remove();
        }, csrf_token, data, function (xhr){
            console.log(xhr)
        });
    });

    function loadReviews(data){
        $('#exampleModal').modal('hide')
        console.log(data.review)
        let html = '';
        let review = data.review;
        let rate = data.rate;
        let user = data.user;
        let commentList = $('.comment-list');
        html = `<li class="comment">
                    <div class="vcard">
                        <img src="http://127.0.0.1:8000/assets/images/${user.profile_img}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <div class="d-flex justify-content-between col-4">
                            <h3>${user.first_name+' '+ user.last_name}</h3>
                            <button class="btn text-danger p-0 delete-review" value="${review.comment_id}" data-movie="${data.movie_id}">Delete</button>
                        </div>`
        for(let i = 1; i<=5; i++){
            html+= `<i class="fa-regular mx-1 fa-star fs-3 ${i <= review.rate ? ' yellow' : '' }}" data-star="1"></i>`
        }
        html += `<div class="meta">${review.created_at}</div>
                    <p>${review.text}</p>
                </div>
            </li>`
        commentList.append(html);
        let rating = `<i class="fa-regular fa-star icon-white fs-3"></i> ${data.avgRate}/5`
        $('#rating').html(rating)
    }

    //brisanje korisnika
    $('.delete-user').click(function (){
        let userId = $(this).val()
        let data = {
            'userId' : userId
        }
        $('.message').html('')
        ajaxCallBack('/admin/user/delete', 'post', function(response) {
            let id = response.id;
            $('.user[data-id="'+id+'"]').remove();
            $('.message').html('Deleted successfully')
        }, csrf_token, data, function (xhr){
            console.log(xhr)
        });
    });

    //menjanje role
    $('.change-role').click(function (){
        let userId = $(this).data("user")
        let roleId = $('.role[data-user="' + userId + '"]').val()
        let data = {
            'roleId' : roleId,
            'userId' : userId
        }
        $('.message').html('')

        $('.change-role[data-user="' + userId + '"]').prop('disabled', true);
        ajaxCallBack('/admin/user/change', 'post', function(response) {
            $('.message').html('Changed successfully')
        }, csrf_token, data, function (xhr){
            console.log(xhr)
        });
    });

    //delete article
    $('.delete-article').click(function (){
        let articleId = $(this).val()
        let data = {
            'articleId' : articleId
        }
        $('.message').html('')
        ajaxCallBack('/admin/article/delete', 'post', function(response) {
            let id = response.id;
            $('.article-row[data-id="'+id+'"]').remove();
            $('.message').html('Deleted successfully')
        }, csrf_token, data, function (xhr){
            console.log(xhr)
        });
    });

    $('.role').change(function (){
        let id = $(this).data('user');
        let btn = $('.change-role[data-user="' + id + '"]').prop('disabled', false);
    })

};
