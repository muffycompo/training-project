<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Project</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

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
        <h5>ROLE: <span class="font-weight-bold">Administrator</span></h5>
    </div>
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Hello, John Doe
            </button>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
            </div>
    </div>
</nav>

<div class="container-fluid">
      <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span class="ml-2">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/users.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="ml-2">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="ml-2">Patients</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span class="ml-2">Medications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="ml-2">Precriptions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        <span class="ml-2">Appointments</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
          
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