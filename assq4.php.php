<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="display.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mobile">Mobile Number:</label><br>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
