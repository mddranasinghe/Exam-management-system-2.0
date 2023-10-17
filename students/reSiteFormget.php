<?php
include "nav.php";
include "db_connection.php";
include "./studentFunctions.php";
$faculty = filterFaculty($_SESSION['regNum']);
$facultyName = facultyExtend($faculty);
$year = filterYear($_SESSION['regNum']);
$currentLevel = 4;
$currentSemester = 1;
date_default_timezone_set("Asia/Colombo");
$date = date("Y-m-d");
$sql = "SELECT * FROM notificationmanagement WHERE faculty=? AND indexYear=? AND category='Resit' AND YEAR<? AND semester=? AND dateTo>$date";
$sql2 = "SELECT year,semester from studentcurrentlevel WHERE Registration_No='$_SESSION[regNum]'";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssii', $faculty, $year, $currentLevel, $currentSemester);
$stmt->execute();
$result = $stmt->get_result();
$stmt = $conn->prepare($sql2);
$stmt->execute();
$result2 = $stmt->get_result();
if ($result2->num_rows > 0) {
    $data2 = $result2->fetch_row();
    $currentLevel = $data2['year'];
    $currentSemester = $data2['semester'];
}
// $yearExtended = yearExtend($currentLevel);
// $semsesterExtended = semesterExtend($currentSemester);
?>
<div class="container p-3 my-3 bg-white text-dark">
    <div class="container p-1 my-2 bg-dark text-white">
        <h2 style="text-align:center">EXAMINATION ENTRY FORM FOR PROPER CANDIDATES</h2>
    </div>
    <?php

    while ($data = $result->fetch_array()) {
    ?>
        <form action="./resit.php" method="post">
            <div class="input-group my-2">
                <input class="form-control" type="text" name="Name_of_the_examination" id="Name_of_the_examination" readonly value="<?php echo calculateExamName($data['YEAR'], $data['semester'], $data['field']) ?>">
                <input class="btn btn-success" type="submit" value="Get Application">
            </div>
        </form>
    <?php

    }
    $stmt->close();



    ?>