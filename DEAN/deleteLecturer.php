<?php
include "../db_connection.php";

$successMessage = $errorMessage = "";

if (isset($_GET['LECNum'])) {
    $lecturnamee = $_GET['LECNum'];

    // Perform database query to delete lecturer information
    $query = "DELETE FROM lec WHERE LECNum = '$lecturnamee'";

    if (mysqli_query($conn, $query)) {
        // Deletion successful
        $successMessage = "Lec with ID: $lecturnamee has been deleted successfully.";
    } else {
        // Deletion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}

// Redirect to manageLecturer.php after deletion
header("Location: manage_lecturer.php");
exit();
?>
