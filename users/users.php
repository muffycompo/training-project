<?php 
include('../application/start.php');
include('../application/authentication.php');
include('../layout/header.php');
?>

<?php
  $user = $_SESSION['user'];

  include('../layout/top-header.php');
?>

<div class="container-fluid">
      <div class="row">
          <?php include('../layout/navigation.php'); ?>
          
          <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Users</li>
                  </ol>
              </nav>
              <h1 class="h2">Manage Users</h1>
              <div class="row">
                  <div class="col-12 mb-4 mb-lg-0">
                      <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <h5 class="mb-0">Users</h5>
                          <div>
                            <a href="#" class="btn btn-sm btn-primary">New User</a>
                          </div>
                        </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">Staff ID</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Phone</th>
                                          <th scope="col">Role</th>
                                          <th scope="col">Date</th>
                                          <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">123456</th>
                                          <td>John Doe</td>
                                          <td>johndoe@gmail.com</td>
                                          <td>08012341234</td>
                                          <td>doctor</td>
                                          <td>06/05/2024</td>
                                          <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">123457</th>
                                          <td>Jane Doe</td>
                                          <td>janedoe@gmail.com</td>
                                          <td>08012341234</td>
                                          <td>pharmacist</td>
                                          <td>06/05/2024</td>
                                          <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
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

<?php include('../layout/footer.php'); ?>