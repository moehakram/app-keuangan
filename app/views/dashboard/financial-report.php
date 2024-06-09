<div class="konten khusus2">
    <div class="konten_dalem khusus3">
        <h2 class="heade" style="color: #4b4f58;">Financial Report</h2>
        <input type="hidden" id="username" value="<?= $ambilNama ?>">
        <hr style="margin-top: -2px;">

        <div class="table-responsive">
            <table class="laporan">
                <tr>
                    <td>Report Type</td>
                    <td colspan="3">
                        <select id="jenis-laporan" class="form-control" required>
                            <option value="pemasukkan">Income</option>
                            <option value="pengeluaran">Expenditure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" id="awal" class="form-control control"></td>
                    <td>to</td>
                    <td><input type="date" id="akhir" class="form-control control"></td>
                    <td><button class="btn btn-primary lapor">Show</button></td>
                </tr>
            </table>
        </div>

        <div class="tampil"></div>

    </div>
</div>
<script src="ajax/js/laporan.js"></script>