<?php

include "../db_connection.php";
include "./Admin_nav.php";


if (isset($_SESSION['regNum'])) {

    $queryHODs = "SELECT COUNT(*) AS total_hods FROM hod";
    $resultHODs = mysqli_query($conn, $queryHODs);
    $rowHODs = mysqli_fetch_assoc($resultHODs);
    $totalHODs = $rowHODs['total_hods'];
}
?>

<div style="margin-top:100px;" >

                <h3 style="text-align: center;">HOD</h3>
                <p style="text-align: center;">Total HOD: <?php echo $totalHODs; ?></p>
                <div style="text-align: center;">
                    <a href="add_HOD.php" class="btn btn-primary">Add HOD</a>
                    <a href="manage_HOD.php" class="btn btn-secondary">Manage HOD</a>
                </div>