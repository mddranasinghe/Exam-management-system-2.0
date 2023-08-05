<?php

include "../db_connection.php";
include "./Admin_nav.php";


if (isset($_SESSION['regNum'])) {

    $queryStudents = "SELECT COUNT(*) AS total_students FROM students";
    $resultStudents = mysqli_query($conn, $queryStudents);
    $rowStudents = mysqli_fetch_assoc($resultStudents);
    $totalStudents = $rowStudents['total_students'];
}
?>

<div style="margin-top:100px;" >

                <h3 style="text-align: center;">Student</h3>
                <p style="text-align: center;">Total Students: <?php echo $totalStudents; ?></p>
                <div style="text-align: center;">
              <a href="AddUser.php" class="btn btn-primary">Add Students</a>
                    <a href="manageStudent.php" class="btn btn-secondary">Manage Students</a>
</div>        
