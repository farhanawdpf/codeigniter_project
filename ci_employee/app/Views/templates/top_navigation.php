
<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="https://sourcecodester.com">
            <?= project_title ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($page) && strtolower($page) == 'home' ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($page) && strtolower($page) == 'employees' ? 'active' : '' ?>" href="<?= base_url("employees") ?>">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($page) && strtolower($page) == 'users' ? 'active' : '' ?>" href="<?= base_url("users") ?>">Users</a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-transparent  text-light border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello <?php echo $session->get('name') ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?= base_url("manage_account") ?>">Manage Account</a></li>
                        <li><a class="dropdown-item" href="<?= base_url("logout") ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>