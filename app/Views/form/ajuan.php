<?= $this->extend('templates/layout_2') ?>

<?= $this->section('main') ?>

<div class="card card-style">
	<div class="content mb-0">
		<form method="POST" action="<?= site_url('form/save'); ?>" accept-charset="UTF-8">
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
				<label for="nama_lengkap">Nama Lengkap</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="kelamin" name="kelamin" required>
					<option selected></option>
					<option value="l">Laki-laki</option>
					<option value="p">Perempuan</option>
				</select>
				<label for="kelamin" class="form-label">Jenis Kelamin:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="nikah" name="nikah" required>
					<option selected></option>
					<option value="1">Menikah</option>
					<option value="0">Belum Menikah</option>
					<option value="1">Duda</option>
					<option value="1">Janda</option>
				</select>
				<label for="nikah" class="form-label">Status Pernikahan:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="tanggungan" name="tanggungan" required>
					<option selected></option>
					<option value="0">0</option>
					<option value="1">1 Orang</option>
					<option value="2">2 Orang</option>
					<option value="3+">Lebih dari 2 orang</option>
				</select>
				<label for="tanggungan" class="form-label">Jumlah Tanggungan:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="pendidikan" name="pendidikan" required>
					<option selected></option>
					<option value="0">Tidak Sekolah/Tidak lulus SD</option>
					<option value="0">SD</option>
					<option value="0">SMP</option>
					<option value="0">SMA</option>
					<option value="1">Kuliah (Diploma/Sarjana/Magister/Doktor)</option>
				</select>
				<label for="pendidikan" class="form-label">Pendidikan Terakhir:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="pekerjaan" name="pekerjaan" required>
					<option selected></option>
					<option value="1">Wiraswasta</option>
					<option value="0">PNS/BUMN</option>
					<option value="0">Pegawai Swasta</option>
				</select>
				<label for="pekerjaan" class="form-label">Jenis Pekerjaan Anda:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="alamat_provinsi" name="alamat_provinsi" required>
					<option value="1" selected>Jawa Barat</option>
				</select>
				<label for="alamat_provinsi" class="form-label">Alamat (Provinsi):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="alamat_kota" name="alamat_kota" required>
					<option selected></option>
					<option value="1">Kota Bandung</option>
					<option value="1">Kota Cimahi</option>
					<option value="1">Kabupaten Bandung</option>
					<option value="1">Kabupaten Bandung Barat</option>
				</select>
				<label for="alamat_kota" class="form-label">Alamat (Kota/Kabupaten):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="alamat_kecamatan" name="alamat_kecamatan" required>
					<option selected></option>
					<option value="1">Cicalengka</option>
				</select>
				<label for="alamat_kecamatan" class="form-label">Alamat (Kecamatan):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="alamat_kelurahan" name="alamat_kelurahan" required>
					<option selected></option>
					<option value="1">Cikuya</option>
				</select>
				<label for="alamat_kelurahan" class="form-label">Alamat (Kelurahan):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="pendapatan" name="pendapatan" required>
					<option selected></option>
					<option value="1">Kurang dari 1jt</option>
					<option value="2">1jt - 5jt</option>
					<option value="3">5jt - 10jt</option>
					<option value="4">10jt - 20jt</option>
					<option value="5">20jt - 30jt</option>
					<option value="6">30jt - 40jt</option>
					<option value="7">40jt - 50jt</option>
					<option value="8">Lebih dari 50jt</option>
				</select>
				<label for="pendapatan" class="form-label">Pendapatan Utama (Per Bulan):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="pendapatan_tambahan" name="pendapatan_tambahan" required>
					<option selected></option>
					<option value="1">Kurang dari 1jt</option>
					<option value="2">1jt - 5jt</option>
					<option value="3">5jt - 10jt</option>
					<option value="4">10jt - 20jt</option>
					<option value="5">20jt - 30jt</option>
					<option value="6">30jt - 40jt</option>
					<option value="7">40jt - 50jt</option>
					<option value="8">Lebih dari 50jt</option>
				</select>
				<label for="pendapatan_tambahan" class="form-label">Pendapatan Tambahan (Per Bulan):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="nup" name="nup" required>
					<option selected></option>
					<option value="0">Belum</option>
					<option value="1">Sudah</option>
				</select>
				<label for="nup" class="form-label">Sudah punya Nomor Urut Pembelian (NUP):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="booking_fee" name="booking_fee" required>
					<option selected></option>
					<option value="0">Belum</option>
					<option value="1">Sudah</option>
				</select>
				<label for="booking_fee" class="form-label">Sudah membayar <i>Booking Fee</i>:</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="harga_rumah" name="harga_rumah" placeholder="Harga Rumah" required>
				<label for="harga_rumah" class="form-label">Harga Rumah yang dibeli (Rp.):</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="uang_muka" name="uang_muka" placeholder="Harga Rumah" required>
				<label for="uang_muka" class="form-label">Uang muka (Rp.):</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="periode_cicilan" name="periode_cicilan" required>
					<option selected></option>
					<option value="12">12 Bulan</option>
					<option value="18">18 Bulan</option>
					<option value="24">24 Bulan</option>
				</select>
				<label for="periode_cicilan" class="form-label">Periode Cicilan Rumah:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="cicilan_lain" name="cicilan_lain" required>
					<option selected></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="3+">lebih dari 3</option>
				</select>
				<label for="cicilan_lain" class="form-label">Adakah Cicilan Lainnya:</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" id="jenis_properti" name="jenis_properti" required>
					<option selected></option>
					<option value="1">Tanah</option>
					<option value="2">Rumah</option>
				</select>
				<label for="jenis_properti" class="form-label">Jenis Properti:</label>
			</div>
			<!-- <div class="form-floating mb-3">
				<select class="form-select" id="area_rumah" name="area_rumah" required>
					<option selected></option>
					<option value="1">Kota</option>
					<option value="2">Desa</option>
				</select>
				<label for="area_rumah" class="form-label">Jenis Area Rumah:</label>
			</div> -->
			<p></p>
			<div class="mb-3 text-center">
				<?= csrf_field() ?>
				<p>Demikian permohonan ini saya ajukan dan saya bersedia mematuhi ketentuan yang berlaku dari Developer</p>
				<button type="submit" class="btn btn-primary">Ajukan SPPR</button>
				<button type="button" class="btn btn-warning">Batal</button>
			</div>
		</form>
	</div>
</div>

<script>
	function formatRupiah(bilangan, prefix) {
		var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{1, 3}/gi);

		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}

	function limitCharacter(event) {
		key = event.which || event.keyCode;
		if (key != 188 // Comma
			&&
			key != 8 // Backspace
			&&
			key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
			&&
			(key < 48 || key > 57) // Non digit
			// Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
		) {
			event.preventDefault();
			return false;
		}
	}

	function previewImg() {
		const fileBukti = document.querySelector('#file_bukti');
		const fileLabel = document.querySelector('.file-label');
		const filePrev = document.querySelector('.img-preview');

		fileLabel.textContent = fileBukti.files[0].name;

		const fileUpload = new FileReader();
		fileUpload.readAsDataURL(fileBukti.files[0]);
		fileUpload.onload = function(e) {
			filePrev.src = e.target.result;
		}
	}
</script>

<?= $this->endSection() ?>
