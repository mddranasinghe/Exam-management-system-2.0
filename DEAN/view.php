<?php
    include('./Admin_nav.php');
    include "db_connection.php";

        $Registration_No = $_GET['Registration_No'];
        $Name_of_the_examination=$_SESSION['Name_of_the_examination'];
        $sql = "SELECT * FROM examenrty WHERE Registration_No='$Registration_No'AND Name_of_the_examination='$Name_of_the_examination'";
        $sql2 = "SELECT * FROM approve_state WHERE Registration_No='$Registration_No'AND Name_of_the_examination='$Name_of_the_examination'";

        $res = mysqli_query($conn, $sql);
        $res2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($res) > 0)
    {
        $row = mysqli_fetch_assoc($res);
    }
    $sql3 = "INSERT INTO approve_state VALUES ('$row[Registration_No]','$row[Name_of_the_examination]',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    
    if (mysqli_num_rows($res2) > 0)
    {
        $row2 = mysqli_fetch_assoc($res2);
    } else {
        mysqli_query($conn, $sql3);
        $row2 = mysqli_fetch_assoc($res2);
    }

    $recommendationSuccess = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form has been submitted
        $dean_recommend = $_POST['dean_recommend'];

        // Update the "approve_state" table with the hod_recommend value
        $sqlUpdate = "UPDATE approve_state SET dean_recommend = '$dean_recommend' WHERE Registration_No = '$Registration_No'";
        if (mysqli_query($conn, $sqlUpdate)) {
            $recommendationSuccess = true;
        } else {
            $recommendationSuccess = false;
        }

        if ($recommendationSuccess) {
            echo '<div class="alert alert-success" role="alert">Recommendation Successful!</div>';
            ("Location: ./view.php");
        } elseif ($recommendationSuccess === false) {
            echo '<div class="alert alert-danger" role="alert">Recommendation Failed!</div>';
            ("Location: ./view.php");
        }

        // Redirect to the same page after updating the table
        
      // exit();
       
    }
