<?php
include 'db_con.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $join_date = mysqli_real_escape_string($conn, $_POST['join_date']);

    // Prepare the SQL query
    $sql = "INSERT INTO abs (name, username, join_date) VALUES ('$name', '$userName', '$join_date')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Successfully joined!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); // Close database connection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs Workout Plan - 10% Off</title>
    <style>
        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 50%;
            border-radius: 10px;
            text-align: center;
        }

        .close-btn {
            float: right;
            font-size: 24px;
            cursor: pointer;
        }

        .close-btn:hover {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="CSS/full_body.css">
</head>
<body>

    <div class="background"></div>
    
    <nav>
        <img src="img/logo.jpg" alt="Logo">
        <ul>
            <li><a href="home2.php">HOME</a></li>
            <li><a href="#about-section">ABOUT</a></li>
            <li><a href="Countact.html">CONTACT</a></li>
            <li class="dropdown">
                <a href="#">Programs</a>
                <div class="dropdown-content">
                    <a href="#">Group Training</a>
                    <a href="#">Personal Training</a>
                    <a href="#">Meal Plans</a>
                    <a href="#">Yoga</a>
                    <a href="#">Zumba</a>
                </div>
            </li>
            <li><a href="Trainer.html">Trainers</a></li>
        </ul>
    </nav>
    <div class="container">
        <header>
            <h1>🔥 10% Off Abs Workout Plan</h1>
            <p>Define your abs with targeted core workouts designed for strength, endurance, and fat loss.</p>
        </header>

        <section class="benefits">
            <h2>🔥 Key Benefits:</h2>
            <ul>
                <li>✅ <b>Strengthens & tones</b> your core</li>
                <li>✅ <b>Improves posture</b> & balance</li>
                <li>✅ <b>Quick & effective</b> daily routines</li>
            </ul>
        </section>

        <section class="included">
            <h2>💪 What’s Included?</h2>
            <ul>
                <li>🏋️‍♂️ Progressive core workouts (Beginner to Advanced)</li>
                <li>🔥 Planks, crunches, and dynamic exercises</li>
                <li>⚡ Fat-burning strategies for visible abs</li>
            </ul>
        </section>

        <div class="cta">
            <h2>💡 Start Eating Right Today!</h2>
            <button id="joinBtn">Join Now</button>
        </div>
     <!-- Join Now Modal -->
     <div id="joinModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Join the Program</h2>
        <form id="joinForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required><br><br>

            <label for="userName">Username:</label>
            <input type="text" id="userName" name="userName" placeholder="Choose a username" required><br><br>

            <label for="join_date">Date of Joining:</label>
            <input type="date" id="join_date" name="join_date" placeholder="Select joining date" required><br><br>

            <button type="submit">Submit</button>
        </form>
        <p id="responseMessage"></p>
    </div>
</div>
    
    <script>
    // Get modal elements
    var modal = document.getElementById("joinModal");
    var joinBtn = document.getElementById("joinBtn");
    var closeBtn = document.getElementsByClassName("close-btn")[0];
    
    // Open modal when "Join Now" button is clicked
    joinBtn.onclick = function () {
        modal.style.display = "block";
    };
    
    // Close modal when close button is clicked
    closeBtn.onclick = function () {
        modal.style.display = "none";
    };
    
    // Close modal when clicking outside of it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    
    // Handle form submission with AJAX
    document.getElementById("joinForm").onsubmit = function (event) {
        event.preventDefault(); // Prevent default form submission
    
        var formData = new FormData(this);
    
        fetch("abs_workout.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById("responseMessage").innerHTML = data; // Display success/error message
            this.reset(); // Reset form fields
        })
        .catch(error => console.error("Error:", error));
    };
    </script>
    </div>
</body>
</html>