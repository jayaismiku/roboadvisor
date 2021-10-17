<?= $this->extend('templates/layout_2') ?>

<?= $this->section('main') ?>

<!-- <div class="card card-style">
	<div class="content">
		<div class="row mb-0">
			<div class="col-3">
				<img src="img/1s.png" class="rounded-xl" width="80">
			</div>
			<div class="col-9 ps-4">
				<div class="d-flex">
					<div>
						<p class="font-700 color-theme">From</p>
					</div>
					<div class="ms-auto">
						<p>John Doe</p>
					</div>
				</div>
				<div class="d-flex">
					<div>
						<p class="font-700 color-theme">Via</p>
					</div>
					<div class="ms-auto">
						<p> Credit Card</p>
					</div>
				</div>
				<div class="d-flex">
					<div>
						<p class="font-700 color-theme">Date</p>
					</div>
					<div class="ms-auto">
						<p>15th July 2025</p>
					</div>
				</div>
			</div>
		</div>
		<div class="divider mt-3 mb-3"></div>
		<div class="row mb-0">
			<div class="col-6">
				<h4 class="font-15">Type</h4>
			</div>
			<div class="col-6">
				<h4 class="font-15 text-end">Instant </h4>
			</div>
			<div class="divider divider-margins w-100 mt-2 mb-2"></div>
			<div class="col-6">
				<h4 class="font-15 mt-1">Amount</h4>
			</div>
			<div class="col-6">
				<h4 class="font-15 text-end mt-1 color-green-dark">$140.21</h4>
			</div>
			<div class="divider divider-margins w-100 mt-2 mb-2"></div>
			<div class="col-6">
				<h4 class="font-15 mt-1">Comission</h4>
			</div>
			<div class="col-6">
				<h4 class="font-15 text-end mt-1 color-red-dark">$ -2.50</h4>
			</div>
			<div class="divider divider-margins w-100 mt-2 mb-2"></div>
			<div class="col-6">
				<h4 class="font-15 mt-1">Transaction ID</h4>
			</div>
			<div class="col-6">
				<h4 class="font-15 text-end mt-1">#987-456-165</h4>
			</div>
			<div class="divider divider-margins w-100 mt-2 mb-2"></div>
			<div class="col-6">
				<h4 class="font-15 mt-1">Status</h4>
			</div>
			<div class="col-6">
				<h4 class="font-15 text-end mt-1 color-blue-dark">Completed</h4>
			</div>
			<div class="divider divider-margins w-100 mt-2 mb-3"></div>
			<div class="col-12"><a href="#" class="btn btn-full btn-m bg-blue-dark rounded-sm text-uppercase font-800 mt-3">Download PDF</a></div>
		</div>
	</div>
</div> -->

<div class="card card-style">
	<div class="container-fluid mt-3">
		<div class="row row-cols-2">
			<div class="col-sm fs-4">
				Daftar Cicilan
			</div>
			<div class="col-sm text-end">
				<a href="/tambah-bukti" class="btn btn-primary">Tambah Bukti</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img src="/img/250x250.png" class="card-img-top rounded mx-auto d-block" alt="/img/250x250.png">
				<div class="card-body">
					<h5 class="card-title">Pembayaran 1</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-success">Sudah Diverifikasi</a>
				</div>
			</div>
			<div class="col">
				<img src="/img/250x250.png" class="card-img-top rounded mx-auto d-block" alt="/img/250x250.png">
				<div class="card-body">
					<h5 class="card-title">Pembayaran 2</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-success">Sudah Diverifikasi</a>
				</div>
			</div>
			<div class="col">
				<img src="/img/250x250.png" class="card-img-top rounded mx-auto d-block" alt="/img/250x250.png">
				<div class="card-body">
					<h5 class="card-title">Pembayaran 3</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-success">Sudah Diverifikasi</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
