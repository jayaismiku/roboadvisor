<?= $this->extend('templates/layout_2') ?>

<?= $this->section('main') ?>

<div class="card card-style">
	<div class="content mb-0">
		<form method="POST" action="<?= site_url('form/save'); ?>" accept-charset="UTF-8">

			<div class="accordion" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Data Diri Pembeli
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required>
								<label for="nama_lengkap">Nama:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" required>
								<label for="alamat_ktp" class="form-label">Alamat (Sesuai KTP):</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="provinsi" name="provinsi">
									<option selected></option>
									<?php foreach ($provinsi as $key => $value) {
										echo '<option value=' . $value['id'] . '>' . strtolower($value['nama_provinsi']) . '</option>';
									} ?>

								</select>
								<label for="provinsi" class="form-label">Provinsi:</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="kota" name="kota">
									<option selected></option>
									<option value="kota">Kota</option>
								</select>
								<label for="kota" class="form-label">Kota/Kabupaten:</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="kecamatan" name="kecamatan">
									<option selected></option>
									<option value="kecamatan">Kecamatan</option>
								</select>
								<label for="kecamatan" class="form-label">Kecamatan:</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="kelurahan" name="kelurahan">
									<option selected></option>
									<option value="kelurahan">Kelurahan</option>
								</select>
								<label for="kelurahan" class="form-label">Kelurahan:</label>
							</div>
							<!-- <div class="form-floating mb-3">
								<input type="text" class="form-control" id="alamat_domisili" name="alamat_domisili">
								<label for="alamat_domisili" class="form-label">Alamat (Domisili):</label>
							</div> -->
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="telp_1" name="telp_1" required>
								<label for="telp_utama" class="form-label">No. Telp/HP (utama):</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="telp_2" name="telp_2">
								<label for="telp_pendukung" class="form-label">No. Telp/HP (pendukung):</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="married" name="married">
									<option selected></option>
									<option value="menikah">Menikah</option>
									<option value="belum menikah">Belum Menikah</option>
									<option value="duda">Duda</option>
									<option value="janda">Janda</option>
								</select>
								<label for="status" class="form-label">Status Pernikahan:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="work" name="work" required>
								<label for="pekerjaan" class="form-label">Pekerjaan</label>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Data Rumah
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="name" name="name" required>
								<label for="nama_perumahan" class="form-label">Nama Perumahan/Kompleks:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="lokasi" name="lokasi" required>
								<label for="lokasi" class="form-label">Lokasi:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="kavling" name="kavling" required>
								<label for="kavling" class="form-label">Blok/Kavling:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="tipe" name="tipe" required>
								<label for="tipe" class="form-label">Tipe:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="luas_tanah" name="luas_tanah" required>
								<label for="luas_tanah" class="form-label">Luas Tanah:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" required>
								<label for="luas_bangunan" class="form-label">Luas Bangunan:</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="metode_pembelian" name="metode_pembelian">
									<option selected></option>
									<option value="1">Cash Keras</option>
									<option value="2">Cash Bertahap</option>
									<option value="3">Cicilan 120x</option>
									<option value="4">Cicilan Lainnya</option>
								</select>
								<label for="metode_pembelian" class="form-label">Metode Pembelian:</label>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Rincian Harga Jual
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="harga_jual" name="harga_jual" onkeydown="console.log(this.value)" required>
								<label for="harga_jual" class="form-label">Harga Jual Standar:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="uang_muka" name="uang_muka" required>
								<label for="uang_muka" class="form-label">Uang Muka Standar:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="diskon" name="diskon" required>
								<label for="diskon" class="form-label">Diskon (Jika ada):</label>
							</div>
							<p>Biaya Tambahan</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="tambah_utama" name="tambah_utama">
								<label for="tambah_utama" class="form-label">Depan Jl. Utama:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="tambah_fasum" name="tambah_fasum">
								<label for="tambah_fasum" class="form-label">Depan Fasum/Fasos:</label>
							</div>
							<p>Kelebihan Tanah (Hook)</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="lebih_ukuran" name="lebih_ukuran">
								<label for="lebih_ukuran" class="form-label">Ukuran (m<sup>2</sup>):</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="lebih_harga" name="lebih_harga" disabled>
								<label for="lebih_harga" class="form-label">Harga per (m<sup>2</sup>):</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="lebih_total" name="lebih_total" disabled>
								<label for="lebih_total" class="form-label">Total Biaya Hook:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="total_harga_jual" name="total_harga_jual" disabled>
								<label for="total_harga_jual" class="form-label">Total Harga Jual Rumah:</label>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Pembiayaan
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="total_uang_muka" name="total_uang_muka">
								<label for="harga_jual" class="form-label">Total Uang Muka:</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" aria-label="Default select" id="masa_indent" name="masa_indent">
									<option selected></option>
									<option value="12">12 Bulan</option>
									<option value="18">18 Bulan</option>
									<option value="24">24 Bulan</option>
								</select>
								<label for="masa_indent" class="form-label">Pilihan Masa Indent:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="total_cicilan_indent" name="total_cicilan_indent">
								<label for="total_cicilan_indent" class="form-label">Total Cicilan Indent:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="nilai_cicilan_indent" name="nilai_cicilan_indent">
								<label for="nilai_cicilan_indent" class="form-label">Nilai Cicilan Indent per Bulan:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="sisa_hutang" name="sisa_hutang">
								<label for="sisa_hutang" class="form-label">Sisa Hutang:</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="kali_bayar" name="kali_bayar">
								<label for="kali_bayar" class="form-label">Dibayar (x):</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="wajib_bayar" name="wajib_bayar">
								<label for="wajib_bayar" class="form-label">Kewajiban per Bulan:</label>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFive">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							Unggah File
						</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="file_ktp" name="file_ktp">
								<label for="fileKTP" class="input-group-text input-group-sppr">Unggah File KTP:</label>
							</div>
							<div class="input-group mb-3">
								<img src="/img/250x250.png" class="img img-thumbnail img-preview" alt="">
							</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" id="file_kk" name="file_kk">
								<label for="fileKK" class="input-group-text input-group-sppr">Unggah File KK:</label>
							</div>
							<div class="input-group mb-3">
								<img src="/img/250x250.png" class="img img-thumbnail img-preview" alt="">
							</div>

						</div>
					</div>
				</div>
			</div>
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
