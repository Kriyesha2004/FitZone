
<?php
include 'db_con.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $package = $_POST['package'];
    $program = $_POST['program_name'];

    $stmt = $conn->prepare("INSERT INTO personal (username, package, program_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $package, $program);

    if ($stmt->execute()) {
        echo "<script>alert('You have successfully joined the personal training program!'); window.location.href='personal2.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Training Programs</title>
    <link rel="stylesheet" href="CSS/personal.css">
    <script defer src="JS/personal.js"></script>
</head>
<body>
    <div class="background"></div>
    <h2>Personal Training Programs</h2>
    <div class="program-container">
        
        <div class="program-card">
            <div class="program-title">🏋️‍♂️ Bodyweight Training</div>
            <div class="program-description">
                A no-equipment, calisthenics-focused regimen designed to build strength and endurance using bodyweight exercises.
                <ul>
                    <li>✔ Push-ups, pull-ups, squats, dips, and core workouts</li>
                    <li>✔ Improves mobility, balance, and coordination</li>
                    <li>✔ Suitable for all fitness levels</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Bodyweight Training">Join In</button>
        </div>

        <div class="program-card">
            <div class="program-title">🔥 Weight Loss Program</div>
            <div class="program-description">
                A personalized fitness plan combining workouts and nutrition guidance to help shed excess weight.
                <ul>
                    <li>✔ High-intensity training (HIIT) and cardio sessions</li>
                    <li>✔ Custom meal plans for effective fat loss</li>
                    <li>✔ Regular progress tracking and coaching support</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Weight Loss Program">Join In</button>
        </div>

        <div class="program-card">
            <div class="program-title">💪 Muscle Building</div>
            <div class="program-description">
                A strength-focused program designed for muscle growth through progressive overload.
                <ul>
                    <li>✔ Targeted weight training with structured routines</li>
                    <li>✔ Focus on proper form, intensity, and recovery</li>
                    <li>✔ Progressive resistance techniques for maximum gains</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Muscle Building">Join In</button>
        </div>

    </div>

    <!-- Pop-up Form -->
    <div id="popup-form" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h3>Join Personal Training</h3>
            <form id="join-form" action="personal2.php" method="POST">
                <input type="hidden" name="program_name" id="program_name">
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="package">Choose Package:</label>
                <select id="package" name="package" required>
                    <option value="Basic - $9">$9 for Basic Package</option>
                    <option value="Premium - $18">$18 for Premium Package</option>
                    <option value="Standard - $30">$30 for Standard Package</option>
                </select>

                <button type="submit">Confirm</button>
            </form>
        </div>
    </div>

   <script>document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("popup-form");
    const closeBtn = document.querySelector(".close-btn");
    const joinButtons = document.querySelectorAll(".join-btn");
    const programInput = document.getElementById("program_name");

    joinButtons.forEach(button => {
        button.addEventListener("click", function () {
            const programName = this.getAttribute("data-program");
            programInput.value = programName;
            popup.style.display = "flex";
        });
    });

    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
});
</script>

</body>
</html>
