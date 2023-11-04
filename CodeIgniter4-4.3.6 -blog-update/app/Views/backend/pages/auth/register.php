<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

	<div class="login-title">
		<h2 class="text-center text-primary">Register</h2>
	</div>
	<form action="<?= base_url("register"); ?>" method="POST">
		<div class="input-group custom">
			<input
                name ="user_name"
				type="text"
				class="form-control form-control-lg"
				placeholder="Username"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="icon-copy dw dw-user1"></i
				></span>
			</div>
		</div>
        <div class="input-group custom">
			<input
                name ="user_email"
				type="email"
				class="form-control form-control-lg"
				placeholder="email"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="icon-copy dw dw-user1"></i
				></span>
			</div>
		</div>
		<div class="input-group custom">
			<input
                name ="user_password"
				type="password"
				class="form-control form-control-lg"
				placeholder="**********"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="dw dw-padlock1"></i
				></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="input-group mb-0">
					<input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">
				</div>
				
			</div>
		</div>
	</form>
	</div>
<?= $this->endSection() ?>