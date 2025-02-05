<?php
session_start();

// Sample credentials for demonstration
$stored_username = 'user1';
$stored_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $stored_username && $password === $stored_password) {
        // Store user details in session
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date('Y-m-d H:i:s');

        // Redirect to welcome page
        header('Location: welcome.php');
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
