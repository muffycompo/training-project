<?php

include('application/start.php');

$email = $_POST['email'];
$hashed_password = password_hash('123456', PASSWORD_DEFAULT);

if ($email == '') {
    $_SESSION['error'] = 'The email address field is required.';

    header('location: forgot_password.php');

    exit();
}

$result = mysqli_query(
    $database_connection,
    "SELECT * FROM staff WHERE email = '$email'"
);

if (mysqli_num_rows($result) === 0) {
    $_SESSION['error'] = 'The email address is invalid.';

    header('location: forgot_password.php');

    exit();
}

$update = mysqli_query(
    $database_connection,
    "UPDATE staff SET password = '$hashed_password'"
);

if ($update === false) {
    $_SESSION['error'] = 'An error occurred while resetting the password.';

    header('location: forgot_password.php');

    exit();
}


$_SESSION['success'] = 'An email containing a password reset link has been sent to: ' . $email;

header('location: index.php');

exit();