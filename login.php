<?php
session_start();
include('db.php');  // Ensure that the database connection file is included

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // Prepare and execute query to find the user by email
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Check if the user exists and the password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Store user data in session for login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];  // Store email or other user details if needed

            // Redirect to dashboard after successful login
            header("Location: dashboard.php");
            exit;  // Make sure to call exit after header redirection
        } else {
            // Invalid credentials
            $error = "Invalid email or password.";
        }
    }
}
?>

<!-- HTML Login Form -->
<form method="POST" action="login.php">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<!-- Display error message if invalid credentials -->
<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
