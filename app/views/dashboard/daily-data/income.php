<div class="konten khusus2">
	<div class="konten_dalem khusus3">
		<h2 class="head" style="color: #4b4f58;">Income</h2>
		<hr style="margin-top: -2px;">

		<!-- bagian filter -->
		<div class="row cari-filter">
			<div class="col-lg-5">
				<label>Select Date</label>
				<form method="GET" id="form_filter">
					<div class="form-row">
						<div class="col">
							<input type="date" class="form-control filter" value="<?= $today ?>" name="filter" id="filter">
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

		<!-- bagian isi tabel -->
		<div class="headline">
			<h5>Income Data</h5>
		</div>
		<div class="container" id="container">
			<div class="row tampil" id="row">
				<div class="col-md-12">
					<div class="table-responsive table-hover">
						<table id="myTable">
							<thead class="thead-dark">
								<tr>
									<th>No.</th>
									<th>Date</th>
									<th>Income Desc</th>
									<th>Source of Income</th>
									<th>Total Income</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($pemasukkan ?? [] as $row) : ?>
									<tr class="show" id="<?= $row['id'] ?>">
										<td> <?= $i ?> </td>
										<td data-target="tanggal"><?= htmlspecialchars($row['tanggal']) ?></td>
										<td data-target="keterangan"><?= htmlspecialchars($row['keterangan']) ?></td>
										<td data-target="sumber"><?= htmlspecialchars($row['sumber']) ?></td>
										<td data-target="jumlahMasuk"><?= htmlspecialchars($row['jumlah']) ?></td>
										<td>
											<a href="#" id="<?= $row['id']; ?>" class="btn btn-info delete">
												<i class="fas fa-trash-alt"></i>
											</a>
											<a href="#" data-id="<?= $row['id']; ?>" data-role="update" class="btn btn-outline-secondary" id="openBtn">
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
									<?php $i++ ?>
								<?php endforeach; ?>

							</tbody>

							<?php if (isset($jumlah2) != null) : ?>
								<tr>
									<td colspan="4" class="font-weight-bold">Total Income</td>
									<td id="total" data-target="total" class="font-weight-bold"><?= $hasilJumlah ?></td>
								</tr>
							<?php endif; ?>
						</table>
					</div>
				</div>
			</div>
			<!-- Button trigger modal -->

		</div>
		<!-- bagian isi tabel -->

	</div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Add Income</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!-- isi form -->
			<div class="modal-body">
				<script type="text/javascript" src="assets/js/pisahTitik.js"></script>
				<div class="form-group">
					<label>Input Date</label>
					<input type="date" value="<?= $today ?>" name="tanggal" class="form-control" id="tanggalTambah" required>
				</div>
				<div class="form-group">
					<label>Input Income desc</label>
					<input type="text" name="keterangan" class="form-control" id="keteranganTambah" required>
				</div>
				<div class="form-group">
					<label>Source of Income</label>
					<select name="sumber" class="form-control" id="sumberTambah">
						<option>ATM</option>
						<option>Pemberian</option>
						<option>Piutang</option>
						<option>Laba penjualan</option>
						<option>Pekerjaan</option>
						<option>Lain - lain</option>
					</select>
				</div>
				<div class="form-group">
					<label>Input total Income</label>
					<input type="text" id="jumlahTambah" name="jumlah" class="form-control" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
				</div>
			</div>
			<!-- footer form -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary tambahin">ADD</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Tambah Data -->

<!-- Modal edit data -->
<div class="modal fade" id="myModal2" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Change Input Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- isi form -->
			<div class="modal-body">
				<input type="hidden" id="userId" class="form-control">
				<div class="form-group">
					<label for="tanggal">Date</label>
					<input type="date" class="form-control" id="tanggal" required>
				</div>
				<div class="form-group">
					<label for="keterangan">Income Desc</label>
					<input type="text" class="form-control" id="keterangan" required>
				</div>
				<div class="form-group">
					<label for="sumber">Source of Income</label>
					<select class="form-control" id="sumber">
						<option>ATM</option>
						<option>Pemberian</option>
						<option>Piutang</option>
						<option>Laba penjualan</option>
						<option>Pekerjaan</option>
						<option>Lain - lain</option>
					</select>
				</div>
				<div class="form-group">
					<label for="jumlahMasuk">Total Income</label>
					<input type="text" class="form-control" id="jumlahMasuk" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
				</div>
			</div>
			<!-- footer form -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="#" id="save" class="btn btn-primary">Save</a>
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

<script src="ajax/js/tambahPemasukkan.js"></script>
<script src="ajax/js/deletePemasukkan.js"></script>
<script src="ajax/js/updatePemasukkan.js"></script>

<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});

	$('#filter').on('input', function() {
		$('#form_filter').submit();
	});
</script>