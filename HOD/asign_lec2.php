<?php include "./Admin_nav.php";
include 'db_connection.php';
?>
<style type="text/css">
    table {
        width: auto;
        margin: 5px auto;
        padding: 5px;
    }

    input {
        width: inherit;
        margin: 5px;
    }

    .wide {
        width: 50vw;
    }

    .narrow {
        width: 25vw;
    }

    .topForm {
        width: auto;
        margin: 0 5px;
        padding: 5px 5px 5px 25px;
        background-color: white;
        border-radius: 12px;
        border: 1px solid #000;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: baseline;
        justify-content: space-around;
    }

    select {
        height: min-content;
    }

    .right {
        text-align: right;
    }

    .btnAlignment {
        align-items: flex-end;
    }
</style>
<form class="topForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <select name="faculty" id="facultyDD">
        <option value="Technological Studies">Technological Studies</option>
        <option value="Business Studies">Business Studies</option>
        <option value="Applied Science">Applied Science</option>
    </select>
    <select name="year" id="yearDD">
        <option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
    </select>
    <select name="semester" id="semesterDD">
        <option value="1st semester">1st semester</option>
        <option value="2nd semester">2nd semester</option>
    </select>
    <input class="btn btn-success btnAlignment" type="submit" value="Select" name="selectSubs">
</form>
<table>
    <?php
    if (isset($_POST['selectSubs'])) {
        $_SESSION['faculty'] = $_POST['faculty'];
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['semester'] = $_POST['semester'];
        $faculty = $_SESSION['faculty'];
        $year = $_SESSION['year'];
        $semester = $_SESSION['semester'];
        $coursCode = [];
        $lecturers = [];
        $courseCodeTemp = array(
            "course_code_1" => "subject_name_1",
            "course_code_2" => "subject_name_2",
            "course_code_3" => "subject_name_3",
            "course_code_4" => "subject_name_4",
            "course_code_5" => "subject_name_5",
            "course_code_6" => "subject_name_6",
            "course_code_7" => "subject_name_7",
            "course_code_8" => "subject_name_8",
            "course_code_9" => "subject_name_9",
            "course_code_10" => "subject_name_10",
            "course_code_11" => "subject_name_11",
            "course_code_12" => "subject_name_12",
            "course_code_13" => "subject_name_13",
            "course_code_14" => "subject_name_14",
            "course_code_15" => "subject_name_15",
        );
        $sql = "SELECT * FROM course_offerings WHERE year='$year' AND semester='$semester' AND faculty='$faculty'";
        $sql2 = "SELECT LECNum FROM lec WHERE Faculty='$faculty'";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $data = mysqli_fetch_assoc($result);
        while ($data2 = mysqli_fetch_assoc($result2)) {
            $lecturers[] = $data2['LECNum'];
        }
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <?php
            foreach ($courseCodeTemp as $key => $value) {
                if ($data[$value] != null) {
            ?>
                    <tr>
                        <td class="narrow"><input type="text" name="code<?php echo $data[$key] ?>" id="code <?php echo $data[$key] ?>" value="<?php echo $data[$key] ?>" readonly></td>
                        <td class="wide"><input type="text" name="subject<?php echo $data[$value] ?>" id="subject <?php echo $data[$value] ?>" value="<?php echo $data[$value] ?>" readonly></td>
                        <td>
                            <select name="lecturer<?php echo $data[$value] ?>" id="selectLecturer<?php echo $data[$value] ?>">
                                <?php
                                foreach ($lecturers as $key => $value) {
                                ?>
                                    <option value="<?php echo $value ?>"><?php echo $value ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>

                    </tr>

            <?php
                    // $coursCode[] = $data[$value];
                }
            }
            ?>

            <tr>
                <td colspan="3" class="right"><input class="btn btn-success" type="submit" name="Assign" value="Assign"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>
<?php
if (isset($_SESSION['faculty'])) {
    $faculty = $_SESSION['faculty'];
    $year = $_SESSION['year'];
    $semester = $_SESSION['semester'];
}
$code = [];
$subject = [];
$lecturer = [];
if (isset($_POST['Assign'])) {
    foreach ($_POST as $key => $value) {
        // echo $key . " => " . $value . "<br>";
        if (substr($key, 0, 4) == "code") {
            $code[] = $value;
        } else if (substr($key, 0, 7) == "subject") {
            $subject[] = $value;
        } else if (substr($key, 0, 8) == "lecturer") {
            $lecturer[] = $value;
        }
    }
    // foreach ($code as $key => $value) {
    //     echo $key . " => " . $value . "<br>";
    // }
    // foreach ($subject as $key => $value) {
    //     echo $key . " => " . $value . "<br>";
    // }
    // foreach ($lecturer as $key => $value) {
    //     echo $key . " => " . $value . "<br>";
    // }
    for ($i = 0; $i < sizeof($subject); $i++) {
        $sql3 = "SELECT * FROM asign_lecturer WHERE subject_name='$subject[$i]'";
        $result3 = mysqli_query($conn, $sql3);
        if (mysqli_num_rows($result3) > 0) {
            mysqli_query($conn, "UPDATE asign_lecturer SET LECNum='$lecturer[$i]' WHERE subject_name='$subject[$i]'");
        } else {
            mysqli_query($conn, "INSERT INTO asign_lecturer VALUES('$year','$semester','$code[$i]','$subject[$i]','$lecturer[$i]','$faculty')");
        }
    }
}
?>