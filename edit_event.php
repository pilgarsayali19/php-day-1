<?php
session_start();
include('db.php');  // Include your database connection file

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch the event data to edit
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
    $stmt->execute([$event_id]);
    $event = $stmt->fetch();

    if (!$event) {
        echo "Event not found.";
        exit;
    }
} else {
    echo "Event ID is missing.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));
    $event_date = $_POST['event_date'];
    $venue = htmlspecialchars(trim($_POST['venue']));
    $fee = $_POST['registration_fee'];

    // Basic validation
    if (empty($name) || empty($description) || empty($event_date) || empty($venue) || empty($fee)) {
        echo "All fields are required!";
        exit;
    }

    // Update the event in the database
    $stmt = $pdo->prepare("UPDATE events SET name = ?, description = ?, event_date = ?, venue = ?, registration_fee = ? WHERE id = ?");
    $stmt->execute([$name, $description, $event_date, $venue, $fee, $event_id]);

    echo "Event updated successfully! <a href='admin_dashboard.php'>Go to Dashboard</a>";
}
?>

<h2>Edit Event</h2>

<form method="POST">
    <label>Event Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($event['name']); ?>" required><br><br>

    <label>Description:</label>
    <textarea name="description" required><?php echo htmlspecialchars($event['description']); ?></textarea><br><br>

    <label>Event Date:</label>
    <input type="date" name="event_date" value="<?php echo htmlspecialchars($event['event_date']); ?>" required><br><br>

    <label>Venue:</label>
    <input type="text" name="venue" value="<?php echo htmlspecialchars($event['venue']); ?>" required><br><br>

    <label>Registration Fee:</label>
    <input type="number" name="registration_fee" value="<?php echo htmlspecialchars($event['registration_fee']); ?>" required><br><br>

    <button type="submit">Update Event</button>
</form>