?>
<?php

    include "db_connection.php";


    $sql = "SELECT signature_data FROM signnew";
    $result = mysqli_query($conn, $sql);

    // Store all the signature data in an array
    $signatureDataArray = array();
    while ($rowa = mysqli_fetch_assoc($result)) 
    {
        $signatureDataArray[] = $rowa['signature_data'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>exam entry page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
            <section class="home-page-full">
                <div style="width:1200px;height:100%;margin:auto;">
                    <div class="box1">

                        <img src="n.png" style="float: center;">
                    </div>

                    <h3 style="text-align: center; text-transform: uppercase; margin: 2px; margin-left: 50px;">
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
                                            <input type="text" class="form-control" name="Registration_No"
                                                id="Registration_No" placeholder="Registration No"
                                                style="width: 700px; height: 35px;"
                                                value="<?php echo $row['Registration_No']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>

                                            <input type="text" name="gender" id="gender" placeholder="Gender"
                                                style="width: 700px; height: 35px;" class="form-control"
                                                value="<?php echo $row['gender']; ?>">
                                        </div><br>
                                        <div>
                                            <label for="Name_with_initials" class="col-sm-2 col-form-label">Name with
                                                initials</label>
                                            <input type="text" name="Name_with_initials" id="Name_with_initials"
                                                placeholder="Name with initials" style="width: 700px; height: 35px;"
                                                class="form-control" value="<?php echo $row['Name_with_initials']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Name_denoted_by_initial" class="col-sm-2 col-form-label">Name
                                                denoted by initial</label>
                                            <input type="text" name="Name_denoted_by_initial"
                                                id="Name_denoted_by_initial" placeholder="Name denoted by initial"
                                                style="width: 700px; height: 35px;" class="form-control"
                                                value="<?php echo $row['Name_denoted_by_initial']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Address(Present)" class="col-sm-2 col-form-label">Address
                                                (Present)</label>
                                            <input type="text" name="Address" id="Address"
                                                placeholder="Address (Present)" style="width: 700px; height: 35px;"
                                                class="form-control" value="<?php echo $row['Address']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Mobile_Phone_no" class="col-sm-2 col-form-label">Mobile Phone
                                                no</label>
                                            <input type="text" name="Mobile_Phone_no" id="Mobile_Phone_no"
                                                placeholder="Mobile Phone no" style="width: 700px; height: 35px;"
                                                class="form-control" value="<?php echo $row['Mobile_Phone_no']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Date_of_admission" class="col-sm-2 col-form-label">Date of
                                                admission</label>
                                            <input type="text" name="Date_of_admission" placeholder="Date of admission"
                                                style="width: 700px; height: 35px;" class="form-control"
                                                value="<?php echo $row['Date_of_admission']; ?>">
                                        </div><br>

                                        <div>
                                            <label for="Name_of_the_examination" class="col-sm-2 col-form-label">Name of
                                                the examination</label>
                                            <input type="text" name="Name_of_the_examination"
                                                style="width: 700px; height: 35px;" class="form-control"
                                                value="<?php echo $row['Name_of_the_examination']; ?>">
                                        </div><br>

                                        <table class="margin-right:10px;">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <label for="year_of_the_examination"
                                                            class="col-sm-4 col-form-label">Year </label>
                                                        <input type="text" name="year"
                                                            style="width: 200px; height: 35px;" class="form-control"
                                                            value="<?php echo $row['year']; ?>">
                                                    </div><br>
                                                </td>
                                                <td>
                                                    <div>
                                                        <label for="Semester"
                                                            class="col-sm-4 col-form-label">Semester</label>
                                                        <input type="text" name="semester"
                                                            style="width: 200px; height: 35px;" class="form-control"
                                                            value="<?php echo $row['semester']; ?>">
                                                    </div><br>
                                                </td>
                                                <td>
                                                    <div>
                                                        <label for="Faculty of" class="col-sm-4 col-form-label">Faculty
                                                            of</label>
                                                        <input type="text" name="faculty"
                                                            style="width: 200px; height: 35px;" class="form-control"
                                                            value="<?php echo $row['faculty']; ?>">
                                                    </div><br>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>

                                <!-- Your HTML and other PHP code here... -->

                                <table border="1px" class="table table-stripped m-2 table table-hover" id="table1"
                                    style="width: 80%;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width: 20%;">COURSE CODE</th>
                                            <th style="width: 40%;">SUBJECT TITLE</th>
                                            <th style="width: 20%;">APPROVE OF DEAN</th>
                                            <th style="width: 20%;"></th>
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
                                          

                                                        echo '<td style="text-align:center">';
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
                               <!-- Wrap form around your fields and buttons -->
                               <form name="Registration1" method="POST" action="">
                                        <!-- Your existing form fields and buttons go here -->
                                        <!-- ... -->

                                        <div style="margin-left:50%">
                                            <button type="button" class="btn btn-success" id="recommendButton">Approved</button>
                                            <button type="button" class="btn btn-danger" id="notRecommendButton">Not Approved</button>
                                        </div>

                                        <div>
                                            <input type="hidden" name="dean_recommend" id="dean_recommend" value="0">
                                        </div>

                                        <div>
                                            <p style="margin-left:750px">
                                               
                                                
                                            </p>
                                         </div>
                                    </form>

                                    <!-- JavaScript for button clicks (outside the form) -->
                                    <script>
                                        document.getElementById("recommendButton").addEventListener("click", function() {
                                            // Set the value to 1 when the "Recommend" button is clicked
                                            document.getElementById("dean_recommend").value = 1;
                                            // Submit the form
                                            document.forms["Registration1"].submit();
                                        });

                                        document.getElementById("notRecommendButton").addEventListener("click", function() {
                                            // Set the value to 0 when the "Not Recommend" button is clicked
                                            document.getElementById("dean_recommend").value = 0;
                                            // Submit the form
                                            document.forms["Registration1"].submit();
                                        });
                                    </script>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
</body>

</html>