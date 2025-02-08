<?php
session_start();
include('db.php');

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Get event registrations
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];

    // Get all registrations for the specified event
    $stmt = $pdo->prepare("SELECT users.name, users.email FROM registrations 
                           INNER JOIN users ON registrations.user_id = users.id 
                           WHERE registrations.event_id = ?");
    $stmt->execute([$event_id]);
    $registrations = $stmt->fetchAll();

    // Create CSV output
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="registrations.csv"');

    $output = fopen('php://output', 'w');
    fputcsv($output, ['Name', 'Email']);

    foreach ($registrations as $registration) {
        fputcsv($output, [$registration['name'], $registration['email']]);
    }

    fclose($output);
    exit;
} else {
    echo "Event ID not provided!";
}
?>
