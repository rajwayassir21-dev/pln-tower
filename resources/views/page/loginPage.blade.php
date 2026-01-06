<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | PLN Tower</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/images/Logo_PLN.png') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
</head>

<body>
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>PLN UPT Bekasi</b></h4>
                    <p>
                        Selamat datang di sistem informasi Tower UPT Bekasi. Silakan masuk dengan Username dan Password
                        yang admin sudah berikan.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <img src="{{ asset('storage/assets/images/logo.png') }}" alt="Login" class="svglogin">
                    </div>
                </div>

                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="/login" method="POST" class="margin-bottom-0">
                        @csrf
                        <h3 class="login-title">LOGIN</h3>
                        <div class="form-group m-b-15">
                            <input type="text" name="id_login" class="form-control form-control-lg"
                                placeholder="Masukan Username" required />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Masukan Password" required />
                        </div>
                        <div class="login-buttons">
                            <button type="submit" name="login" class="btn btn-primary btn-block btn-lg btn-login">
                                Login
                            </button>
                        </div>

                        {{-- <div class="text-inverse" style="color: #000000; font-weight: 600;">
              Forgot your ID / Password? <a href=""></a>
            </div> --}}
                        <hr />
                        <p class="text-grey-darker" style="color: rgb(0, 0, 0);">
                            &copy; <span style="  font-family: 'poppins', sans-serif;">UPT TOWER Bekasi. All rights
                        reserved.</span>
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
    </div>
    <!-- end page container -->
</body>

</html>
