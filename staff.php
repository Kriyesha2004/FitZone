<?php
include 'db_con.php';

// Fetch only staff members
$sql = "SELECT * FROM sing_up WHERE role='staff'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff | FitZone</title>
    <link rel="stylesheet" href="CSS/staff.css">
    <script defer src="js/admin.js"></script>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="Admin_home.html">Home Pages</a></li>
            <li><a href="staff.php">Manage Staff</a></li>
            <li><a href="manage_customer.php">Manage Customers</a></li>
        
            <li><a href="home1.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Manage Staff</h1>

        <h2>Add New Staff Member</h2>
        <form id="addStaffForm">
            <input type="text" name="role" placeholder="Role" required>
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="BMI" placeholder="BMI" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Add Staff</button>
        </form>

        <h2>Staff Members</h2>
        <table>
            <thead>
                <tr>
                
                    <th>Role</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>BMI</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="staffTable">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                    
                        <td><?php echo $row['role']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['BMI']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><button class="delete-btn" data-id="<?php echo $row['username']; ?>">Delete</button></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("addStaffForm");
    const staffTable = document.getElementById("staffTable");

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        let formData = new FormData(form);
        
        fetch("add_staff.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            location.reload();
        });
    });

    staffTable.addEventListener("click", function(event) {
        if (event.target.classList.contains("delete-btn")) {
            let id = event.target.getAttribute("data-id");

            fetch("delet_staff.php?id=" + id, { method: "GET" })
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload();
            });
        }
    });
});

</script>
</body>
</html>
