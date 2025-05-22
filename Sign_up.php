<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="CSS/singup.css">
</head>
<body>
    <form action="Sign_up.php" method="POST" onsubmit="return validateForm()">
    <input type="text" name="role" placeholder="role(customer)" required>
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="BMI" placeholder="BMI" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
    <script>
        function validateForm() {
            let password = document.getElementById("password").value;
            let confirm_password = document.getElementById("confirm_password").value;
            if (password !== confirm_password) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>


<?php
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Email = $_POST['email'];
    $phone  = $_POST['phone'];
    $address = $_POST['address'];
    $BMI = $_POST['BMI'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validate connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Corrected SQL query
    $query = "INSERT INTO sing_up (role, first_name, last_name, Email, phone_number, address, BMI, username, password) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Corrected bind_param (added missing string type for BMI)
    $stmt->bind_param("sssssssss", $role, $first_name, $last_name, $Email, $phone, $address, $BMI, $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
    

    $stmt->close();
    $conn->close();
}
?>
