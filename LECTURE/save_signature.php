<?php
// Assuming you have a database connection established in db_connection.php
include "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signatureData'])) {
    $signatureData = $_POST['signatureData'];

    // Save the signature data to the database
    $sql = "INSERT INTO signnew (signature_data) VALUES ('$signatureData')";

    if (mysqli_query($conn, $sql)) {
        echo "Signature saved successfully.";
    } else {
        echo "Error occurred while saving the signature: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>