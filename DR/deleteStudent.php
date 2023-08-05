<?php
// Include the database connection file
include "db_connection.php";

$successMessage = $errorMessage = "";

if (isset($_GET['Registration_No'])) {
    $Registration_No = $_GET['Registration_No'];

    // Perform database query to delete student information
    $query = "DELETE FROM students WHERE Registration_No = '$Registration_No'";

    if (mysqli_query($conn, $query)) {
        // Deletion successful
        $successMessage = "Student with ID: $studentId has been deleted successfully.";
    } else {
        // Deletion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}

// Redirect to manageStudent.php after deletion
header("Location: manageStudent.php");
exit();
?>
