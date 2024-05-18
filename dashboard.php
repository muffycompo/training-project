<?php 
include('application/start.php');
include('application/authentication.php');
include('layout/header.php');
?>

<?php
  $user = $_SESSION['user'];

  include('layout/top-header.php');
?>

<div class="container-fluid">
      <div class="row">
          <?php include('layout/navigation.php'); ?>
          
          <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
              </nav>
              <h1 class="h2">Dashboard</h1>
              <p>Welcome back, <span class="font-weight-bold"><?php echo $user['name'] ?></span>. Use the navigation links on the left to manage your records.</p>
              
              <footer class="pt-5 d-flex justify-content-between">
                  <span>Copyright © 2024 <a href="#">Backend Project</a></span>
                  <ul class="nav m-0">
                      <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Contact</a>
                      </li>
                    </ul>
              </footer>
          </main>
      </div>
</div>

<?php include('layout/footer.php'); ?>