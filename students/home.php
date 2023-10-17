<?php
include '../db_connection.php';
include './nav.php';
include './studentFunctions.php';
if (!isset($_SESSION['regNum'])) {
    header("Location: ../");
}
$year = filterYear($_SESSION['regNum']);
$faculty = filterFaculty($_SESSION['regNum']);
$level = 1;
$currentSem = 1;
function fetch_data($faculty, $semester, $year, $indexyear)
{

    // Construct the SQL query
    $sql = "SELECT * FROM notificationmanagement WHERE faculty = '$faculty' AND semester = '$semester' AND year = '$year' AND indexyear = '$indexyear'";
    $sql2 = "SELECT year,semester from studentcurrentlevel WHERE Registration_No='$_SESSION[regNum]'";
    global $conn;
    // Execute the SQL query and get the results
    $results = mysqli_query($conn, $sql);
    $results2 = mysqli_query($conn, $sql2);
    if ($results2->num_rows > 0) {
        $data2 = $results2->fetch_assoc();
        $level = $data2['Year'];
        $currentSem = $data2['Semester'];
    }
    // Check if the query returns any results
    if ($results->num_rows > 0) {
        // Create a HTML div element to display the results
        $html = '<div class="col-md-5 col-sm-12 bg-secondary rounded "><div class="fs-2 fw-bolder">Announcements</div>';
        // Iterate over the results and display them in the HTML div element
        while ($row = $results->fetch_assoc()) {
            // Switch on the 'type' column to generate different elements
            $html .= '<div class="row m-2 justify-content-center bg-light border border-dark rounded-2">';
            $yearName = yearExtend($row['YEAR']);
            $semesterName = semesterExtend($row['semester']);
            $facultyName = facultyExtend($row['faculty']);
            $html .= '<h2 class="text-left text-dark bg-primary rounded-top-1 text-decoration-underline">' . $row['title'] . '</h1>';
            $html .= '<div class= " rounded-bottom-1 p-2 px-3"> ';
            if ($row['TYPE'] == 'applicationSubmission') {
                $html .= '<p class="fw-bold fs-6">' . "Submit your " . $row['category'] . " Applications for the examination of $yearName $semesterName  before the due date. This notice is for $facultyName students" . '</p>';
            } else if ($row['TYPE'] == 'announcement') {
                $html .= '<p class="fs-6 fst-italic">" ' . $row['message'] . ' "</p>';
            } else if ($row['TYPE'] == 'resultRelesase') {
                $html .= '<p class="fw-bold fs-5 text-decoration-underline text-success">' . $facultyName . '</p>';
                $html .= '<p class="fs-6">' . "Exam results has been released for  $yearName $semesterName  <br> Academic year : " . $row['indexYear'] . "/" . intval($row['indexYear']) + 1 . '</p>';
            } else {
                $html .= '<p>' . $row['message'] . '</p>';
            }
            if ($row['category'] != null) {
                $html .= '<p class="text-end py-1 px-2 rounded-pill text-light fw-bold border bg-dark w-auto float-start">' . $row['category'] . '</p>';
            }

            if ($row['dateTo'] != null) {
                $html .= '<p class="text-end p-1 rounded-pill text-danger fw-bold border border-dark bg-light w-auto float-end">' . 'Due date : ' . $row['dateTo'] . '</p>';
            }
            $html .= '</div>';
            $html .= '</div>';
            // switch ($row['TYPE']) {
            //     case 'text':
            //         $html .= '<p>' . $row['data'] . '</p>';
            //         break;
            //     case 'image':
            //         $html .= '<img src="' . $row['data'] . '" />';
            //         break;
            //     case 'link':
            //         $html .= '<a href="' . $row['data'] . '">' . $row['data'] . '</a>';
            //         break;
            //     default:
            //         $html .= '<p>' . $row['data'] . '</p>';
            //         break;
            // }
        }
        $html .= '</div>';

        // Close the HTML div element


        // Return the HTML div element
        return $html;
    } else {
        // The query did not return any results
        return null;
    }

    // Close the connection to the MySQL database
    mysqli_close($conn);
}

// echo $year, $faculty, $level, $currentSem;
?>
<section class="container-fluid">
    <div class="row mx-4">

        <?php echo fetch_data($faculty, $level, $currentSem, $year); ?>

        <div class="col-auto"></div>
    </div>

</section>