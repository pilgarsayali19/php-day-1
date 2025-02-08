<?php
session_start();
include('db.php');

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

echo "<h1>Welcome to the Admin Dashboard</h1>";
echo "<a href='create_event.php'>Create Event</a><br>";
echo "<a href='admin_logout.php'>Logout</a><br>";

// Optionally, display the list of events (link to CRUD pages)
echo "<h2>Manage Events</h2>";
echo "<a href='view_events.php'>View Events</a><br>";
?>
