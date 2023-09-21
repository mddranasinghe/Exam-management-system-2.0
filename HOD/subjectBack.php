<?php
include "../db_connection.php";
include "./Admin_nav.php";
$aux=[];
$proper=[];
$courseCode=[];
$courseName=[];
$yearNumber;
$semesterNumber;
switch ($_POST['year']) {
    case '1st year':
        $yearNumber=1;
        break;
    case '2nd year':
        $yearNumber=2;
        break;
    case '2nd year':
        $yearNumber=3;
        break;
    case '2nd year':
        $yearNumber=4;
        break;
    default:
        break;
}
switch ($_POST['semester']) {
    case '1st semester':
        $semesterNumber=1;
        break;
    case '2nd semester':
        $semesterNumber=2;
        break;
    default:
        break;
}
    if (isset($_POST["submit"])) {
        $k=1;
        $j=1;
        $credit=1;
        foreach ($_POST as $key => $value) {
            if (substr($key,0,3)=="AUX") {
                if(substr($key,-6,6)=="Credit"){
                    $credit=$value;
                }else{
                    $aux["AUX".$yearNumber.$semesterNumber.$k.$credit]=$value;
                    $k++;
                }
                
            }else if($key!='year' && $key!='semester' && $key!='courseCodeLetters' && $key!='properAmount' && $key!='auxAmount' && $key!='faculty' && $key!='submit' && $key!='overWrite'){
                if(substr($key,-6,6)=="Credit"){
                    $credit=$value;
                }else{
                    $proper[$_POST['courseCodeLetters'].$yearNumber.$semesterNumber.$j.$credit]=$value;
                    $j++;
                }
                
            }
        }
        $subjects=array_merge($aux,$proper);
    foreach ($subjects as $key => $value) {
        $courseCode[]=$key;
        $courseName[]=$value;
    }
    foreach($subjects as $key => $value){
        echo $key." => ".$value."<br>";
    }
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
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $faculty=$_POST['faculty'];
    $sql="SELECT id FROM course_offerings WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0){
        if(isset($_POST['overWrite'])){
            $i=0;
            foreach ($courses as $code => $subject) {
                if($i<sizeof($subjects)){
                    $query="UPDATE course_offerings SET $code='$courseCode[$i]', $subject='$courseName[$i]' WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
                    mysqli_query($conn,$query);
                    echo mysqli_error($conn);
                }else{
                    $query="UPDATE course_offerings SET $code=null, $subject=null WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
                    mysqli_query($conn,$query);
                    echo mysqli_error($conn);
                }
                $i++;
            }
            // $query="UPDATE course_offering SET"
        }else{
            echo "Subjects alredy exists. Try with overwrite again!";
            ?>
            <script> location.replace("./manageSubjects.php"); </script>
            <?php
        }
    }else{
        $query="INSERT INTO course_offerings (year,semester,faculty) VALUES ('$year','$semester','$faculty')";
        mysqli_query($conn,$query);
        $i=0;
        foreach ($courses as $code => $subject) {
            if($i<sizeof($subjects)){
                $query="UPDATE course_offerings SET $code='$courseCode[$i]', $subject='$courseName[$i]' WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
                mysqli_query($conn,$query);
                echo mysqli_error($conn);
            }else{
                $query="UPDATE course_offerings SET $code=null, $subject=null' WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
                mysqli_query($conn,$query);
                echo mysqli_error($conn);
            }
            $i++;
        }
    }
    }
    ?>
    

            <script> location.replace("./manageSubjects.php"); </script>
    <?php
    // while ($data=mysqli_fetch_assoc($result)) {
    //     echo $data['id']."<br>";
    // }
?>