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
    
    
    // Default role for staff
    $role = 'staff';

    $sql = "INSERT INTO sing_up (role, first_name, last_name, Email, phone_number, address, BMI, username, password) VALUES ('$role', '$first_name', '$last_name', '$Email', '$phone_number', '$address', '$BMI', '$username', '$password')";
    

    if ($conn->query($sql) === TRUE) {
        echo "Staff added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
