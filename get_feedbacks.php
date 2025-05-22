<?php
include("db_con.php"); // your connection file

$sql = "SELECT message FROM feedback ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="feedback">';
        echo htmlspecialchars($row["message"]);
        echo '<span class="heart">&#10084;</span>';
        echo '</div>';
    }
} else {
    echo "<p>No feedbacks found.</p>";
}
?>
