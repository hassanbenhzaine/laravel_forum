<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Forum - Responsive HTML5 Template">
    <meta name="author" content="Forum">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- tt-mobile menu -->
<nav class="panel-menu" id="mobile-menu">
    <ul>

    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">
            Close
            <div class="tt-icon">
                <svg>
                  <use xlink:href="#icon-cancel"></use>
                </svg>
            </div>
        </div>
        <div class="mm-backbtn">Back</div>
    </div>
</nav>
<main id="tt-pageContent" class="tt-offset-none">
    <div class="container">
        <div class="tt-loginpages-wrapper">
            <div class="tt-loginpages">
                <form class="form-default" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="loginUserName">Email</label>
                        <input type="email" name="email" class="form-control" id="loginUserName" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="loginUserPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="loginUserPassword" placeholder="************" required autocomplete="current-password">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="settingsCheckBox01" name="checkbox">
                                    <label for="settingsCheckBox01">
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        <span class="tt-text">Remember me</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col ml-auto text-right">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="tt-underline">Forgot Password</a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block">Log in</button>
                    </div>
                    <p>Don’t have an account? <a href="{{ route('register') }}" class="tt-underline">Signup here</a></p>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="js/bundle.js"></script>
</body>
</html>

