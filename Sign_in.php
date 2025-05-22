<?php
session_start();
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Query to fetch user role and hashed password from sing_up table
    $query = "SELECT role, password FROM sing_up WHERE username=?";
    
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($role, $hashed_password);
            $stmt->fetch();
            $role = strtolower($role); 

            
            if (password_verify($password, $hashed_password)) {
                
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role;

                
                if ($role == "admin") {
                    header("Location: Admin_home.html");
                } elseif ($role == "staff") {
                    header("Location: trainer_home.html");
                } else {
                    header("Location: home2.php");
                }
                exit();
            } else {
                echo "<script>alert('Invalid Password!'); window.location.href='Sign_in.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid Username!'); window.location.href='Sign_in.php';</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        die("Error preparing query: " . $conn->error);
    }
    
    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|FitZone</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="CSS/signin.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="Sign_in.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>



