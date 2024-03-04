<!doctype html>
<html lang="en">
<head>
    @include('common.head')
    <title>MUBI | @yield('title')</title>
</head>
<body>
    @include('common.nav')
    @yield('content')
    @include('common.footer')

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script>
    var csrf_token = "{{ csrf_token() }}";
    var imageUrl = "{{ asset('assets/images/dogtooth.jpg') }}";
</script>

<script src="{{asset("/assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset("/assets/js/tiny-slider.js")}}"></script>
<script src="{{asset("/assets/js/flatpickr.min.js")}}"></script>
<script src="{{asset("/assets/js/aos.js")}}"></script>
<script src="{{asset("/assets/js/glightbox.min.js")}}"></script>
<script src="{{asset("/assets/js/navbar.js")}}"></script>
<script src="{{asset("/assets/js/counter.js")}}"></script>
<script src="{{asset("/assets/js/custom.js")}}"></script>
<script src="{{asset("/assets/js/moviesPage.js")}}"></script>
</body>
</html>
