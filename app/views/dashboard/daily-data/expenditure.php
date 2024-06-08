<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/icon.svg">
    <title>CashUp - Expenditure</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <script src="assets/js/fontawesome.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styler.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/datatables.css" />
    <script src="assets/js/datatables.js"></script>
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
                <li class="klik aktif" id="flip" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-database"></span>
                        <span>Daily Data</span>
                        <i class="fas fa-caret-up float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="pemasukkan" class="linkAktif">
                    <li id="panel">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Income</span>
                        </div>
                    </li>
                </a>

                <a href="pengeluaran" class="linkAktif">
                    <li class="aktif" id="panel2" style="border-left: 5px solid #A52A2A;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span>Expenditure</span>
                        </div>
                    </li>
                </a>
                <!-- dashboard -->

                <!-- Input -->
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fas fa-plus-circle"></span>
                        <span>Input Data</span>
                        <i class="fas fa-caret-right float-right" style="line-height: 20px;"></i>
                    </div>
                </li>

                <a href="tambahPemasukkan" class="linkAktif">
                    <li id="panel3" style="display: none;">
                        <div style="margin-left: 20px;">
                            <span><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Form Income</span>
                        </div>
                    </li>
                </a>

                <a href="tambahPengeluaran" class="linkAktif">
                    <li id="panel4" style="display: none;">
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

    <div class="main-content khusus">
        <div class="konten khusus2">
            <div class="konten_dalem khusus3">
                <h2 class="head" style="color: #4b4f58;">Expenditure</h2>
                <hr style="margin-top: -2px;">

                <!-- bagian filter -->
					<div class="row cari-filter">
						<div class="col-lg-5">
							<label>Select Date</label>
							<form method="GET" id="form_filter">
								<div class="form-row">
									<div class="col">
										<input type="date" class="form-control filter" name="filter" id="filter" value="<?= $today ?>">
									</div>
									<div class="col">
                                        <button type="submit" class="btn btn-secondary" name="showAll">All data</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4">
							<input type="hidden" id="username" value="<?= $ambilNama ?>">
						</div>
					</div>
				<!-- bagian filter -->

                <div class="headline">
                    <h5>Expenditure Data</h5>
                </div>
                <div class="container" id="container">
                    <div class="row tampil" id="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>Expenditure desc</th>
                                            <th>expenditure requirements</th>
                                            <th>Total Expenditure</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($pengeluaran as $row) : ?>
                                        <tr class="show" id="<?= $row['id'] ?>">
                                            <td> <?= $i ?> </td>
                                            <td data-target="tanggal"><?= htmlspecialchars($row['tanggal']) ?></td>
                                            <td data-target="keterangan"><?= htmlspecialchars($row['keterangan']) ?> </td>
                                            <td data-target="keperluan"><?= htmlspecialchars($row['keperluan']) ?></td>
                                            <td data-target="jumlahKeluar"><?= htmlspecialchars($row['jumlah']) ?></td>
                                            <td>
                                                <a href="#" class="btn btn-info delete" id="<?= $row['id'] ?>">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <a href="#" data-role="update" class="btn btn-outline-secondary" id="openBtn" data-id="<?= $row['id'] ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $jumlah2[] = $row["jumlah"];
                                            $jumlahConvert = str_replace('.', '', $jumlah2);
                                            $totali = array_sum($jumlahConvert);
                                            $hasilJumlah = number_format($totali, 0, ',', '.');
                                        ?>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>

                                    <?php if(isset($jumlah2) != null) :?>
                                    <tr>
                                        <td colspan="4" class="font-weight-bold">Total Expenditure</td>
                                        <td id="total" data-target="total" class="font-weight-bold"><?= $hasilJumlah ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit data -->
    <div class="modal fade" id="myModal2" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Data Pengeluaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- isi form -->
                <div class="modal-body">
                    <input type="hidden" id="userId" class="form-control">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan Pengeluaran</label>
                        <input type="text" class="form-control" id="keterangan" required>
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan Pengeluaran</label>
                        <select class="form-control" id="keperluan">
                            <option>Makan dan Minum</option>
                            <option>Hutang</option>
                            <option>Peralatan</option>
                            <option>Organisasi</option>
                            <option>Kendaraan</option>
                            <option>Keperluan pribadi</option>
                            <option>Lain - lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahKeluar">Jumlah Pengeluaran</label>
                        <input type="text" class="form-control" id="jumlahKeluar" onkeydown="return numbersonly(this, event);"
                            onkeyup="javascript:tandaPemisahTitik(this);" required>
                    </div>
                </div>
                <!-- footer form -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a id="save" class="btn btn-primary text-white">simpan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal edit data -->

    <!-- double modal -->
    <script>
        $('#openBtn').click(function () {
            $('#myModal2').modal({
                show: true
            });
        })
    </script>

    <script src="assets/js/bootstrap.js"></script>
    <script src="ajax/js/tambahPengeluaran.js"></script>
    <script src="ajax/js/deletePengeluaran.js"></script>
    <script src="ajax/js/updatePengeluaran.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );

        $('#filter').on('input', function () {
			$('#form_filter').submit();
    	});
	</script>
</body>

</html>