<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Login Management' ?></title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
</head>

<body>
    <div class="container my-5">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed border-radius-xl blur shadow-blur"
            style="border-radius: 1rem;">
            <h1 class="text-body-emphasis">Login Management Keuangan</h1>
            <p class="col-lg-12 mx-auto mb-4">
                Selamat datang di sistem Management keuangan.
            </p>

            <div class="d-inline gap-3 mb-5">
                <a href="/login" class="btn btn-primary d-inline-flex align-items-center text-white" type="button">
                    Login
                </a>
            </div>
        </div>
    </div>
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>