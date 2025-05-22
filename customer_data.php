<?php
session_start();
include('db_con.php');

header('Content-Type: application/json');

// Debugging session
if (!isset($_SESSION['username'])) {
    echo json_encode(["error" => "User not logged in or session expired"]);
    exit;
}

$username = $_SESSION['username'];

// Debugging: Check username
if (empty($username)) {
    echo json_encode(["error" => "Session variable is empty"]);
    exit;
}

$query = "SELECT id, role, first_name, last_name, username, Email, phone_number, address, BMI FROM sing_up WHERE username = ?";

if ($stmt = mysqli_prepare($conn, $query)) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        echo json_encode($user);
    } else {
        echo json_encode(["error" => "User not found in database"]);
    }

    mysqli_stmt_close($stmt);
} else {
    echo json_encode(["error" => "Database query failed"]);
}
?>
