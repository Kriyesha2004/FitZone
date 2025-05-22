<?php
include 'db_con.php'; 

if (isset($_GET['id'])) {
    $username = $_GET['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM sing_up WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        echo "Staff member deleted successfully!";
    } else {
        echo "Error deleting staff: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
