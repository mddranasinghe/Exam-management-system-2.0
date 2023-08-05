<!-- filter_students.php -->
<?php
// Include the database connection file (replace "../db_conn.php" with your actual file path)
include "db_connection.php";

// Check if the database connection is successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get the faculty value from the AJAX request
$faculty = $_GET['faculty'];

// Function to filter students by faculty
function filterStudentsByFaculty($faculty, $conn) {
    $query = "SELECT * FROM students";
    if ($faculty !== '') {
        $query .= " WHERE Faculty = '$faculty'";
    }
    $result = mysqli_query($conn, $query);

    // Fetch student details and generate the HTML markup for rows
    $output = '';
    while ($row = mysqli_fetch_assoc($result)) {
     
        $studentName = $row['Name_with_initials'];
        $regNo = $row['Registration_No'];
        $yearOfStudy = $row['Date_of_admission'];
        $faculty = $row['faculty'];

        $output .= '
        <tr class="faculty-row">
            <td>' . $studentName . '</td>
            <td>' . $regNo . '</td>
            <td>' . $yearOfStudy . '</td>
            <td>' . $faculty . '</td>
            <td>
                <a href="editStudent.php?Registration_No=' . $regNo . '" class="btn btn-info btn-sm">Edit</a>
                <a href="viewStudent.php?Registration_No=' . $regNo . '" class="btn btn-success btn-sm">View</a>
                <a href="deleteStudent.php?Registration_No=' . $regNo . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this student?\')">Delete</a>
            </td>
        </tr>';
    }

    echo $output;
}

// Call the function to get the filtered student rows and return the HTML response
filterStudentsByFaculty($faculty, $conn);
?>
