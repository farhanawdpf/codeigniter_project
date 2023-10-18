<div class="row justify-content-center">
    <div class="card col-md-6  shadow">
        <div class="card-body">
            <h3 class="text-center fw-bolder">Update Account Information</h3>
            <form action="/home/update_account" method="POST">
                <div class="form-group">
                    <label for="name" class="control-label text-info">Full Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" autofocus class="form-control border-0 border-bottom" placeholder="Fullname" aria-label="Fullname" aria-describedby="user-addon" value="<?= set_value('name',(isset($user['name']) ? $user['name'] : "")) ?>" required>
                        <span class="input-group-text bg-transparent  border-0 border-bottom" id="user-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="control-label text-info">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" autofocus class="form-control border-0 border-bottom" placeholder="Username" aria-label="Username" aria-describedby="user-addon" value="<?= set_value('username',(isset($user['username']) ? $user['username'] : "")) ?>" required>
                        <span class="input-group-text bg-transparent  border-0 border-bottom" id="user-addon"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label text-info">New Password</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control border-0 border-bottom" placeholder="Password" aria-label="Password" aria-describedby="pass-addon" value="<?= set_value('password') ?>">
                        <span class="input-group-text bg-transparent  border-0 border-bottom" id="pass-addon"><i class="fa fa-key"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password" class="control-label text-info">Confirm New Password</label>
                    <div class="input-group mb-3">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control border-0 border-bottom" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="pass-addon" value="<?= set_value('confirm_password') ?>">
                        <span class="input-group-text bg-transparent  border-0 border-bottom" id="pass-addon"><i class="fa fa-key"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="old_password" class="control-label text-info">Old Password</label>
                    <div class="input-group mb-3">
                        <input type="password" name="old_password" id="old_password" class="form-control border-0 border-bottom" placeholder="Old Password" aria-label="Old Password" aria-describedby="pass-addon" value="<?= set_value('old_password') ?>" required>
                        <span class="input-group-text bg-transparent  border-0 border-bottom" id="pass-addon"><i class="fa fa-key"></i></span>
                    </div>
                </div>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($err_log)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= esc($err_log) ?>
                    </div>
                <?php endif; ?>
                <div class="form-group text-end">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>