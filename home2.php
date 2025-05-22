<?php 
include 'db_con.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Feedback submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Navigation Bar with Blurred Background</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="CSS/home2.css">
   <script src="./js/feedback.js"></script>
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
                <a href="Group2.php">Group Training</a>
                <a href="personal2.php">Personal Training</a>
                <a href="mealPlan1.html">Meal Plans</a>
                <a href="yoga2.php">Yoga</a>
                <a href="zumba2.php">Zumba</a>
            </div>
        </li>
        <li><a href="Trainer.html">Trainers</a></li>
        <li><a href="customer.php">My Profile</a></li>
        <li><a href="home1.php">LogOut</a></li> 
    </ul>
</nav>

    <div class="title">FitZone<br> Fitness Center</div>
    
   
 
 <section class="benefits">
    <h2>WHAT YOU WILL GET.</h2>
    <p class="subtitle">MAKE YOUR WORKOUT EASIER AND GET FASTER RESULTS</p>
    
    <div class="benefits-container" >
        <div class="benefit" onclick="window.location.href='nutrition.php'">
            <i class="fas fa-dumbbell"></i>
            <h3>12-Week Nutritional Plan </h3>
            <p>Balanced diet guide with recipes.</p>
        </div>

        <div class="benefit" onclick="window.location.href='cardio.php'">
            <i class="fas fa-utensils"></i>
            <h3> 20% Off Cardio Plan</h3>
            <p>Improve endurance and burn fat.</p>
        </div>

        <div class="benefit" onclick="window.location.href='workOut.php'">
            <i class="fas fa-home"></i>
            <h3> Home Workout Challenge</h3>
            <p>No gym? No problem!</p>
        </div>

        <div class="benefit" onclick="window.location.href='full_body.php'">
            <i class="fas fa-chart-line"></i>
            <h3>40% Off Full Body Plan</h3>
            <p>Transform your whole body.</p>
        </div>

        <div class="benefit" onclick="window.location.href='abs_workout.php'">
            <i class="fas fa-clipboard-list"></i>
            <h3>10% Off Abs Workout Plan </h3>
            <p>Get those six-pack abs.</p>
        </div>

        <div class="benefit"  onclick="window.location.href='result.php'">
            <i class="fas fa-medal"></i>
            <h3>100% Guaranteed Results</h3>
            <p>Our promise for real transformations!</p>
        </div>
    </div>
</section>

    <div id="about-section">
        <h1 class="about-title">About Us</h1>
        <p class="about-text">Welcome to <strong>FitZone Fitness Center</strong> – Where Fitness Meets Lifestyle!</p>
        <h1 class="why-title">Why Choose FitZone?</h1>
        <ul class="features-list">
            <li>✅ <strong>Modern Equipment</strong> – Latest machines & tools.</li>
            <li>✅ <strong>Expert Trainers</strong> – Certified fitness coaches.</li>
            <li>✅ <strong>Personalized Plans</strong> – Custom workouts & diets.</li>
            <li>✅ <strong>Diverse Group Classes</strong> – Zumba, HIIT, Yoga, Pilates, and more.</li>
                <li>✅ <strong>Personalized Fitness Plans</strong> – Tailored workouts and nutrition plans.</li>
                <li>✅ <strong>Flexible Membership Plans</strong> – Affordable pricing tiers for everyone.</li>
                <li>✅ <strong>Nutrition & Wellness Guidance</strong> – Expert dietary advice and meal planning.</li>
                <li>✅ <strong>Supportive Fitness Community</strong> – Encouraging environment for all.</li>
                <li>✅ <strong>Web-Based Services</strong> – Book classes, manage memberships online.</li>
        </ul>
        <h1 class="lifestyle-title">More Than Just a Gym – A Lifestyle!</h1>
            <p class="about-text">Join FitZone Fitness Center today and be part of a community that motivates, supports, and transforms! <br>💪 <strong>Stronger Every Day. Fitter Every Way.</strong> 🚀</p>
    </div>

    <button class="feedback-btn" onclick="toggleFeedback()">Feedback</button>
    <div id="feedbackForm" class="feedback" style="display: none;">
        <h2>Feedback</h2>
        <form action="home2.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
