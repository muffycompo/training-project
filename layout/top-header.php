<nav class="navbar navbar-light bg-light p-3">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
        <a class="navbar-brand" href="#">
            Backend Dashboard
        </a>
        <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="col-12 col-md-4 col-lg-2">
        <h5>ROLE: <span class="font-weight-bold">
            <?php
                if ($user['role_id'] === '1') {
                    echo 'Administrator';
                } else if ($user['role_id'] === '2') {
                    echo 'Doctor';
                } else if ($user['role_id'] === '3') {
                    echo 'Pharmacist';
                }  else if ($user['role_id'] === '4') {
                    echo 'Nurse';
                }
            ?>
        </span></h5>
    </div>
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Hello, <?php echo $user['name']; ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
            </ul>
            </div>
    </div>
</nav>