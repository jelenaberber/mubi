<!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark m-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('allUsers') }}" class="nav-link">Users</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('allArticles') }}" class="nav-link">Articles</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('movies.index') }}" class="nav-link">Movies</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block"><a class="nav-link" href="{{ route('logOut') }}">Log out</a></li>
        </ul>

    </nav>
    <!-- /.navbar -->
