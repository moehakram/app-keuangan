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
               {{content}}
            </div>
        </div>
    </div>

    <script src="assets/js/slidelogin.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Serialize form data
            let formData = $(this).serialize();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: '/register',
                data: formData,
                success: function(response) {
                    // Handle success - display a success message, redirect, etc.
                    alert('Registration successful!');
                },
                error: function(xhr, status, error) {
                    // Handle error - display an error message, etc.
                    alert('Registration failed: ' + xhr.responseText);
                }
            });
        });
    });
</script>
</body>

</html>