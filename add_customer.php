<?php
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = "customer"; // Fixed role
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $BMI = $_POST['BMI'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing

    $sql = "INSERT INTO sing_up (role, first_name, last_name, email, phone_number, address, BMI, username, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $role, $first_name, $last_name, $email, $phone, $address, $BMI, $username, $password);

    if ($stmt->execute()) {
        echo "Customer added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
