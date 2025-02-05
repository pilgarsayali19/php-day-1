<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $login_time = $_SESSION['login_time'];
} else {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You logged in at: <?php echo $login_time; ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
