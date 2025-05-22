<?php
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $package = $_POST['package'];
    $program = $_POST['program_name'];

    $stmt = $conn->prepare("INSERT INTO hiitp (username, package, program_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $package, $program);

    if ($stmt->execute()) {
        echo "<script>alert('You have successfully joined the program!'); window.location.href='Group2.php';</script>";
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
    <title>Group Training Programs</title>
    <link rel="stylesheet" href="CSS/group.css">
    <script defer src="JS/group.js"></script>
</head>
<body>
    <div class="background"></div>
    <h2>Group Training Programs</h2>
    <div class="program-container">

        <div class="program-card">
            <div class="program-title">🔥 HIIT Bootcamp</div>
            <div class="program-description">
                A high-intensity interval training session with a mix of cardio, strength, and endurance exercises.
                <ul>
                    <li>✔ Short bursts of intense exercise with brief rests</li>
                    <li>✔ Enhances cardiovascular fitness and fat-burning</li>
                    <li>✔ Ideal for all fitness levels</li>
                </ul>
            </div>
            <button class="join-btn" data-program="HIIT Bootcamp">Join In</button>
        </div>

        <div class="program-card">
            <div class="program-title">💪 Strength & Conditioning</div>
            <div class="program-description">
                A group session focusing on weight training, functional movements, and endurance.
                <ul>
                    <li>✔ Builds muscular strength, power, and stamina</li>
                    <li>✔ Combines resistance training with explosive movements</li>
                    <li>✔ Helps improve overall athletic performance</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Strength & Conditioning">Join In</button>
        </div>

        <div class="program-card">
            <div class="program-title">⚡ CrossFit Style Workout</div>
            <div class="program-description">
                A combination of weightlifting, gymnastics, and cardio exercises in a timed circuit format.
                <ul>
                    <li>✔ Full-body workouts targeting strength and agility</li>
                    <li>✔ Emphasizes high-intensity functional movements</li>
                    <li>✔ Ideal for those seeking variety and challenge</li>
                </ul>
            </div>
            <button class="join-btn" data-program="CrossFit Style Workout">Join In</button>
        </div>

    </div>

    <!-- Pop-up Form -->
    <div id="popup-form" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h3>Join Program</h3>
            <form id="join-form" action="Group2.php" method="POST">
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

   
<script>
    document.addEventListener("DOMContentLoaded", function () {
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
