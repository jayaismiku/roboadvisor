<?= $this->extend('templates/layout_2') ?>

<?= $this->section('main') ?>

<div class="card card-style">
	<div class="content mb-0">
		<form method="POST" action="<?= site_url('form/save'); ?>" accept-charset="UTF-8">
			<div class="form-floating mb-3">
				<input type="number" class="form-control" id="no_cicilan" name="no_cicilan" required disabled>
				<label for="noCicilan">Cicilan ke-:</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= old('nama_bank') ?>" required>
				<label for="namaBank">Nama Bank Pengirim:</label>
				<div class="invalid-feedback">
				</div>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="no_rekening" name="no_rekening" required>
				<label for="noRekening" class="form-label">Nomor Rekening:</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim">
				<label for="namaPengirim" class="form-label">Nama Pengirim:</label>
			</div>
			<div class="form-floating mb-3">
				<input type="date" class="form-control" id="tgl_kirim" name="tgl_kirim">
				<label for="tglKirim" class="form-label">Tanggal Kirim:</label>
			</div>
			<div class="form-floating mb-3">
				<input type="time" class="form-control" id="waktu_kirim" name="waktu_kirim">
				<label for="waktuKirim" class="form-label">Waktu Kirim:</label>
			</div>
			<div class="input-group mb-3">
				<label for="fileBukti" class="input-group-text file-label">Unggah File</label>
				<input type="file" class="form-control" id="file_bukti" name="file_bukti" onchange="previewImg()" required>
			</div>
			<div class="input-group mb-3">
				<img src="/img/250x250.png" class="img img-thumbnail img-preview" alt="">
			</div>
			<p></p>
			<div class="mb-3 text-center">
				<?= csrf_field() ?>
				<p>Bukti ini benar sudah saya lakukan. Mohon dikonfirmasi.</p>
				<button type="submit" class="btn btn-primary">Simpan Bukti</button>
				<button type="button" class="btn btn-warning" onclick="fungsiBatal()">Batal</button>
			</div>
		</form>
	</div>
</div>

<script>
	function fungsiBatal() {
		var r = confirm("Anda ingin membatalkan?");
		if (r == true) {
			// window.location.href('/tambah-bukti');
			history.back()
		}
	}
</script>

<?= $this->endSection() ?>
