<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/icon.svg">
    <title>CashUp - Add Income</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
	<script src="assets/js/fontawesome.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styler.css?v=1.0">
    <link rel="stylesheet" href="assets/css/tambah.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="header">
        <img src="assets/img/icon.svg" width="25px" height="25px" class="float-left logo-fav">
        <h3 class="text-secondary font-weight-bold float-left logo">Cash</h3>
        <h3 class="text-secondary float-left logo2">Up</h3>
        <a href="logout">
            <div class="logout">
                <i class="fas fa-sign-out-alt float-right log"></i>
                <p class="float-right logout">Logout</p>
            </div>
        </a>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <img src="assets/img/user.png" class="img-fluid profile float-left" width="60px">
                    <h5 class="admin"><?= substr($ambilNama, 0, 7) ?></h5>
                    <div class="online online2">
                        <p class="float-right ontext">Online</p>
                        <div class="on float-right"></div>
                    </div>
                </li>

                <!-- fungsi slide -->
                <script>
                    $(document).ready(function () {
                        $("#flip").click(function () {
                            $("#panel").slideToggle("medium");
                            $("#panel2").slideToggle("medium");
                        });
                        $("#flip2").click(function () {
                            $("#panel3").slideToggle("medium");
                            $("#panel4").slideToggle("medium");
                        });
                    });
                </script>

                <!-- dashboard -->
                <a href="dashboard" style="text-decoration: none;">
                    <li>
                        <div>
                            <span class="fas fa-tachometer-alt"></span>
                            <span>Dashboard</span>
                        </div>
                    </li>
                </a>

                <!-- data -->
                <li class="klik" id="flip" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-database"></span>
                        <span>Daily Data</span>
                        <i class="fas fa-caret-right float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="pemasukkan" class="linkAktif">
                    <li id="panel" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Income</span>
                        </div>
                    </li>
                </a>

                <a href="pengeluaran" class="linkAktif">
                    <li id="panel2" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Expenditure</span>
                        </div>
                    </li>
                </a>
                <!-- dashboard -->

                <!-- Input -->
                <li class="klik2 aktif" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-plus-circle"></span>
                        <span>Input Data</span>
                        <i class="fas fa-caret-up float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="tambahPemasukkan" class="linkAktif">
                    <li class="aktif" id="panel3" style="border-left: 5px solid #A52A2A;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Form Income</span>
                        </div>
                    </li>
                </a>

                <a href="tambahPengeluaran" class="linkAktif">
                    <li id="panel4">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Form Expenditure</span>
                        </div>
                    </li>
                </a>
                <!-- Input -->

                <!-- laporan -->
                <a href="laporan" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-clipboard-list"></i></span>
                            <span>Financial Report</span>
                        </div>
                    </li>
                </a>

                <?php  
                if($_SESSION['level'] == 'admin'){
                ?>
                <a href="administrator" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-user"></i></span>
                            <span>Kelola User</span>
                        </div>
                    </li>
                </a>
                <?php } ?>

                <!-- change icon -->
                <script>
                    $(".klik").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                    $(".klik2").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik2").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik2").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                </script>
                <!-- change icon -->
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <div class="konten">
            <div class="konten_dalem">
                <h2 class="head" style="color: #4b4f58;">Form Income Data</h2>
                <hr style="margin-top: -5px;">
                <div class="headline">
                    <h5>Add Income</h5>
                </div>
                <div class="container">
                    <div class="konten_isi">
                        <table class="table-sm">
                            <script type="text/javascript" src="assets/js/pisahTitik.js"></script>
                            <form class="form-text" action="" method="post">
                                <tr>
                                    <td>Income Date</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="date" value="<?= $today ?>" name="tanggal"
                                            required></td>
                                </tr>
                                <tr>
                                    <td>Income Description</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="text" name="keterangan" autocomplete="off" required></td>
                                </tr>
                                <tr>
                                    <td>Source of Income</td>
                                    <td>:</td>
                                    <td>
                                        <select name="sumber" class="form-control" required>
                                            <option value="" selected disabled>=== Choose Here ===</option>
                                            <?php 
                                            $sql = mysqli_query($koneksi, "SELECT * FROM kategori WHERE type = 'income'");

                                            while($data = mysqli_fetch_array($sql)) {
                                            ?>
                                            <option value="<?= $data['nama_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                                            <?php } ?>
                                            <option>Lain - lain</option>
                                        </select>
                                    </td>
                                    <td><a class="btn btn-secondary text-white" data-toggle="modal" data-target="#exampleModal">Add Kategori</a></td>
                                </tr>
                                <tr>
                                    <td>Total Income</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="text" name="jumlah" autocomplete="off" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="username" value="<?= $ambilNama ?>"></td>
                                    <td></td>
                                    <td>
                                        <center><button class="btn btn-primary btn-block" type="submit" name="submit">Add Data</button></center>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Nama kategori</label>
                        <input type="text" class="form-control" name="kategori" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Type Kategori</label>
                        <select name="type" class="form-control" required>
                            <option value="" selected disabled>=== Choose Here ===</option>
                            <option value="income">income</option>
                            <option value="expenditure">expenditure</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="tambahkategori">Save changes</button>
                </div>
            </form>
            </div>
        </div>  
    </div>

</body>

</html>