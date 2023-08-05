<?php 
include "nav.php";
if (isset($_SESSION['regNum'])) { 
?>
<div class="home_full">
<div class=N_box>
<div class="container p-3 my-3 bg-dark text-white">

<h2>EXAMINATION NOTIFICATIONS</h2>
<?php

include 'db_connection.php';

$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo '<div class="notification">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['message'] . '</p>';
        echo '<span class="timestamp">' . $row['created_at'] . '</span>';
        echo '</div>';
    }
} else {
    echo 'No notifications to display.';
}

$conn->close();
?>

</div>
</div>
</div>
</body>
</html>

<?php
       }
      
        ?>