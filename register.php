<?php
// Include the database connection file (db.php)
include('db.php');

$message = ''; // Variable to store success or error messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input to prevent XSS and other attacks
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];  // Don't hash password yet for validation

    // Validate input fields
    if (empty($name) || empty($email) || empty($password)) {
        $message = "All fields are required!";
    } else {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email format!";
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Prepare SQL query
            try {
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, $hashedPassword]);

                // Success message
                $message = "User registered successfully!";
            } catch (PDOException $e) {
                $message = "Error: " . $e->getMessage();
            }
        }
    }
}
?>

<!-- HTML form for user registration -->
<form method="POST" action="register.php">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>

<!-- Display message after form submission -->
<?php
if (!empty($message)) {
    echo "<p>$message</p>";  // Display the success or error message
}
?>
