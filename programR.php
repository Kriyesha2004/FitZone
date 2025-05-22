<?php
include 'db_con.php'; // Your existing DB connection file


$tables = [
    "abs" => "ABS Program",
    "fullbody" => "Full Body Workout",
    "g_result" => "Group Results",
    "workout" => "Workout Plan",
    "join_n" => "Join Nutrition",
    "cardio"=> "Cardio program"
];

$data = [];

foreach ($tables as $table => $title) {
    $result = mysqli_query($conn, "SELECT * FROM $table");
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $row['program'] = $title;
            $data[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program Registration</title>
    <link rel="stylesheet" href="CSS/programR.css">
</head>
<body>
    <div class="background"></div>
<div class="container">
    <h1>Program Registrations</h1>

    <div class="controls">
        <label for="programFilter">Filter by Program:</label>
        <select id="programFilter">
            <option value="All">All Programs</option>
            <?php foreach ($tables as $key => $name): ?>
                <option value="<?= $name ?>"><?= $name ?></option>
            <?php endforeach; ?>
        </select>

        <label for="searchInput">Search:</label>
        <input type="text" id="searchInput" placeholder="Search by name or username...">
    </div>

    <table id="userTable">
        <thead>
        <tr>
            <th>Program</th>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Joined Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['program']) ?></td>
                <td><?= htmlspecialchars($row['id'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($row['name'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($row['username'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($row['join_date'] ?? 'N/A') ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div>
<a href="trainer_home.html" class="back-button">← Back</a>
</div>
<script>
    const programFilter = document.getElementById("programFilter");
    const searchInput = document.getElementById("searchInput");
    const tableRows = document.querySelectorAll("#userTable tbody tr");

    function filterTable() {
        const selectedProgram = programFilter.value.toLowerCase();
        const searchValue = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const cells = row.getElementsByTagName("td");
            const program = cells[0].textContent.toLowerCase();
            const name = cells[2].textContent.toLowerCase();
            const email = cells[3].textContent.toLowerCase();

            const matchesProgram = selectedProgram === "all" || program === selectedProgram;
            const matchesSearch = name.includes(searchValue) || email.includes(searchValue);

            row.style.display = matchesProgram && matchesSearch ? "" : "none";
        });
    }

    programFilter.addEventListener("change", filterTable);
    searchInput.addEventListener("keyup", filterTable);
</script>
</body>
</html>
