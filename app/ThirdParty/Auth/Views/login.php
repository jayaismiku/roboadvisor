<?= $this->extend($config->viewLayout) ?>

<?= $this->section('main') ?>

<main class="form-signin">
	<?= view('Auth\Views\_notifications') ?>

	<form method="POST" action="<?= site_url('login'); ?>" accept-charset="UTF-8">
		<img class="mb-4" src="/icons/favicon-96x96.png" alt="Logo Property Syariah">
		<h1><?= lang('Auth.login') ?></h1>
		
		<div class="form-floating">
			<input type="email" class="form-control" id="floatingInput" name="email" value="<?= old('email') ?>" required>
			<label for="floatingInput"><?= lang('Auth.email') ?></label>
		</div>
		<div class="form-floating">
			<input type="password" class="form-control" id="floatingPassword" name="password">
			<label for="floatingPassword"><?= lang('Auth.password') ?></label>
		</div>
		<div class="checkbox mb-3">
			<label><input type="checkbox" value="remember-me"> Remember me</label>
		</div>
		<?= csrf_field() ?>
		<button class="w-100 btn btn-lg btn-primary" type="submit"><?= lang('Auth.login') ?></button>
		<p class="mt-5 mb-3">
			<a href="<?= site_url('register'); ?>" class=""><?= lang('Auth.registration') ?></a> | 
			<a href="<?= site_url('forgot-password'); ?>" class=""><?= lang('Auth.forgotYourPassword') ?></a>
		</p>
		<p class="mt-5 mb-3 text-muted">&copy; Hibah PDP 2021</p>
	</form>
</main>

<?= $this->endSection() ?>