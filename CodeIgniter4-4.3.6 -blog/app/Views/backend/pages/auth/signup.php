<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

	<div class="login-title">
	<h2>Register User</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
	</div>
	<form action="<?= base_url("Register/store"); ?>" method="POST">
		<div class="input-group custom">
			<input
                name ="name"
				type="text"
				value="<?= set_value('name') ?>"
				class="form-control form-control-lg"
				placeholder="name"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="icon-copy dw dw-user1"></i
				></span>
			</div>
		</div>
        <div class="input-group custom">
			<input
                name ="email"
				type="email"
				class="form-control form-control-lg"
				value="<?= set_value('email') ?>"
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
                name ="password"
				type="password"
				class="form-control form-control-lg"
				placeholder="Password"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="dw dw-padlock1"></i
				></span>
			</div>
		</div>
		<div class="input-group custom">
			<input
                name ="confirmpassword"
				type="confirmpassword"
				class="form-control form-control-lg"
				placeholder="Confirm Password"
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