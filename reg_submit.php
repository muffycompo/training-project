<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$db = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'training_project',
    // DO NOT INCLUDE THE LINE BELOW
    3307 
);

$result = mysqli_query($db,"INSERT INTO users (name, email, password, phone, role_id, status, created_at) VALUES (
    '$name', 
    '$email', 
    '$password', 
    '$phone', 
    1, 
    1,
    NOW()
    )
");

echo 'User registered successfully';
?>