<?php
// Include the database connection file
include "db_connection.php";

$successMessage = $errorMessage = "";

if (isset($_GET['HODNum'])) {
    $HODNum = $_GET['HODNum'];

    // Perform database query to delete HOD information
    $query = "DELETE FROM hod WHERE HODNum = '$HODNum'";

    if (mysqli_query($conn, $query)) {
        // Deletion successful
        $successMessage = "HOD with ID: $HODNum has been deleted successfully.";
    } else {
        // Deletion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}

// Redirect to manageHOD.php after deletion
header("Location: manage_hod.php");
exit();
?>
