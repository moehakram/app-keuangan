<div class="row">
    <div class="col-sm-6 p-0">
        <div class="card">
            <div class="card-header">
                <div class="signup">
                    <h4 class="aktif">SIGN UP</h4>
                </div>

                <div>
                    <h4> / </h4>
                </div>

                <div class="login">
                    <h4>LOGIN</h4>
                </div>
                <div class="sub-title">Registrasi untuk gunakan CashUp</div>
            </div>

            <div class="icon-user">
                <h4 class="fa fa-user"> </h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/register">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password" autocomplete="off" required>
                    </div>

                    <button type="submit" name="register" class="btn btn-primary">Sign up</button>
                </form>
            </div>
        </div>
        <div class="img"></div>
    </div>
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
                <form method="POST" action="/login">
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
                            <input type="checkbox" name="remember me">
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