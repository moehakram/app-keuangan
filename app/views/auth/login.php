<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | CashUp</title>
    <link rel="shortcut icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        body {
            background: url('assets/img/body.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: "roboto", sans-serif;
        }

        .img {
            background: url('assets/img/login.png');
            background-size: cover;
            background-position: center;
            height: 100%;
            top: 0;
            position: absolute;
            width: 100%;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-8 border-box">
                <div class="row">
                  <?php include __DIR__ . '/register.php'?>

                    <div class="col-sm-6 p-0">
                        <div class="card">
                            <div class="card-header">
                                <div class="login">
                                    <h4 class="aktif">LOGIN</h4>
                                </div>
                                <div>
                                    <h4> / </h4>
                                </div>
                                <div class="signup">
                                    <h4>SIGN UP</h4>
                                </div>
                                <div class="sub-title">Login untuk gunakan CashUp</div>
                            </div>
                            <div class="icon-user">
                                <h4 class="fa fa-user"></h4>
                            </div>

                            <div class="card-body">
                                <form method="POST">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control" placeholder="Username / email" autocomplete="off" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="mz-check">
                                            <input type="checkbox" name="rememberme">
                                            <i class="mz-blue"></i>
                                            Remember Me
                                        </label>
                                    </div>

                                    <button type="submit" name="login" class="btn btn-primary" style="margin-top: -15px">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/slidelogin.js"></script>
</body>

</html>