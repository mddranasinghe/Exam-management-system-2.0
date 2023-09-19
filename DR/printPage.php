
<div id="navbar">

</div>
<?php
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

<!DOCTYPE html>
<html>
<head>
    <title>Admission Card</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!DOCTYPE html>

    <style>
        /* Define the A4 paper size */
        @page {
            size: A4;
            margin: 0;
        }

        /* Set the margins for the page */
        body {
            margin: 0;
            padding: 0;
        }

        /* Additional CSS styles for your content */
        /* Adjust these styles as needed to format your admission card */
        .container {
       
        }

        table {
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }

        th, td {
            padding: 8px;
           
            font-size:12px;
            text align:left;
        }

      
        /* Adjustments to fit content on a single page */
        .page {
            width: 210mm;
            height: 297mm;
            margin: 0;
            padding: 0;
            page-break-after: always;
        }

        .box1  img
        {
        
            border-radius:50%;
            width:70px;
            height:70px;
            margin-top:30px;
            margin-left:46%;
        
        }

        
    </style>
</head>
<body>


<div class="container">
                  <div class="box1">
                        <img src="n.png" style="float: center;">
                    </div>
                <p style="text-align:center">UNIVERSITY OF VAVUNIYA<br>
                <B><span style="text-transform:uppercase;"> FACULTY OF <?php echo  $row['faculty'] ?></B></span> <br>
            
                <u>ADMISION CRAD</u></p>
                <br>
                <p> NAME :-<?php echo $row['Name_with_initials'];  ?>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Reg No :- <?php echo $row['Registration_No']; ?></p>
                <br>
                <p> Index No :- 
                <div>
                    Candidates are expected to produce this admission card to the Supervisor/Invigilator/Examiner at the Examination Hall. This form should be filled and
                     signed by the candidates in the presence of the Supervisor/Invigilator
                    /Examiner every time a paper test is taken. The Supervisor/Invigilator/Examiner is expected to authenticate the signature of the candidate by placing
                     his/her initials in the appropriate column. Students are requested to hand over the admission card to the Supervisor on the last day of the paper.
                </div>

                <table border="2px" class="table table-stripped m-2 " style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 5%;">S NO</th>
                        <th style="width: 10%;">Unit Code</th>
                        <th style="width: 60%;">Subject</th>
                        <th style="width: 5%;">Eligibility</th>
                        <th style="width: 10%;">Date</th>
                        <th style="width: 5%;">Candidate's Signature</th>
                        <th style="width: 5%;">Initial of Supervisor</th>
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
                                    echo "<tr>";
                                    echo "<td>   </td>";
                                    echo "<td style=width: 20%>" .$row[$course_code]  ."</td>";
                                    echo "<td style=width: 40%>" . $row[$subject_name] . "</td>";
                                  
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
                                            echo "<td>   </td>";
                                            echo "<td>   </td>";
                                            echo "<td>   </td>";
                                    echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                
                    <p>Instructions:</p>
                    <ol>
                        <li>No candidate shall be admitted to the Examination hall without this card.</li>
                        <li>If any candidate loses this admission card, he/she shall obtain a duplicate Admission Card on payment of Rs.150/-.</li>
                        <li>Every candidate shall produce his/her Identity Card at every paper/Practical Examination he/she sits for.</li>
                        <li>Any unauthorized documents, notes, and bags should not be taken into the Examinations.</li>
                        <li>When unable to be present for any part of the Examination, it should be notified to me immediately in writing. No appeals will be considered later without this timely notification to me.</li>
                    </ol>
                
       
        </section>
    </div>
</section>


<Script >

document.addEventListener('DOMContentLoaded', function () {
const style = `
                @page {
                size: A4;
                margin: 0;
                }
                html, body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
                }
            `;
            const head = document.head || document.getElementsByTagName('head')[0];
            const styleElement = document.createElement('style');
            styleElement.type = 'text/css';
            styleElement.appendChild(document.createTextNode(style));
            head.appendChild(styleElement);
            setTimeout(()=>{window.print()},2000);
            
            head.removeChild(styleElement);

        });

</Script>

</body>
</html>