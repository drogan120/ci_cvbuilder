<div class="container">
	<div class="col-sm-5 mt-5 mx-auto">
		<div class="container">
			<div class="card shadow">
				<div class="card-body">
					<h4 class="text-center text-secondary mb-3">Login</h4>
					<form method="post">
						<div class="form-group">
							<label for="uname">Username *</label>
							<input type="text" class="form-control" placeholder="Username..." name="uname" required value="<?= set_value('uname') ?>">
							<small class="text-danger"><?= form_error('uname'); ?></small>
						</div>
						<div class="form-group">
							<label for="mail_user">Email *</label>
							<input type="email" class="form-control" placeholder="Your email..." name="mail_user" required value="<?= set_value('mail_user') ?>">
							<small class="text-danger"><?= form_error('mail_user'); ?></small>
						</div>
						<div class="form-group">
							<label for="password">Password *</label>
							<input type="password" class="form-control" placeholder="Password..." name="password1" required>
							<small class="text-danger"><?= form_error('password1'); ?></small>
						</div>
						<div class="form-group">
							<label for="password">Verify Password *</label>
							<input type="password" class="form-control" placeholder="Verify Password..." name="password2" required>
							<small class="text-danger"><?= form_error('password2'); ?></small>
						</div>
						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="submit" class="btn btn-info">Submit</button>
					</form>
					<div class="text-center mt-2">
						<a href="<?= base_url('auth') ?>">login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>