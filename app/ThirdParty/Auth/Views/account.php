<?= $this->extend($config->viewLayout2) ?>

<?= $this->section('main') ?>

	<div class="card card-style">
		<div class="content mb-0">
			<?= view('Auth\Views\_notifications') ?>
			<div class="accordion accordion-flush" id="accordionFlushExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
							<?= lang('Auth.accountSettings') ?>
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<form method="POST" action="<?= site_url('account'); ?>" accept-charset="UTF-8">
								<div class="mb-3">
									<label for="name" class="form-label"><?= lang('Auth.name') ?></label>
									<input type="text" class="form-control" id="name" name="name" value="<?= $userData['name']; ?>" required>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label"><?= lang('Auth.email') ?></label>
									<input type="email" class="form-control" name="email" id="email" value="<?= $userData['email']; ?>" disabled>
								</div>
								<?php if ($userData['new_email']): ?>
									<div class="mb-3">
										<label for="pendingemail" class="form-label"><?= lang('Auth.pendingEmail') ?></label>
										<input type="email" class="form-control" name="new_email" id="new_email" value="<?= $userData['new_email']; ?>" disabled>
								</div>
								<?php endif; ?>
								<div class="mb-3">
									<?= csrf_field() ?>
									<button type="submit" class="btn btn-primary"><?= lang('Auth.update') ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<?= lang('Auth.changeEmail') ?>
						</button>
					</h2>
					<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<p><?= lang('Auth.changeEmailInfo') ?></p>
							<form method="POST" action="<?= site_url('change-email'); ?>" accept-charset="UTF-8" onsubmit="changeEmail.disabled = true; return true;">
								<div class="mb-3">
									<label for="newemail" class="form-label"><?= lang('Auth.newEmail') ?></label>
									<input type="email" class="form-control" name="new_email" id="new_email" value="<?= old('new_email') ?>" required>
								</div>
								<div class="mb-3">
									<label for="password" class="form-label"><?= lang('Auth.currentPassword') ?></label>
									<input type="password" class="form-control" name="password" id="password" value="" required>
								</div>
								<div class="mb-3">
									<?= csrf_field() ?>
									<button type="submit" class="btn btn-primary" name="changeEmail"><?= lang('Auth.update') ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<?= lang('Auth.changePassword') ?>
						</button>
					</h2>
					<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<form method="POST" action="<?= site_url('change-password'); ?>" accept-charset="UTF-8" onsubmit="changePassword.disabled = true; return true;">
								<div class="mb-3">
									<label for="password" class="form-label"><?= lang('Auth.currentPassword') ?></label>
									<input type="password" class="form-control" name="password" id="password" value="" minlength="5" required>
								</div>
								<div class="mb-3">
									<label for="newpassword" class="form-label"><?= lang('Auth.newPassword') ?></label>
									<input type="password" class="form-control" name="new_password" id="new_password" value="" minlength="5" required>
								</div>
								<div class="mb-3">
									<label for="confirmpassword" class="form-label"><?= lang('Auth.newPasswordAgain') ?></label>
									<input type="password" class="form-control" name="new_password_confirm" id="new_pasnew_password_confirmword" value="" minlength="5" required>
								</div>
								<div class="mb-3">
									<?= csrf_field() ?>
									<button type="submit" class="btn btn-primary" name="changePassword"><?= lang('Auth.update') ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							<?= lang('Auth.deleteAccount') ?>
						</button>
					</h2>
					<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<p><?= lang('Auth.deleteAccountInfo') ?></p>
							<form method="POST" action="<?= site_url('delete-account') ?>" accept-charset="UTF-8">
								<div class="mb-3">
									<label for="password" class="form-label"><?= lang('Auth.currentPassword') ?></label>
									<input type="password" class="form-control" name="password" id="password" value="" required>
								</div>
								<div class="mb-3">
									<?= csrf_field() ?>
									<button type="submit" class="btn btn-primary" onclick="return confirm('<?= lang('Auth.areYouSure') ?>')"><?= lang('Auth.deleteAccount') ?></button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?>