<!-- <html>
<head>
    <title> Login Form </title>
    <link rel="stylesheet" type="text/css" href="public/login/apa/style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="public/login/apa/avatar.png" class="avatar">
        <h1>Login</h1>

            <form action="{{ url('/dasboard') }}" method="post">
            {{ csrf_field() }} 
            
            <p>Username</p>
            <input input name="username" type="text" placeholder="@username">
            <p >Password</p>
            <input name="password" type="password" placeholder="@Password">
            <input type="submit" name="submit" value="Login">

                @if(\Session::has('alert'))
                <center><div class="alert alert-danger" style="color: red"><br>
                    <div style="font-weight: bold;">{{Session::get('alert')}}</div>
                </div>
            @endif
            
            <a >Silahkan Login</a>    
            </form>

        
        
        </div>
    
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Pengajuan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="public/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="public/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="public/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(public/login/pop.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>
                @if(\Session::has('alert'))
                <center ><div class="alert alert-danger" style="color: red"><br>
                    <div style="font-weight: bold;">{{Session::get('alert')}}</div>
                </div>
                 @endif
                <form class="login100-form validate-form" action="{{ url('/dasboard') }}" method="post">
                    {{ csrf_field() }} 

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="public/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="public/login/vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="public/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="public/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="public/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="public/login/js/main.js"></script>

</body>
</html>