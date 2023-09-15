<?php
include('./Admin_nav.php');
include "db_connection.php";

$Registration_No = $_GET['Registration_No'];
$sql = "SELECT * FROM examenrty WHERE Registration_No='$Registration_No'";
$sql2 = "SELECT * FROM approve_state WHERE Registration_No='$Registration_No'";

$res = mysqli_query($conn, $sql);
$res2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
}
$sql3 = "INSERT INTO approve_state VALUES ('$row[Registration_No]','$row[Name_of_the_examination]',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
if (mysqli_num_rows($res2) > 0) {
    $row2 = mysqli_fetch_assoc($res2);
} else {
    mysqli_query($conn, $sql3);
    $row2 = mysqli_fetch_assoc($res2);
}
?>
<?php
// Assuming you have a database connection established in db_connection.php
include "db_connection.php";

// Fetch all signature data from the database
$sql = "SELECT signature_data FROM signnew";
$result = mysqli_query($conn, $sql);

// Store all the signature data in an array
$signatureDataArray = array();
while ($rowa = mysqli_fetch_assoc($result)) {
    $signatureDataArray[] = $rowa['signature_data'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>exam entry page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .FormV{
            width: 700px; 
            height: 35px;
        }

        .Submit{
            margin-left:790px;
        }
        
        #table1{
            border: 1px; 
            width: 80%;
        }

        .FullForm{
            float: center; 
            width: 1200px; 
            height: 100%; 
            background-color: #white; 
            margin-left: 30px; 
            margin-top: 0px;

        }

        .Uov-logo{
            float: center;
        }

        .H3{
            text-align: center; 
            text-transform: uppercase; 
            margin: 2px; 
            margin-left: 50px;
        }

        .CourseDetail{
            width: 200px; 
            height: 35px;
        }

        @media (max-width: 768px){
        .FormView{
            width: 98%;
            height: auto;
            margin: auto;
        }

        .FullForm{
            width: 98%;
            height: auto;
            margin: auto;
        }

        .H3{
            width: 98%;
            height: auto;
            margin: auto;
        }

        .SubApprove{
            width: 20%;
        }

        .Uov-logo{
            float: center;
        }

        
        .FormV{
            width: 90vw;
        }

        .CourseDetail{
            width: 25vw;
            height: auto;
            margin: auto;
        }

        .TableFlex{
            display: flex;
            flex-direction: column;
        }

        .Submit{
            margin: auto;

        }

        #SUB{
            width: 30vw;
        }

        #SUBAp{
            width: 10vw;
        }
        #table1{
            width: 100vw;
        }

    } 

    @media (max-width: 480px){

        body,html {
            overflow-x: hidden !important;
        }
        .FormView{
            width: 98%;
            height: auto;
            margin: auto;
        }
        
        .FullForm{
            width: 98%;
            height: auto;
            margin: auto;
        }

        .H3{
            width: 98%;
            height: auto;
            margin: auto;
        }

        .Uov-logo{
            float: center;
        }

        .FormV{
            width: 91vw;
        }

        .CourseDetail{
            width: 25vw;
            height: auto;
            margin: auto;
        }

        .TableFlex{
            display: flex;
            flex-direction: column;
        }
        
    } 
    </style>
</head>

