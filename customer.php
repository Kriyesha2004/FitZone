<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Sign_in.php"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/Cprofile.css">
</head>
<body>
    <div class="profile-container">
        <h2>Profile</h2>
        <form id="profileForm">
        
            
            <label>First Name:</label>
            <input type="text" id="firstName" name="first_name" disabled>

            <label>Last Name:</label>
            <input type="text" id="lastName" name="last_name" disabled>

            <label>Username:</label>
            <input type="text" id="username" name="username" disabled>

            <label>Email:</label>
            <input type="email" id="email" name="email" disabled>

            <label>Phone:</label>
            <input type="text" id="phone" name="phone" disabled>

            <label>Address:</label>
            <input type="text" id="address" name="address" disabled>

            <label>BMI:</label>
            <input type="text" id="bmi" name="bmi" disabled>

            <label>Role:</label>
            <input type="text" id="role" name="role" disabled>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("customer_data.php")  // Fetch user data from API
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error("Error:", data.error);
                    } else {
                        document.getElementById("firstName").value = data.first_name;
                        document.getElementById("lastName").value = data.last_name;
                        document.getElementById("username").value = data.username;
                        document.getElementById("email").value = data.Email;
                        document.getElementById("phone").value = data.phone_number;
                        document.getElementById("address").value = data.address;
                        document.getElementById("bmi").value = data.BMI;
                        document.getElementById("role").value = data.role;
                    }
                })
                .catch(error => console.error("Error fetching user data:", error));
        });

        function uploadImage() {
            const fileInput = document.getElementById("fileUpload");
            const file = fileInput.files[0];
            if (!file) {
                alert("Please select an image to upload.");
                return;
            }

            const formData = new FormData();
            formData.append("profile_pic", file);

            fetch("uplode_pic.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById("profileImage").src = data.image_url;
                    alert("Profile picture updated successfully!");
                } else {
                    alert("Error updating profile picture: " + data.error);
                }
            })
            .catch(error => console.error("Error uploading image:", error));
        }
    </script>
</body>
</html>
