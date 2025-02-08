<?php
session_start();
include('db.php');  // Make sure to include the database connection

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// Prepare SQL query to get events registered by the user
$stmt = $pdo->prepare("
    SELECT events.id, events.name, events.description, events.event_date, events.venue
    FROM events
    INNER JOIN registrations ON events.id = registrations.event_id
    WHERE registrations.user_id = ?
");

$stmt->execute([$_SESSION['user_id']]);  // Execute with the logged-in user's ID
$events = $stmt->fetchAll();

// Check if the user has any registered events
if ($events) {
    // Loop through events and display them
    foreach ($events as $event) {
        echo "<p><strong>" . htmlspecialchars($event['name']) . "</strong><br>";
        echo "Description: " . htmlspecialchars($event['description']) . "<br>";
        echo "Date: " . htmlspecialchars($event['event_date']) . "<br>";  // Update with correct column name
        echo "Venue: " . htmlspecialchars($event['venue']) . "</p>";
    }
} else {
    echo "You have not registered for any events.";
}
?>
