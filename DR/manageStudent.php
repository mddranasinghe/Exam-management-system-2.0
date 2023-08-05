<?php

include "./Admin_nav.php";


error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connection.php";


// Check if the database connection is successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Student</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <style>
     

        .student-list {
            margin-top: 20px;
        }

        .student-list th,
        .student-list td {
            text-align: center;
        }

        .navbar {
            background-color: #381030;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .navbar h2 {
            margin: 0;
            flex-grow: 1;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
        }

        .navbar a:hover {
            color: #d0955e;
        }

        .custom-dropdown {
            max-width: 200px; /* Adjust the width as per your preference */
            width: 100%; /* Set to 100% to make sure it takes up the entire width of its container */
        }

        .pagination {
            justify-content: center;
        }

        .page-item {
            display: inline-block;
            margin: 5px;
        }

        .page-link {
            border-radius: 50%;
        }
    </style>

    <!-- Add this jQuery script just before the closing </body> tag -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // JavaScript function for filtering students by faculty using AJAX
    function filterByFaculty(faculty) {
        // Send an AJAX request to the server to get filtered results
        $.ajax({
            url: 'filter_students.php',
            type: 'GET',
            data: { faculty: faculty },
            success: function(response) {
                // Replace the current student list with the filtered results
                $('.student-list tbody').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Function to load the initial student list
    function loadStudentList() {
        filterByFaculty(''); // Empty faculty value fetches all students
    }
    
    // Call the loadStudentList function when the page is ready
    $(document).ready(function() {
        loadStudentList();
    });
</script>

</head>
<body>


    <div class="container">
        <br><br>
        <div class="form-group mt-3">
            <label for="facultyDropdown">Filter by Faculty:</label>
            <select class="form-select custom-dropdown" id="facultyDropdown" onchange="filterByFaculty(this.value)">
                <option value="">All Faculty</option>
                <option value="Technological Studies">Technology</option>
                <option value="Applied Science">Applied</option>
                <option value="Business Studies">Business Studies</option>
            </select>
        </div>

        <table class="table table-bordered student-list">
            <thead>
                <tr>
                <th>Registration Number</th>
                    <th>Student Name</th>
                    <th>Year of Study</th>
                    <th>Faculty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP code to fetch student details from the database and display them in rows -->
                <?php
                // Function to filter students by faculty
                function filterStudentsByFaculty($faculty, $conn) {
                    $query = "SELECT * FROM students";
                    if ($faculty !== '') {
                        $query .= " WHERE Faculty = '$faculty'";
                    }
                    $result = mysqli_query($conn, $query);
                    return $result;
                }

                // Pagination settings
                $itemsPerPage = 10;
                $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
                $offset = ($currentPage - 1) * $itemsPerPage;

                // Fetch student details from the database and display them in rows with pagination
                $result = filterStudentsByFaculty('', $conn);
                $totalRows = mysqli_num_rows($result);
                $totalPages = ceil($totalRows / $itemsPerPage);

                // Adjust the query to fetch only the required rows for the current page
                $query = "SELECT * FROM students LIMIT $offset, $itemsPerPage";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $studentName = $row['Name_with_initials'];
                    $regNo = $row['Registration_No'];
                    $yearOfStudy = $row['Date_of_admission'];
                    $faculty = $row['faculty'];
                ?>
                    <tr class="faculty-row">
                        <td><?php echo $regNo; ?></td>
                        <td><?php echo $studentName; ?></td>
                        <td><?php echo $yearOfStudy; ?></td>
                        <td><?php echo $faculty; ?></td>
                        <td>
                            <a href="editStudent.php?id=<?php echo $studentId; ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="viewStudent.php?id=<?php echo $studentId; ?>" class="btn btn-success btn-sm">View</a>
                            <a href="deleteStudent.php?id=<?php echo $studentId; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <!-- Pagination links -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                for ($page = 1; $page <= $totalPages; $page++) {
                    $activeClass = $page === $currentPage ? ' active' : '';
                ?>
                    <li class="page-item<?php echo $activeClass; ?>"><a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</body>
</html>


<!-- this backend part done by 
2018ICTS05 -Jayapradha.P   https://www.linkedin.com/in/jayapradha-p-8a1a2a214
2018ICTS79 -Kishorkanth.P  https://www.linkedin.com/in/kishor-prakash-749581233
 -->
