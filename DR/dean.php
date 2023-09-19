<?php

include "../db_connection.php";
include "./Admin_nav.php";


if (isset($_SESSION['regNum'])) {

    $queryDEAN = "SELECT COUNT(*) AS total_hods FROM hod";
    $resultDEAN = mysqli_query($conn, $queryDEAN);
    $rowDEAN = mysqli_fetch_assoc($resultDEAN);
    $totalDEAN = $rowDEAN['total_hods'];
}
?>

<div style="margin-top:100px;" >

                <h3 style="text-align: center;">HOD</h3>
                <p style="text-align: center;">Total HOD: <?php echo $totalDEAN; ?></p>
                <div style="text-align: center;">
                    <a href="add_HOD.php" class="btn btn-primary">Add HOD</a>
                    <a href="manage_HOD.php" class="btn btn-secondary">Manage HOD</a>
                </div>