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
                                    <?php foreach ($pengeluaran ?? [] as $row) : ?>
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

                                <?php if (isset($jumlah2) != null) : ?>
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
                        <input type="text" class="form-control" id="jumlahKeluar" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
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
        $('#openBtn').click(function() {
            $('#myModal2').modal({
                show: true
            });
        })
    </script>

    <script src="ajax/js/tambahPengeluaran.js"></script>
    <script src="ajax/js/deletePengeluaran.js"></script>
    <script src="ajax/js/updatePengeluaran.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $('#filter').on('input', function() {
            $('#form_filter').submit();
        });
    </script>