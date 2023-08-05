<?php
include('./Admin_nav.php');
include "db_connection.php";

$Registration_No = $_GET['Registration_No'];
$sql = "SELECT * FROM examenrty WHERE Registration_No='$Registration_No'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
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
</head>
<body>
<section>
    <div class="wrapper">
        <section class="sec">
            <div style="float: center; width: 1200px; height: 100%; background-color: #white; margin-left: 30px; margin-top: 0px;">
                <div class="box1">
                    
                        <img src="n.png" style="float: center;">
                    </div>

                    <h3 style="text-align: center; text-transform: uppercase; margin: 2px; margin-left: 50px;">University of Vavuniya, Sri Lanka</h3>
                    <h4 style="text-align: center; margin: 2px;"><u>Examination Entry Form For Proper Candidates</u></h4>
                    <h4 style="text-align: center; margin: 2px;">(to be completed and returned to the deputy registrar, examination and student admission)</h4>
                    
                    
                    <div id="printContent">
                    <div class="mb-3">
                        <div class="form-group row">
                            <form name="Registration">
                                <div class="login">
                                    <div style="float: right;">
                                    </div><br><br><br>

                                    <div>
                                        <label for="Registration_No" class="col-sm-2 col-form-label">Registration No</label>
                                        <input type="text" class="form-control" name="Registration_No" id="Registration_No" placeholder="Registration No" style="width: 700px; height: 35px;" value="<?php echo $row['Registration_No']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                      
                                  <input type="text" name="gender" id="gender" placeholder="Gender" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['gender']; ?>">    </div><br>
                                  <div>
                                  <label for="Name_with_initials" class="col-sm-2 col-form-label">Name with initials</label>
                                        <input type="text" name="Name_with_initials" id="Name_with_initials" placeholder="Name with initials" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Name_with_initials']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="Name_denoted_by_initial" class="col-sm-2 col-form-label">Name denoted by initial</label>
                                        <input type="text" name="Name_denoted_by_initial" id="Name_denoted_by_initial" placeholder="Name denoted by initial" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Name_denoted_by_initial']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="Address(Present)" class="col-sm-2 col-form-label">Address (Present)</label>
                                        <input type="text" name="Address" id="Address" placeholder="Address (Present)" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Address']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="Mobile_Phone_no" class="col-sm-2 col-form-label">Mobile Phone no</label>
                                        <input type="text" name="Mobile_Phone_no" id="Mobile_Phone_no" placeholder="Mobile Phone no" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Mobile_Phone_no']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="Date_of_admission" class="col-sm-2 col-form-label">Date of admission</label>
                                        <input type="text" name="Date_of_admission" placeholder="Date of admission" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Date_of_admission']; ?>">
                                    </div><br>

                                    <div>
                                        <label for="Name_of_the_examination" class="col-sm-2 col-form-label">Name of the examination</label>
                                        <input type="text" name="Name_of_the_examination" style="width: 700px; height: 35px;" class="form-control" value="<?php echo $row['Name_of_the_examination']; ?>">
                                    </div><br>

                                    <table class="margin-right:10px;">
                                        <tr>
                                            <td>
                                                <div>
                                                    <label for="year_of_the_examination" class="col-sm-4 col-form-label">Year </label>
                                                    <input type="text" name="year" style="width: 200px; height: 35px;" class="form-control" value="<?php echo $row['year']; ?>">
                                                </div><br>
                                            </td>
                                            <td>
                                                <div>
                                                    <label for="Semester" class="col-sm-4 col-form-label">Semester</label>
                                                    <input type="text" name="semester" style="width: 200px; height: 35px;" class="form-control" value="<?php echo $row['semester']; ?>">
                                                </div><br>
                                            </td>
                                            <td>
                                                <label for="Faculty of" class="col-sm-4 col-form-label">Faculty of</label>
                                                <input type="text" name="faculty" style="width: 200px; height: 35px;" class="form-control" value="<?php echo $row['faculty']; ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                      
                                <!-- Your HTML and other PHP code here... -->

    <table border="1px" class="table table-stripped m-2 table table-hover" style="width: 80%;">
    <thead class="thead-dark">
        <tr>
            <th style="width: 20%;">COURSE CODE</th>
            <th style="width: 40%;">SUBJECT TITLE</th>
            <th style="width: 20%;">SIGNATURE OF LECTURER</th>
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
                echo '<td style="width: 20%;"> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">SIGNATURE</button></td>';
                if (!empty($signatureDataArray)) {
                    foreach ($signatureDataArray as $signatureData) {
                        // Display each signature image
                        echo '<td style="width: 40%;"> <img src="' . $signatureData . '" alt="Uploaded Signature" style="border: 2px solid #ccc; width: 160px; height:40px; background-color:white"></td>';
                    }
                }
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

                                <p style="margin-left:790px">
                                    <a href="admin_examEnteyPage.php" class="btn btn-danger m-2">GO BACK</a>
                                    <button id="printButton" class="btn btn-success m-2">Submit</button>
                                </p>
                            </body>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
    </div>
</section>


<!-- signature -------------------------------------------------------------------------------------------------------->
<div class="modal" id="myModal" style="margin-top:1050px">
<div class="container p-3 my-2 bg-white text-dark" style="width:29.5%">
    <h2>DRAW SIGNATURE</h2>

    <canvas id="signatureCanvas" width="400" height="200"></canvas>
    <br>
    <button onclick="clearSignature()"  class="btn btn-danger m-2">Clear Signature</button>
    <button onclick="saveSignature()" class="btn btn-success m-2">Save Signature</button>

    <form action="save_signature.php" method="post" id="signatureForm">
        <input type="hidden" name="signatureData" id="signatureDataInput">
        <input type="submit" value="Submit Signature" style="display:none;" >
    </form>
    </div>    </div>
    <script>
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        let isDrawing = false;
        let lastX = 0;
        let lastY = 0;

        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            [lastX, lastY] = [e.offsetX, e.offsetY];
        });

        canvas.addEventListener('mousemove', (e) => {
            if (isDrawing) {
                ctx.beginPath();
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
                [lastX, lastY] = [e.offsetX, e.offsetY];
            }
        });

        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        function saveSignature() {
            const signatureData = canvas.toDataURL('image/png');
            document.getElementById('signatureDataInput').value = signatureData;

            // Submit the form to the server
            document.getElementById('signatureForm').submit();
        }
    </script>
</body>
</html>
