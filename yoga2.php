<?php
include 'db_con.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $package = $_POST['package'];
    $program = $_POST['program_name'];

    $stmt = $conn->prepare("INSERT INTO yoga (username, package, program_name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $package, $program);

    if ($stmt->execute()) {
        echo "<script>alert('You have successfully joined the yoga program!'); window.location.href='yoga2.php';</script>";
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
    <title>Yoga Programs</title>
    <link rel="stylesheet" href="CSS/yoga.css">
    <script defer src="JS/yoga.js"></script>
</head>
<body>
    <div class="background"></div>
    <h2>🧘‍♂️ Yoga Programs</h2>
    <div class="yoga-container">
        
        <div class="yoga-card">
            <div class="yoga-title">🌿 Hatha Yoga</div>
            <div class="yoga-description">
                A slow-paced yoga practice focusing on controlled breathing and postures.
                <ul>
                    <li>✔ Enhances flexibility, balance, and relaxation</li>
                    <li>✔ Ideal for beginners and stress relief</li>
                    <li>✔ Focus on mindful movements and deep breathing</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Hatha Yoga">Join In</button>
        </div>

        <div class="yoga-card">
            <div class="yoga-title">🌊 Vinyasa Flow</div>
            <div class="yoga-description">
                A dynamic, fluid yoga style where poses seamlessly transition into one another.
                <ul>
                    <li>✔ Improves flexibility, coordination, and stamina</li>
                    <li>✔ Breath-synchronized movements for a meditative effect</li>
                    <li>✔ Great for all levels seeking a balanced workout</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Vinyasa Flow">Join In</button>
        </div>

        <div class="yoga-card">
            <div class="yoga-title">🔥 Power Yoga</div>
            <div class="yoga-description">
                An intense, fast-paced yoga session aimed at building strength and endurance.
                <ul>
                    <li>✔ Focuses on athletic movements and core stability</li>
                    <li>✔ Enhances flexibility while developing muscular endurance</li>
                    <li>✔ Ideal for those who want a challenging workout</li>
                </ul>
            </div>
            <button class="join-btn" data-program="Power Yoga">Join In</button>
        </div>

    </div>

    <!-- Pop-up Form -->
    <div id="popup-form" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h3>Join Yoga Program</h3>
            <form id="join-form" action="yoga2.php" method="POST">
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
