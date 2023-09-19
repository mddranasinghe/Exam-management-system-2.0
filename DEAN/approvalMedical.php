<?php
include "db_connection.php";
$id = mysqli_real_escape_string($conn, $_GET['Registration_No']);
$name = mysqli_real_escape_string($conn, $_GET['ExamName']);
$column = "subject_approval_" . substr(mysqli_real_escape_string($conn, $_GET['course_code']), -2);
if (substr($column, -2, 1) == "_") {
    $column = "subject_approval_" . substr($column, -1);
}
$approval = mysqli_real_escape_string($conn, $_GET['approve']);
echo $id . $column . $approval;
if ($approval == 1) {
    $sql = "UPDATE approve_state_medical set $column=1 where Registration_No='$id' AND Name_of_the_examination='$name'";
} else {
    $sql = "UPDATE approve_state_medical set $column=0 where Registration_No='$id' AND Name_of_the_examination='$name'";
}
// echo $sql;
if (mysqli_query($conn, $sql)) {
    header("Location: ./viewMedical.php?Registration_No=$id#table1");
} else {
    echo mysqli_error($conn);
}
?>