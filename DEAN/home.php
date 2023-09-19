<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <style type="text/css">

body{
    background-color:#e4bfe2;
    
}


.home-page-full

{
    margin-left: 0%;
    position: absolute;
    width:100%;
	height: 90%;
    background-color:#e4bfe2;
    transition: 0.5s; 
}
.notifiction
{
margin-bottom: 50%;
background-color:#e4bfe2;
}
</style>

</head>
<body>
<div class="home-page-full" id="home-page">
<img src="home.png" alt="home" height="50% "width="100%">




<div class=notifiction>
<h2>EXAMINATION NOTIFICATIONS</h2>

<?php
include 'db_connection.php';

$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $id=$row['id'];
        echo '<div class="notification">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['message'] . '</p>';
        echo '<span class="timestamp">' .$row['created_at'] . '</span>';
        echo "<a class='btn btn-danger m-2 btn-sm' href='./delect.php?id=$id'>Delete</a>";
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