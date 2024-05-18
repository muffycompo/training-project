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
<div class="container-fluid">
        <div class="row">
            <main class="col-md-12 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="row mt-4">
                    <div class="col-4 offset-3 mb-4 mb-lg-0">
                        <div class="card">
                            <form method="post" action="reset_password.php">
                            <div class="card-body">
                              <div class="mb-3">
                                <h1 class="h2">Reset Password</h1>
                              </div>

                                <?php if (isset($_SESSION['error'])) {
                                    $error_message = $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                                  <div class="alert alert-danger alert-dismissible" role="alert">
                                    <?php echo $error_message; ?>
                                  </div>
                                <?php } ?>
                                
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label font-weight-bold">Email Address</label>
                                    <input id="email" class="form-control" name="email" type="email">
                                </div>
                              <div class="d-flex justify-content-between align-items-center">
                                <span><a href="index.php">Back</a></span>
                                <button class="btn btn-primary">Reset Password</button>
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        </div>
    <script src="/js/popper.min.js" ></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>