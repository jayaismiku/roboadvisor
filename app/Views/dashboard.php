<?= $this->extend('templates/layout'); ?>

<?= $this->section('main'); ?>

<div class="card card-style">
	<div id="SliderProperty" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#SliderProperty" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#SliderProperty" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#SliderProperty" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/img/18w.jpg" class="d-block w-100 opacity-70" alt="Slider Rumah Pertama">
				<div class="carousel-caption d-none d-md-block bg-transparent text-dark">
					<h5 class="fs-3">First slide label</h5>
					<p class="fs-6">Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/img/18w.jpg" class="d-block w-100 opacity-70" alt="Slider Rumah Kedua">
				<div class="carousel-caption d-none d-md-block bg-transparent text-dark">
					<h5 class="fs-3">Second slide label</h5>
					<p class="fs-6">Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/img/18w.jpg" class="d-block w-100 opacity-70" alt="Slider Rumah Ketiga">
				<div class="carousel-caption d-none d-md-block bg-transparent text-dark">
					<h5 class="fs-3">Third slide label</h5>
					<p class="fs-6">Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#SliderProperty" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#SliderProperty" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

<div class="card card-style">
	<div class="content mb-0">
		<h1 class="text-center mb-0">Packed with Goodies</h1>
		<p class="text-center color-highlight font-11 mt-n1">The Absolute Best Products & Care for You</p>
		<p class="boxed-text-xl mt-n3">
			Over 10 years of Experience in Building Gorgeous Products only for you! We are Envato Elite.
		</p>
		<div class="divider"></div>
	</div>
	<div class="row me-2 ms-2 mb-0">
		<div class="col-6 text-center">
			<i class="fa fa-trophy color-yellow-dark fa-3x"></i>
			<h2 class="mt-3 mb-1">Future Proof</h2>
			<p>Built to last, with the latest quality code</p>
		</div>
		<div class="col-6 text-center">
			<i class="fab fa-cloudscale color-highlight fa-3x"></i>
			<h2 class="mt-3 mb-1">Powerful</h2>
			<p>Speed, Features and Flexibility all in One!</p>
		</div>
		<div class="col-6 text-center">
			<i class="fa fa-check color-green-dark fa-3x"></i>
			<h2 class="mt-3 mb-1">Easy to Use</h2>
			<p>Customers love our work for it's ease.</p>
		</div>
		<div class="col-6 text-center">
			<i class="fa fa-life-ring color-blue-dark fa-3x"></i>
			<h2 class="mt-3 mb-1">Customer Care</h2>
			<p>We treat others like we want to be treated.</p>
		</div>
	</div>
</div>

<div class="card card-style">
	<div class="content mb-0">
		<h1 class="text-center mb-0">Get Sticky Today</h1>
		<p class="text-center color-highlight font-11 mt-n1 pb-0">Tons of Awesome Features just for You.</p>
		<p class="boxed-text-xl mt-n3">
			Fast, easy to use and filled with features. Get Sticky Today and give your site the Mobile Feeling it deserves.
		</p>
		<a href="#" class="btn btn-m btn-center-l text-uppercase font-900 bg-red-dark rounded-sm shadow-xl mb-4">Purchase Now - $25</a>
	</div>
</div>

<?= $this->endSection(); ?>
