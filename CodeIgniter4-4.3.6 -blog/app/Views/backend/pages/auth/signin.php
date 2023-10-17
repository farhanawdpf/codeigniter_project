<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>
<div class="login-box bg-white box-shadow border-radius-10">
	<div class="login-title">
		<h2 class="text-center text-primary">Login</h2>
	</div>
	<form action="<?= base_url("Login/loginAuth");?>" method="POST">
		<div class="select-role">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn active">
					<input type="radio" name="options" id="admin" />
					<div class="icon">
						<img
							src="<?php echo base_url(); ?>/backend/vendors/images/briefcase.svg"
							class="svg"
							alt=""
						/>
					</div>
					<span>I'm</span>
					Manager
				</label>
				<label class="btn">
					<input type="radio" name="options" id="user" />
					<div class="icon">
						<img
							src="<?php echo base_url(); ?>/backend/vendors/images/person.svg"
							class="svg"
							alt=""
						/>
					</div>
					<span>I'm</span>
					Employee
				</label>
			</div>
		</div>
		<div class="input-group custom">
			<input
				name="email"
				type="text"
				class="form-control form-control-lg"
				placeholder="Email"
			/>
			<div class="input-group-append custom">
				<span class="input-group-text"
					><i class="icon-copy dw dw-user1"></i
				></span>
			</div>
		</div>
		<div class="input-group custom">
			<input
			    name="password"
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
					<input class="btn btn-primary btn-lg btn-block" type="submit" value="SLogin">
				</div>
				
			</div>
		</div>
	</form>
	</div>
<?= $this->endSection() ?>