<div class="konten khusus2">
    <div class="konten_dalem khusus3">
        <h2 class="heade" style="color: #4b4f58;">Dashboard</h2>
        <hr style="margin-top: -2px;">
        <div class="container" id="container" style="border: none;">
            <div class="row tampilCardview" id="row">

                <div class="col-md-4 jarak">
                    <div class="card card-stats card-warning" style="background: #347ab8;">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="fas fa-wallet ikon"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center tulisan">
                                    <div class="numbers">
                                        <p class="card-category ket head">Saldo dompet</p>
                                        <h4 class="card-title ket total">Rp. <?= $saldoFix; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 jarak">
                    <a href="tambahPengeluaran" style="text-decoration: none;">
                        <div class="card card-stats card-warning" style="background: #d95350;">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fa fa-file-invoice-dollar ikon"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center tulisan">
                                        <div class="numbers">
                                            <p class="card-category ket head">Pengeluaran</p>

                                            <?php if ($hasilHargaPengeluaran != "") : ?>
                                                <h4 class="card-title ket total">Rp. <?= $hasilHargaPengeluaran; ?></h4>
                                            <?php else : ?>
                                                <h4 class="card-title ket total">Rp. 0</h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay" style="background: #e45351;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-plus-circle ikon2"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <p class="tulisan">Tambah Data</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 jarak">
                    <a href="tambahPemasukkan" style="text-decoration: none;">
                        <div class="card card-stats card-warning" style="background: #5db85b;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fa fa-hand-holding-usd ikon"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center tulisan">
                                        <div class="numbers">
                                            <p class="card-category ket head">Pemasukkan</p>
                                            <?php if ($hasilHarga != "") : ?>
                                                <h4 class="card-title ket total">Rp. <?= $hasilHarga ?> </h4>
                                            <?php else : ?>
                                                <h4 class="card-title ket total">Rp. 0 </h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-plus-circle ikon2"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <p class="tulisan">Tambah Data</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="rekening">
                    <div class="row tampil">
                        <div class="col-lg-5 rek">
                            <div class="konten-rekening border-right">
                                <p>Saldo Rekening</p>
                                <h3>Rp. <?= $saldoRekFix ?></h3>
                                <button class="btn btn-lg add-rekening btn-prev" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-dollar-sign"></i>
                                    Kelola rekening</button>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="history text-center">
                                            <a href="#" id="openBtn3">
                                                <i class="fas fa-history"></i>
                                                <span>History</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="refresh text-center">
                                            <a href="dashboard">
                                                <i class="fas fa-sync-alt"></i>
                                                <span>Refresh</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 rek">
                            <canvas id="myChart" width="60px" height="30px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="username" value="<?= $user['name'] ?>">
<input type="hidden" id="saldoRekening" value="<?= $saldoRek ?>">

<!-- Modal Kelola rekening -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Kelola Rekening</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- isi form -->
            <div class="modal-body">
                <p>No rekening anda : </p>
                <h5 style="margin-top: -10px; margin-bottom: 13px;"><b><?= $no_rek ?></b></h5>
                <p style="margin-bottom: 5px;">Tentukan aksi : </p>
                <button class="btn btn-info" id="openBtn" data-dismiss="modal">Isi saldo rekening</button>
                <button class="btn btn-success" id="openBtn4" data-dismiss="modal">Transfer ke akun lain</button>
                <button class="btn btn-danger" id="openBtn2" data-dismiss="modal" style="margin-top: 4px;">Cairkan ke saldo dompet</button>
            </div>

            <!-- footer form -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Kelola rekening -->

<!-- Modal dana masuk -->
<div class="modal fade" id="myModal2" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Dana masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- isi form -->
            <script type="text/javascript" src="assets/js/pisahTitik.js"></script>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" value="<?= $today ?>" required>
                </div>
                <div class="form-group">
                    <label for="jumlahRek">Jumlah nominal</label>
                    <input type="text" class="form-control" id="jumlahRek" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                </div>
            </div>
            <!-- footer form -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="#" class="btn btn-primary tambahRek">Tambah</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal dana masuk -->

<!-- Modal dana keluar -->
<div class="modal fade" id="myModal3" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Dana keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- isi form -->
            <script type="text/javascript" src="assets/js/pisahTitik.js"></script>
            <div class="modal-body">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggalRekOut" value="<?= $today ?>" required>
                </div>
                <div class="form-group">
                    <label for="jumlahRekOut">Jumlah nominal</label>
                    <input type="text" class="form-control" id="jumlahRekOut" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                </div>
            </div>
            <!-- footer form -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="#" class="btn btn-primary tambahRekOut">Tambah</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal dana keluar -->

<!-- Modal history -->
<div class="modal fade" id="myModal4" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Riwayat transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- isi form -->
            <script type="text/javascript" src="assets/js/pisahTitik.js"></script>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Kode transaksi</th>
                            <th>Nominal</th>
                            <th>Aksi</th>
                            <th>Tanggal</th>
                        </tr>
                        <?php foreach ($rekeningMasuk ?? [] as $row) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                                <td><?= $row['aksi'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach; ?>

                        <?php foreach ($rekeningKeluar ?? [] as $row) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                                <td><?= $row['aksi'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                            </tr>
                            <?php $no++ ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- footer form -->
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal history -->

<!-- Modal transfer -->
<div class="modal fade" id="myModal5" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- isi form -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="jumlahRekOut">No rekening</label>
                    <input type="text" class="form-control" id="no_rek" required>
                </div>
            </div>
            <!-- footer form -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="#" class="btn btn-primary tambah_norek">Cari</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal transfer -->

<!-- banyak modal -->
<script>
    $('#openBtn').click(function() {
        $('#myModal2').modal({
            show: true
        });
    })
    $('#openBtn2').click(function() {
        $('#myModal3').modal({
            show: true
        });
    })
    $('#openBtn3').click(function() {
        $('#myModal4').modal({
            show: true
        });
    })
    $('#openBtn4').click(function() {
        $('#myModal5').modal({
            show: true
        });
    })
</script>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["Saldo masuk", "Saldo keluar"],
            datasets: [{
                label: 'Data rekening',
                data: [
                    <?= $totalRekIn ?>,
                    <?= $totalRekOut ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
</script>

<script src="assets/js/kirimNoRek.js"></script>
<script src="ajax/js/tambahRekeningIn.js"></script>
<script src="ajax/js/tambahRekeningOut.js"></script>