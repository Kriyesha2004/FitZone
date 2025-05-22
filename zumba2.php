<?php
include 'db_con.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $package = $_POST['package'];
    $program = $_POST['program_name'];

    $stmt = $conn->prepare("INSERT INTO zumba (username, package, program_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $package, $program);

    if ($stmt->execute()) {
        echo "<script>alert('You have successfully joined the Zumba class!'); window.location.href='zumba2.php';</script>";
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
    <title>Zumba Classes</title>
    <link rel="stylesheet" href="CSS/zumba.css">
    <script defer src="JS/zumba.js"></script>
</head>
<body>
    <div class="background"></div>
    <h2>💃 Zumba Classes</h2>
    <div class="zumba-container">
        
        <div class="zumba-card">
            <div class="zumba-title">🟢 Beginner Zumba</div>
            <div class="zumba-description">
                Simple steps and slow-paced movements for newcomers.
                <ul>
                    <li>✔ Easy-to-follow routines</li>
                    <li>✔ Builds rhythm, coordination, and confidence</li>
                    <li>✔ Perfect for all ages and fitness levels</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Beginner Zumba">Join In</button>
        </div>

        <div class="zumba-card">
            <div class="zumba-title">🔥 Cardio Zumba</div>
            <div class="zumba-description">
                A high-intensity, dance-based cardio workout.
                <ul>
                    <li>✔ Boosts endurance and burns calories</li>
                    <li>✔ Energetic music and fast-paced movements</li>
                    <li>✔ Great for improving cardiovascular fitness</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Cardio Zumba">Join In</button>
        </div>

        <div class="zumba-card">
            <div class="zumba-title">🎈 Zumba Kids</div>
            <div class="zumba-description">
                A fun and energetic dance class designed for children.
                <ul>
                    <li>✔ Kid-friendly music and simple routines</li>
                    <li>✔ Encourages movement, fun, and social interaction</li>
                    <li>✔ Improves coordination and motor skills</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Zumba Kids">Join In</button>
        </div>

    </div>

    <!-- Pop-up Form -->
    <div id="popup-form" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h3>Join Zumba Class</h3>
            <form id="join-form" action="zumba2.php" method="POST">
                <input type="hidden" name="program_name" id="program_name">
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="package">Choose Package:</label>
                <select id="package" name="package" required>
                    <option value="Basic - $10">$10 for Basic Package</option>
                    <option value="Premium - $20">$20 for Premium Package</option>
                    <option value="Standard - $35">$35 for Standard Package</option>
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
