<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
    <link rel="stylesheet" href="CSS/Tfeedback.css"> <!-- Correctly placed CSS link -->
</head>
<body>
<div class="background"></div>
    <div class="feedback-section">
        <h2>User Feedback</h2>
        <div id="feedbackContainer">
            <!-- Feedback will be dynamically loaded here -->
        </div>
    </div>
    <div>
<a href="trainer_home.html" class="back-button">← Back</a>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            fetch('get_feedbacks.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById("feedbackContainer").innerHTML = data;

                    // Toggle heart "like" animation
                    document.querySelectorAll('.heart').forEach(heart => {
                        heart.addEventListener('click', () => {
                            heart.classList.toggle('liked');
                        });
                    });
                });
        });
    </script>

</body>
</html>
