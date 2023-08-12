<?php
include "db_connection.php";
$id = mysqli_real_escape_string($conn, $_GET['Registration_No']);
$column = "subject_approval_" . substr(mysqli_real_escape_string($conn, $_GET['course_code']), -2);
if (substr($column, -2, 1) == "_") {
    $column = "subject_approval_" . substr($column, -1);
}
$approval = mysqli_real_escape_string($conn, $_GET['approve']);
echo $id . $column . $approval;
if ($approval == 1) {
    $sql = "UPDATE examenrty set $column=1 where Registration_No='$id'";
} else {
    $sql = "UPDATE examenrty set $column=0 where Registration_No='$id'";
}
echo $sql;
if (mysqli_query($conn, $sql)) {
    header("Location: ./view.php?Registration_No=$id#table1");
} else {
    mysqli_error($conn);
}
?>