<?php

include "../db_connection.php";
include "./Admin_nav.php";


if (isset($_SESSION['regNum'])) {

    $queryLecturers = "SELECT COUNT(*) AS total_lecturers FROM lec";
    $resultLecturers = mysqli_query($conn, $queryLecturers);
    $rowLecturers = mysqli_fetch_assoc($resultLecturers);
    $totalLecturers = $rowLecturers['total_lecturers'];
}
?>

<div style="margin-top:100px;" >            
                <h3 style="text-align: center;">Lecturer</h3>
                <p style="text-align: center;">Total Lecturers: <?php echo $totalLecturers; ?></p>
                <div style="text-align: center;">
                    <a href="Add_lec.php" class="btn btn-primary">Add Lecturer</a>
                    <a href="manage_lecturer.php" class="btn btn-secondary">Manage Lecturer</a>
                </div>