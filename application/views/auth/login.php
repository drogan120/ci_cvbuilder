<div class="container">
	<div class="col-sm-5 mt-5 mx-auto">
		<div class="container">
			<div class="card shadow">
				<div class="card-body">
					<h4 class="text-center text-secondary mb-3">Login</h4>
					<form action="<?= base_url('auth/process') ?>" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" placeholder="Username..." name="email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" placeholder="Password..." name="password">
						</div>
						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="submit" class="btn btn-info" name="login">Submit</button>
					</form>
					<div class="text-center mt-2">
						<a href="<?= base_url('auth/register') ?>">Register Account?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>