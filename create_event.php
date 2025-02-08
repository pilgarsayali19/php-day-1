<?php
session_start();
include('db.php');  // Include your database connection file

// Check if the user is logged in (optional, based on your use case)
if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to add an event.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data and sanitize it
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));
    $event_date = $_POST['event_date'];  // Assuming this is in a valid format (e.g., 'YYYY-MM-DD')
    $venue = htmlspecialchars(trim($_POST['venue']));
    $fee = $_POST['registration_fee'];  // Make sure this is a valid number (float or int)

    // Basic validation
    if (empty($name) || empty($description) || empty($event_date) || empty($venue) || empty($fee)) {
        echo "All fields are required!";
        exit;
    }

    // Ensure the registration fee is numeric
    if (!is_numeric($fee)) {
        echo "The registration fee must be a number.";
        exit;
    }

    // Prepare the SQL query
    try {
        // Using placeholders for parameterized queries to avoid SQL injection
        $stmt = $pdo->prepare("INSERT INTO events (name, description, event_date, venue, registration_fee) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $description, $event_date, $venue, $fee]);

        echo "Event added successfully!";
    } catch (PDOException $e) {
        // Display a generic error message and log the detailed error message
        echo "Error: Unable to add event.";
        error_log($e->getMessage());  // Log the error for further debugging
    }
}
?>

<!-- HTML Form for event input -->
<form method="POST" action="your-script.php">
    <label for="name">Event Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <label for="event_date">Event Date:</label>
    <input type="date" id="event_date" name="event_date" required><br>

    <label for="venue">Venue:</label>
    <input type="text" id="venue" name="venue" required><br>

    <label for="registration_fee">Registration Fee:</label>
    <input type="number" id="registration_fee" name="registration_fee" required><br>

    <button type="submit">Add Event</button>
</form>

