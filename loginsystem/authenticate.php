<?php
session_start();

// Hardcoded user for demo
$valid_username = 'user';
$valid_password = 'pass';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid username or password. <a href='index.php'>Try again</a>.";
}
