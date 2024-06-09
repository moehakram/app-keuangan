<div class="konten">
    <div class="konten_dalem">
        <h2 class="head" style="color: #4b4f58;">Form Expenditure Data</h2>
        <hr style="margin-top: -5px;">
        <div class="headline">
            <h5>Add Expenditure</h5>
        </div>
        <div class="container">
            <div class="konten_isi">
                <table class="table-sm">
                    <script type="text/javascript" src="assets/js/pisahTitik.js"></script>
                    <form class="form-text" action="" method="post">
                        <tr>
                            <td>Expenditure Date</td>
                            <td>:</td>
                            <td><input class="form-control" type="date" value="<?= $today ?>" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td>Expenditure Description</td>
                            <td>:</td>
                            <td><input class="form-control" type="text" name="keterangan" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Expenditure Requirements</td>
                            <td>:</td>
                            <td>
                                <select name="keperluan" class="form-control" required>
                                    <option selected disabled value="">=== Choose Here ===</option>
                                   //
                                    <option>Lain - lain</option>
                                </select>
                            </td>
                            <td><a class="btn btn-secondary text-white" data-toggle="modal" data-target="#exampleModal">Add Kategori</a></td>
                        </tr>
                        <tr>
                            <td>Total Expenditure</td>
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