<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .feedback-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h2>Feedback Form</h2>
        <form id="feedbackForm">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <textarea id="message" placeholder="Your Feedback" rows="4" required></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>

    <script>
        document.getElementById('feedbackForm').addEventListener('submit', async function(event) {
            event.preventDefault();

            const feedbackData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value
            };

            try {
                const response = await fetch('/submit-feedback', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(feedbackData)
                });

                if (response.ok) {
                    alert('Feedback submitted successfully!');
                    document.getElementById('feedbackForm').reset();
                } else {
                    alert('Failed to submit feedback.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred while submitting feedback.');
            }
        });
    </script>
</body>
</html>
