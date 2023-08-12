<?php
include './db_conn.php';

// Validate input fields
$type = $_POST['type'];
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($type) || empty($username) || empty($password)) {
    header("Location: http://localhost:8888/toyshoperp");
    exit();
}

// Sanitize input fields to prevent SQL injection
$type = mysqli_real_escape_string($con, $type);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

// Select query to check if the user exists
$query = "SELECT * FROM users WHERE type='$type' AND username='$username' AND password='$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    // User exists, redirect to the dashboard
    header("Location: http://localhost:8888/toyshoperp/public/dashboard.php");
    exit();
} else {
    // Invalid login, redirect to the login page
    header("Location: http://localhost:8888/toyshoperp");
    exit();
}

mysqli_close($con);
