<?php include "./Admin_nav.php";
include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $year = $_POST["year"];
    $semester=$_POST["semester"];
    $faculty=$_POST["faculty"];
 
    $stmt = $conn->prepare("SELECT *  FROM course_offerings WHERE  year= ? and semester= ? and faculty= ?");
    $stmt->bind_param("sss",$year,$semester,$faculty);
    $stmt->execute(); 
    

    $result = $stmt->get_result();
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $course_code_1 = $row["course_code_1"];
        $subject_name_1 = $row["subject_name_1"];
        $course_code_2 = $row["course_code_2"];
        $subject_name_2 = $row["subject_name_2"];

        $course_code_3 = $row["course_code_3"];
        $subject_name_3 = $row["subject_name_3"];
        $course_code_4 = $row["course_code_4"];
        $subject_name_4 = $row["subject_name_4"];
        
        $course_code_5 = $row["course_code_5"];
        $subject_name_5 = $row["subject_name_5"];
        $course_code_6 = $row["course_code_6"];
        $subject_name_6 = $row["subject_name_6"];
       

        $course_code_7 = $row["course_code_7"];
        $subject_name_7 = $row["subject_name_7"];
        $course_code_8 = $row["course_code_8"];
        $subject_name_8 = $row["subject_name_8"];

        $course_code_9 = $row["course_code_9"];
        $subject_name_9 = $row["subject_name_9"];
        $course_code_10 = $row["course_code_10"];
        $subject_name_10 = $row["subject_name_10"];
        $course_code_11 = $row["course_code_11"];
        $subject_name_11 = $row["subject_name_11"];
        $course_code_12 = $row["course_code_12"];
        $subject_name_12 = $row["subject_name_12"];
 
        $course_code_13= $row["course_code_13"];
        $subject_name_13 = $row["subject_name_13"];
        $course_code_14 = $row["course_code_14"];
        $subject_name_14 = $row["subject_name_14"];
        $course_code_15= $row["course_code_15"];
        $subject_name_15 = $row["subject_name_15"];
    } else {
     
        $course_code_1 = "";
        $subject_name_1 = "";
        $course_code_2= "";
        $subject_name_2 = "";

        $course_code_3 = "";
        $subject_name_3 = "";
        $course_code_4= "";
        $subject_name_4 = "";

        $course_code_5= "";
        $subject_name_5 = "";
        $course_code_6= "";
        $subject_name_6 = "";

        $course_code_7 = "";
        $subject_name_7 = "";
        $course_code_8= "";
        $subject_name_8 = "";

        $course_code_9= "";
        $subject_name_9 = "";
        $course_code_10= "";
        $subject_name_10 = "";
        $course_code_11= "";
        $subject_name_11 = "";
        $course_code_12= "";
        $subject_name_12 = "";
        $course_code_13= "";
        $subject_name_13 = "";
        $course_code_14= "";
        $subject_name_14 = "";
        $course_code_15= "";
        $subject_name_15 = "";
        

 
    }
} else {

    $year  = "";
    $semester= "";
    $faculty = "";
    $course_code_1 = "";
    $subject_name_1 = "";
    $course_code_2= "";
    $subject_name_2 = "";
    $course_code_3 = "";
    $subject_name_3 = "";
    $course_code_4= "";
    $subject_name_4 = "";

    $course_code_5= "";
    $subject_name_5 = "";
    $course_code_6= "";
    $subject_name_6 = "";

    $course_code_7 = "";
    $subject_name_7 = "";
    $course_code_8= "";
    $subject_name_8 = "";

    $course_code_9= "";
    $subject_name_9 = "";
    $course_code_10= "";
    $subject_name_10 = "";
    $course_code_11= "";
    $subject_name_11 = "";
    $course_code_12= "";
    $subject_name_12 = "";
    $course_code_13= "";
    $subject_name_13 = "";
    $course_code_14= "";
    $subject_name_14 = "";
    $course_code_15= "";
    $subject_name_15 = "";
}




