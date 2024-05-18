<?php

include('application/start.php');

$email = $_POST['email'];
$password = $_POST['password'];


if ($email == '' || $password == '') {
    $_SESSION['error'] = 'The email address and password fields are required.';

    header('location: index.php');

    exit();
}

$result = mysqli_query(
    $database_connection,
    "SELECT * FROM users WHERE email = '$email'"
);

if (mysqli_num_rows($result) === 0) {
    $_SESSION['error'] = 'Invalid credentials';

    header('location: index.php');

    exit();
}

$user = mysqli_fetch_assoc($result);

if (password_verify($password, $user['password']) === false) {
    $_SESSION['error'] = 'Invalid credentials';

    header('location: index.php');

    exit();
}

$_SESSION['user'] = $user;

header('location: dashboard.php');

exit();