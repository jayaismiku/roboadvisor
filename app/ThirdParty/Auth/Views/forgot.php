<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<main class="form-signin">
    <?= view('Auth\Views\_notifications') ?>

    <form method="POST" action="<?= site_url('forgot-password'); ?>" accept-charset="UTF-8"
        onsubmit="submitButton.disabled = true; return true;">
        <img class="mb-4" src="/icons/favicon-96x96.png" alt="Logo Property Syariah">
        <h1><?= lang('Auth.forgottenPassword') ?></h1>

		<div class="form-floating">
			<input type="email" class="form-control" id="floatingInput" name="email" value="<?= old('email') ?>" required>
			<label for="floatingInput"><?= lang('Auth.typeEmail') ?></label></label>
		</div>
        <div class="form-floating">
		    <?= csrf_field() ?>
            <button class="w-100 btn btn-lg btn-primary" type="submit"><?= lang('Auth.setNewPassword') ?></button>
        </div>
        <p class="mt-5 mb-3">
			<a href="<?= site_url('login'); ?>" class=""><?= lang('Auth.backToLogin') ?></a>
		</p>

    </form>

</main>

<?= $this->endSection() ?>