<?php
session_start();
include "db_connection.php";
$id = $_POST['accid'];
$type = $_POST['acctype'];
$password = $_POST['accpassword'];
$query = "SELECT * FROM admin WHERE Id='$id' AND type='$type' AND password='$password'";
if ($type == 'Student') {
    $query = "SELECT * from students where Registration_No='$id' and password='$password'";
}
if (isset($_POST['ALogIn'])) {
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $id;
    if (mysqli_num_rows($result) == 1) {
        if ($type == 'DR') {
            header("Location: ../result.php");
        } else if ($type == 'Head') {
            header("Location: ../resultHead.php");
        } else if ($type == 'Lecturer') {
            header("Location: ../resultLec.php");
        } else if ($type == 'Student') {
            header("Location: ../Admin_home.php");
        }
    } else {
        header("Location: ../User.php");
    }
} else {
    header("Location: ../User.php");
}
?>