<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .limiter {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container-login {
            text-align: center;
            width: 80%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .wrap-login {
            display: flex;
            flex-wrap: wrap;
        }

        .login-pic {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-pic img {
            max-width: 100%;
            height: auto;
        }

        .login-form {
            width: 100%;
        }

        .login-form-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .wrap-input {
            position: relative;
            margin-bottom: 20px;
        }

        .input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .symbol-input {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
        }

        .symbol-input i {
            color: #999;
        }

        .focus-input {
            display: block;
            width: 100%;
            height: 1px;
            background-color: #333;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .container-login-form-btn {
            width: 100%;
        }

        .login-form-btn {
            width: 100%;
            padding: 15px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }

        .login-form-btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="limiter">
        <div class="container-login">
            <h2>Selamat Datang!</h2>
            <div class="wrap-login">
                <div class="login-pic">
                    <img src="images/img-01.png" alt="IMG">
                </div>
                <form action="{{ route('login.auth') }}" method="POST" class="login-form validate-form">
                    @csrf

                    <div class="wrap-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input" type="email" name="email" placeholder="Email">
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input" data-validate="Password is required">
                        <input class="input" type="password" name="password" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login-form-btn">
                        <button type="submit" class="login-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
