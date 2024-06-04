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

                <button type="submit" name="sign-up" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
    <div class="img"></div>
</div>