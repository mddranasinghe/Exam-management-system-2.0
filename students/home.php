<?php
include '../db_connection.php';
include './nav.php';
include './studentFunctions.php';
if (!isset($_SESSION['regNum'])) {
    header("Location: ../");
}
$year = filterYear($_SESSION['regNum']);
$faculty = filterFaculty($_SESSION['regNum']);
$level = 3;
$currentSem = 1;

function fetch_data($faculty, $semester, $year1, $indexyear)
{
    date_default_timezone_set("Asia/Colombo");
    $date = date("Y-m-d");
    global $conn;
    $sql2 = "SELECT year,semester from studentcurrentlevel WHERE Registration_No='$_SESSION[regNum]'";
    $results2 = mysqli_query($conn, $sql2);
    if ($results2->num_rows > 0) {
        $data2 = $results2->fetch_assoc();
        $year1 = $data2['Year'];
        $semester = $data2['Semester'];
    }

    $html = '';
    // Construct the SQL query
    $sqlExam = "SELECT * FROM notificationmanagement WHERE faculty = '$faculty' AND semester = '$semester' AND year = '$year1' AND indexyear = '$indexyear' AND TYPE='applicationSubmission' AND dateTo>'$date'";
    $sqlResultRelease = "SELECT * FROM notificationmanagement WHERE faculty = '$faculty' AND semester = '$semester' AND year = '$year1' AND indexyear = '$indexyear' AND TYPE='resultRelease' AND dateTo>'$date'";
    $sqlAnnouncement = "SELECT * FROM notificationmanagement WHERE TYPE='announcement'";
    $sqlFacultyMessage = "SELECT * FROM notificationmanagement WHERE faculty = '$faculty' AND TYPE='faculty'";
    // Execute the SQL query and get the results
    $resultsExam = mysqli_query($conn, $sqlExam);
    $resultsAnnouncement = mysqli_query($conn, $sqlAnnouncement);
    $resultsResultRelease = mysqli_query($conn, $sqlResultRelease);
    $resultsFacultyMessage = mysqli_query($conn, $sqlFacultyMessage);

    // Check if the query returns any results
    if ($resultsExam->num_rows > 0) {
        // Create a HTML div element to display the results
        $html .= '<div class="fs-2 fw-bolder">Application Submission</div>';
        // Iterate over the results and display them in the HTML div element
        while ($row = $resultsExam->fetch_assoc()) {
            // Switch on the 'type' column to generate different elements
            $html .= '<div class="row m-2 justify-content-center bg-light border border-dark rounded-2">';
            $yearName = yearExtend($row['YEAR']);
            $semesterName = semesterExtend($row['semester']);
            $facultyName = facultyExtend($row['faculty']);
            $html .= '<h2 class="text-left text-dark bg-primary rounded-top-1 text-decoration-underline">' . $row['title'] . '</h1>';
            $html .= '<div class= " rounded-bottom-1 p-2 px-3"> ';
            $html .= '<p class="fw-bold fs-6">' . "Submit your " . $row['category'] . " Applications for the examination of $yearName $semesterName  before the due date. This notice is for $facultyName students" . '</p>';
            $html .= "<div class='row'>";
            if ($row['category'] != null) {
                $html .= '<p class="text-center py-1 px-2 rounded-pill text-light fw-bold border bg-dark w-auto col-4 ml-4">' . $row['category'] . '</p>';
            }
            if ($row['category'] == "Exam") {
                $html .= '<a href="./entryFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            } else if ($row['category'] == "Medical") {
                $html .= '<a href="./mFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            } else if ($row['category'] == "Resit") {
                $html .= '<a href="./reSiteFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            }
            $html .= '</div>';
            if ($row['dateTo'] != null) {
                $html .= '<div class="row"><p class="text-center p-1 rounded-pill text-danger fw-bold border border-dark bg-light w-auto ml-auto mr-4 col-8">' . 'Due date : ' . $row['dateTo'] . '</p>';
            }

            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }


        // Close the HTML div element


        // Return the HTML div element
        // return $html;
    }
    if ($resultsResultRelease->num_rows > 0) {
        // Create a HTML div element to display the results
        $html .= '<div class="fs-2 fw-bolder">Results</div>';
        // Iterate over the results and display them in the HTML div element
        while ($row = $resultsResultRelease->fetch_assoc()) {
            // Switch on the 'type' column to generate different elements
            $html .= '<div class="row m-2 justify-content-center bg-light border border-dark rounded-2">';
            $yearName = yearExtend($row['YEAR']);
            $semesterName = semesterExtend($row['semester']);
            $facultyName = facultyExtend($row['faculty']);
            $html .= '<h2 class="text-left text-dark bg-primary rounded-top-1 text-decoration-underline">' . $row['title'] . '</h1>';
            $html .= '<div class= " rounded-bottom-1 p-2 px-3"> ';
            $html .= '<p class="fw-bold fs-5 text-decoration-underline text-success">' . $facultyName . '</p>';
            $html .= '<p class="fs-6">' . "Exam results has been released for  $yearName $semesterName  <br> Academic year : " . $row['indexYear'] . "/" . intval($row['indexYear']) + 1 . '</p>';
            $html .= "<div class='row'>";
            if ($row['category'] != null) {
                $html .= '<p class="text-center py-1 px-2 rounded-pill text-light fw-bold border bg-dark w-auto col-4 ml-4">' . $row['category'] . '</p>';
            }
            if ($row['category'] == "Exam") {
                $html .= '<a href="./entryFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            } else if ($row['category'] == "Medical") {
                $html .= '<a href="./mFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            } else if ($row['category'] == "Resit") {
                $html .= '<a href="./reSiteFormget.php" class="col-6 ml-auto mr-4"><p class="text-center p-1 rounded-pill text-success fw-bold border border-dark bg-light ">Fill Applicaion</p></a>';
            }
            $html .= '</div>';
            if ($row['dateTo'] != null) {
                $html .= '<div class="row"><p class="text-center p-1 rounded-pill text-danger fw-bold border border-dark bg-light w-auto ml-auto mr-4 col-8">' . 'Due date : ' . $row['dateTo'] . '</p>';
            }

            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }


        // Close the HTML div element


        // Return the HTML div element
        // return $html;
    }
    if ($resultsAnnouncement->num_rows > 0) {
        // Create a HTML div element to display the results
        $html .= '<div class="fs-2 fw-bolder">Announcements - all</div>';
        // Iterate over the results and display them in the HTML div element
        while ($row = $resultsAnnouncement->fetch_assoc()) {
            // Switch on the 'type' column to generate different elements
            $html .= '<div class="row m-2 justify-content-center bg-light border border-dark rounded-2">';
            $html .= '<h2 class="text-left text-dark bg-primary rounded-top-1 text-decoration-underline">' . $row['title'] . '</h1>';
            $html .= '<div class= " rounded-bottom-1 p-2 px-3"> ';
            $html .= '<p class="fs-6 fst-italic">" ' . $row['message'] . ' "</p>';
            $html .= '</div>';
            $html .= '</div>';
        }


        // Close the HTML div element


        // Return the HTML div element

    }
    if ($resultsFacultyMessage->num_rows > 0) {
        // Create a HTML div element to display the results
        $html .= '<div class="fs-2 fw-bolder">Announcements</div>';
        // Iterate over the results and display them in the HTML div element
        while ($row = $resultsFacultyMessage->fetch_assoc()) {
            // Switch on the 'type' column to generate different elements
            $html .= '<div class="row m-2 justify-content-center bg-light border border-dark rounded-2">';
            $html .= '<h2 class="text-left text-dark bg-primary rounded-top-1 text-decoration-underline">' . $row['title'] . '</h1>';
            $html .= '<div class= " rounded-bottom-1 p-2 px-3"> ';
            $html .= '<p class="fs-6 fst-italic">" ' . $row['message'] . ' "</p>';
        }
        $html .= '</div>';

        $html .= '</div>';

        // Close the HTML div element


        // Return the HTML div element

    }
    return $html;
    // Close the connection to the MySQL database
    mysqli_close($conn);
}

// echo $year, $faculty, $level, $currentSem;
?>
<section class="container-fluid">
    <div class="row mx-4">
        <div class="col-md-5 col-sm-12 bg-secondary rounded ">
            <?php echo fetch_data($faculty,  $currentSem, $level, $year); ?>

            <div class="col-auto"></div>
        </div>
    </div>
</section>