<?php
// Assuming you have a database connection established in db_connection.php
include "db_connection.php";

// Fetch all signature data from the database
$sql = "SELECT signature_data FROM signnew";
$result = mysqli_query($conn, $sql);

// Store all the signature data in an array
$signatureDataArray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $signatureDataArray[] = $row['signature_data'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Signatures</title>
</head>
<body>
    <h1>Uploaded Signatures</h1>

    <?php
    if (!empty($signatureDataArray)) {
        foreach ($signatureDataArray as $signatureData) {
            // Display each signature image
            echo '<img src="' . $signatureData . '" alt="Uploaded Signature" style="border: 1px solid #ccc; max-width: 400px;"><br>';
        }
    } else {
        echo '<p>No signatures uploaded yet.</p>';
    }
    ?>

    <br>
    <a href="index.html">Go back to draw a new signature</a>
</body>
</html>

