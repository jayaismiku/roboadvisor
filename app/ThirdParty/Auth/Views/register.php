<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<main class="form-signin">
	<?= view('Auth\Views\_notifications') ?>

	<form method="POST" action="<?= route_to('register'); ?>" accept-charset="UTF-8"
		onsubmit="registerButton.disabled = true; return true;">
        <img class="mb-4" src="/icons/favicon-96x96.png" alt="Logo Property Syariah">
		<h1><?= lang('Auth.registration') ?></h1>

		<div class="form-floating">
			<input type="text" class="form-control" id="floatingInput" name="name" value="<?= old('name') ?>" required minlength="2">
			<label for="floatingInput"><?= lang('Auth.name') ?></label>
		</div>
		<div class="form-floating">
			<input type="email" class="form-control" id="floatingInput" name="email" value="<?= old('email') ?>" required>
			<label for="floatingInput"><?= lang('Auth.email') ?></label>
		</div>
		<div class="form-floating">
			<input type="password" class="form-control" id="floatingPassword" name="password" required minlength="5">
			<label for="floatingPassword"><?= lang('Auth.password') ?></label>
		</div>
		<div class="form-floating">
			<input type="password" class="form-control" id="floatingConfirmPassword" name="password_confirm" required minlength="5">
			<label for="floatingConfirmPassword"><?= lang('Auth.passwordAgain') ?></label>
		</div>
		<?= csrf_field() ?>
		<button class="w-100 btn btn-lg btn-primary" name="registerButton" type="submit"><?= lang('Auth.register') ?></button>

		<p>
			<a href="<?= site_url('login'); ?>" class="float-right"><?= lang('Auth.alreadyRegistered') ?></a>
		</p>
	</form>

</main>

<?= $this->endSection() ?>