<body>
    <section class="FormView">
        <div class="container">
            <section class="sec">
                <div class="FullForm">
                    
                    <div class="box1">

                        <img src="n.png" class="Uov-logo">
                    </div>

                    <h3 class="H3" >
                        University of Vavuniya, Sri Lanka</h3>
                    <h4 style="text-align: center; margin: 2px;"><u>Examination Entry Form For Proper Candidates</u>
                    </h4>
                    <h4 style="text-align: center; margin: 2px;">(to be completed and returned to the deputy registrar,
                        examination and student admission)</h4>


                    <div id="printContent">
                        <div class="mb-3">
                            <div class="form-group row">
                                <form name="Registration">
                                    <div class="login">
                                        <div style="float: right;">
                                        </div><br><br><br>

                                        <div>
                                            <label for="Registration_No" class="col-sm-2 col-form-label">Registration
                                                No</label>
                                            <input type="text" class="form-control FormV" name="Registration_No"
                                                id="Registration_No" placeholder="Registration No"
                                                
                                                value="<?php echo $row['Registration_No']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>

                                            <input type="text" name="gender" id="gender" placeholder="Gender"
                                                 class="form-control FormV"
                                                value="<?php echo $row['gender']; ?>">
                                        </div><br>
                                        <div>
                                            <label for="Name_with_initials" class="col-sm-2 col-form-label">Name with
                                                initials</label>
                                            <input type="text" name="Name_with_initials" id="Name_with_initials"
                                                placeholder="Name with initials"
                                                class="form-control FormV" value="<?php echo $row['Name_with_initials']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Name_denoted_by_initial" class="col-sm-2 col-form-label">Name
                                                denoted by initial</label>
                                            <input type="text" name="Name_denoted_by_initial"
                                                id="Name_denoted_by_initial" placeholder="Name denoted by initial"
                                                 class="form-control FormV"
                                                value="<?php echo $row['Name_denoted_by_initial']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Address(Present)" class="col-sm-2 col-form-label">Address
                                                (Present)</label>
                                            <input type="text" name="Address" id="Address"
                                                placeholder="Address (Present)" 
                                                class="form-control FormV" value="<?php echo $row['Address']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Mobile_Phone_no" class="col-sm-2 col-form-label">Mobile Phone
                                                no</label>
                                            <input type="text" name="Mobile_Phone_no" id="Mobile_Phone_no"
                                                placeholder="Mobile Phone no" 
                                                class="form-control FormV" value="<?php echo $row['Mobile_Phone_no']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Date_of_admission" class="col-sm-2 col-form-label">Date of
                                                admission</label>
                                            <input type="text" name="Date_of_admission" placeholder="Date of admission"
                                                 class="form-control FormV"
                                                value="<?php echo $row['Date_of_admission']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Name_of_the_examination" class="col-sm-2 col-form-label">Name of
                                                the examination</label>
                                            <input type="text" name="Name_of_the_examination"
                                                 class="form-control FormV"
                                                value="<?php echo $row['Name_of_the_examination']; ?>">
                                        </div><br>

                                        <table class="margin-right:10px;">
                                            <tr class="TableFlex">
                                                <td>
                                                    <div>
                                                        <label for="year_of_the_examination"
                                                            class="col-sm-4 col-form-label">Year </label>
                                                        <input type="text" name="year"
                                                            class="CourseDetail form-control"
                                                            value="<?php echo $row['year']; ?>">
                                                    </div><br>
                                                </td>
                                                <td>
                                                    <div>
                                                        <label for="Semester"
                                                            class="col-sm-4 col-form-label">Semester</label>
                                                        <input type="text" name="semester"
                                                             class="CourseDetail form-control"
                                                            value="<?php echo $row['semester']; ?>">
                                                    </div><br>
                                                </td>
                                                <td>
                                                    <div>
                                                        <label for="Faculty of" class="col-sm-4 col-form-label">Faculty
                                                            of</label>
                                                        <input type="text" name="faculty"
                                                             class="form-control CourseDetail"
                                                            value="<?php echo $row['faculty']; ?>">
                                                    </div><br>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>

                                <!-- Your HTML and other PHP code here... -->

                                <table class="table table-stripped m-2 table table-hover" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th id="SUB" class="SubApprove">COURSE CODE</th>
                                            <th id="SUB" class="SubApprove">SUBJECT TITLE</th>
                                            <th id="SUB" class="SubApprove">APPROVE OF LECTURER</th>
                                            <th id="SUBAp" class="SubApprove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                echo '<td style="width: 20%;"><input class="form-control" type="text" name="' . $course_code . '" value="' . $row[$course_code] . '"></td>';
                                                echo '<td style="width: 40%;"><input class="form-control" type="text" name="' . $subject_name . '" value="' . $row[$subject_name] . '"></td>';
                                                if (substr($subject_name, -2, 1) == "_") {
                                                    $column = "subject_approval_" . substr($subject_name, -1);
                                                } else {
                                                    $column = "subject_approval_" . substr($subject_name, -2);
                                                }
                                                if ($row2[$column] == 0) {
                                                    echo '<td style="width: 20%;"><a href="approval.php?ExamName=' . $row['Name_of_the_examination'] . '&approve=1&Registration_No=' . $row['Registration_No'] . '&course_code=' . $course_code . '"> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">APProve</button></a></td>';
                                                } else {
                                                    echo '<td style="width: 20%;"><a href="approval.php?ExamName=' . $row['Name_of_the_examination'] . '&approve=0&Registration_No=' . $row['Registration_No'] . '&course_code=' . $course_code . '"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Reject</button></a></td>';
                                                }

                                                        echo '<td>';
                                                        if ($row2[$column] == 0) {
                                                          
                                                          echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                                </svg>';
                                                        } else {
                                                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                                 <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                                </svg>';

                                                        }
                                                        echo '</td>';
                                                echo '</tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <p class="Submit">
                                    <a href="admin_examEnteyPage.php" class="btn btn-danger m-2">GO BACK</a>
                                    <button id="printButton" class="btn btn-success m-2">Submit</button>
                                </p>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
</body>

</html>