?>
<!DOCTYPE html>
<html>
<head>
    <title>exam entry page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<table>
    <tr><td>
  
                            <select name="faculty" id="faculty"  class="form-control col-s m-2 col-form-label"  style="width:310px">
                                    <option value="">Select Faculty &nbsp</option>
                                    <option value="Technological studies">Technological Studies</option>
                                    <option value="applied sceince">Applied Sceince</option>
                                    <option value="manegment">Business Studies</option>
                                </select></td>
            
                      
                                <td> <select name="year" id="year"  class="form-control col-s m-2 col-form-label"  style="width:310px">
                                    <option value="">Select year</option>
                                    <option value="1st year">1st year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>

                                   
                                </select></td>
                             
                      
                                <td>  <select name="semester" id="language"    class="form-control col-s m-2 col-form-label" style="width:310px">
                                    <option value="">Select Semester</option>
                                    <option value="1st semester">1st semester</option>
                                    <option value="2nd semester">2nd semester</option>
                                </select></td>
                                   <td> 
                 
<div >
                            <input type="submit"  value="GET" class="btn btn-success m-2"style="width:200px"></div>



</td>
</tr></table>
<hr>
    <table class="table table-stripped m-2 table table-hover" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th style="width:20%">FACULTY</th>
                <th style="width:10%">YEAR</th>
                <th style="width:10%">SEMESTER</th>
                <th style="width:10%">COURSE CODE</th>
                <th style="width:20%">SUBJECT TITLE</th>
                <th style="width:30%">ASSIGN LECTURER</th>
            </tr>
        </thead>

        <?php
        $courses = array(
            'course_code_1' => 'subject_name_1',
            'course_code_2' => 'subject_name_2',
            'course_code_3' => 'subject_name_3',
            'course_code_4' => 'subject_name_4',
            'course_code_5' => 'subject_name_5',
            'course_code_6' => 'subject_name_6',
            'course_code_7' => 'subject_name_7',
            'course_code_8' => 'subject_name_8',
            'course_code_9' => 'subject_name_9',
            'course_code_10' => 'subject_name_10',
            'course_code_11' => 'subject_name_11',
            'course_code_12' => 'subject_name_12',
            'course_code_13' => 'subject_name_13',
            'course_code_14' => 'subject_name_14',
            'course_code_15' => 'subject_name_15',
        );

        foreach ($courses as $course_code => $subject_name) {
            if (!empty($row[$course_code]) && !empty($row[$subject_name])) {
                echo '<tr>';
                echo '<td style="width: 10%;"><input class="form-control" type="text" name="faculty" value="' . $faculty . '"></td>';
                echo '<td style="width: 10%;"><input class="form-control" type="text" name="year" value="' . $year . '"></td>';
                echo '<td style="width: 10%;"><input class="form-control" type="text" name="semester" value="' . $semester . '"></td>';
                echo '<td style="width: 10%;"><input class="form-control" type="text" name="course_code" value="' . $row[$course_code] . '"></td>';
                echo '<td style="width: 30%;"><input class="form-control" type="text" name="subject_name" value="' . $row[$subject_name] . '"></td>';
        
                echo '<td style="width: 30%;"><input class="form-control" type="text" name="LECNum"></td>';
                echo '<td><input type="submit" value="ASSIGN" class="btn btn-info m-2" style="width:100px" name="Assign"></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $subject_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);
    $LECNum = mysqli_real_escape_string($conn, $_POST['LECNum']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);


    echo $year ;
    echo $semester ;
    echo    $subject_code ;
    echo $subject_name ;
    echo $LECNUm ;
    echo $faculty ;

    exit();
}
// Initialize variables

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $subject_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    $subject_name = mysqli_real_escape_string($conn, $_POST['subject_name']);
    $LECNum = mysqli_real_escape_string($conn, $_POST['LECNum']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);

    // Check if the record with subject_code exists
    $checkQuery = "SELECT * FROM asign_lecturer WHERE subject_code = '$subject_code'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // The record already exists, perform an UPDATE
        $updateQuery = "UPDATE asign_lecturer SET
            year = '$year',
            semester = '$semester',
            subject_name = '$subject_name',
            LECNum = '$LECNum',
            faculty = '$faculty'
            WHERE subject_code = '$subject_code'";

        if (mysqli_query($conn, $updateQuery)) {
            echo "Record updated successfully!";

        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        // The record doesn't exist, perform an INSERT
        $insertQuery = "INSERT INTO asign_lecturer (year, semester, subject_code, subject_name, LECNum, faculty)
            VALUES ('$year', '$semester', '$subject_code', '$subject_name', '$LECNum', '$faculty')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "New record inserted successfully!";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}

$conn->close();

*/
?>
