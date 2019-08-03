<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')-shop laravel</title>
        <script src="/assets/js/jquery-3.4.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    </head>
    <body>
        <header>
            <ul class="nav">
            @if (session()->has('user_id'))
                    <li><a href="/user/auth/sign-out">登出</a></li>
            @else
                    <li><a href="/user/auth/sign-in">登入</a></li>
                    <li><a href="/user/auth/sign-up">註冊</a></li>
            @endif
            </ul>
        </header>

        <div class="container">
            @yield('content')
        </div>
        <footer>
            <a href="#">contact us</a>
        </footer>
    </body>
</html>