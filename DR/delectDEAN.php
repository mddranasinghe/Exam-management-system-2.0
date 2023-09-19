<?php
// Include the database connection file
include "db_connection.php";

$successMessage = $errorMessage = "";

if (isset($_GET['DEANNum'])) {
    $DEANNum = $_GET['DEANNum'];

    // Perform database query to delete HOD information
    $query = "DELETE FROM dean WHERE DEANNum = '$DEANNum'";

    if (mysqli_query($conn, $query)) {
        // Deletion successful
        $successMessage = "DEAN with ID: $DEANNum has been deleted successfully.";
    } else {
        // Deletion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}

// Redirect to manageHOD.php after deletion
header("Location: manage_dean.php");
exit();
?>
