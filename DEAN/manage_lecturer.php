<?php

include "../db_connection.php";
include "./Admin_nav.php";
// Add error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);




if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to filter lecturers by faculty
function filterLecturersByFaculty($faculty, $conn) {
    $query = "SELECT * FROM lec";
    if ($faculty !== '') {
        $query .= " WHERE Faculty = '$faculty'";
    }
    $result = mysqli_query($conn, $query);
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Lecturer</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        /* Your custom CSS styles here */
      
    
        .lecturer-list th,
        .lecturer-list td {
            text-align: center;
        }
        .center-heading {
            text-align: center;
            flex-grow: 1;
        }
        .faculty-dropdown {
            width: 150px;
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
</head>
<body>
 

    <div class="container">
        <br><br>
        
        <div class="form-group mt-3">
            <label for="facultyDropdown">Filter by Faculty:</label>
            <select class="form-select faculty-dropdown" id="facultyDropdown" onchange="filterByFaculty(this.value)">
                <option value="">All Faculty</option>
                <option value="Technological Studies">Technology</option>
                <option value="Applied Science">Applied</option>
                <option value="Business Studies">Business Studies</option>
            </select>
        </div>
        <table class="table table-bordered lecturer-list">
            <thead>
                <tr>
                 
                    <th>Lecturer Name</th>
                    <th>Lecturer Number</th>

                    <th>Faculty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Pagination settings
                $itemsPerPage = 10;
                $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
                $offset = ($currentPage - 1) * $itemsPerPage;

                // Fetch lecturer details from the database and display them in rows with pagination
                $result = filterLecturersByFaculty('', $conn);
                $totalRows = mysqli_num_rows($result);
                $totalPages = ceil($totalRows / $itemsPerPage);

                // Adjust the query to fetch only the required rows for the current page
                $query = "SELECT * FROM lec LIMIT $offset, $itemsPerPage";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $lecturerName = $row['LECName'];
                    $lecturerNumber = $row['LECNum'];
              
                    $faculty = $row['Faculty'];
                ?>
                    <tr class="faculty-row">
                        
                        <td><?php echo $lecturerName; ?></td>
                        <td><?php echo $lecturerNumber; ?></td>
                        <td><?php echo $faculty; ?></td>
                        <td>
                            <a href="edit_lecturer.php?LECNum=<?php echo $lecturerNumber; ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="view_lecturer.php?LECNum=<?php echo $lecturerNumber; ?>" class="btn btn-success btn-sm">View</a>
                            <a href="deleteLecturer.php?LECNum=<?php echo $lecturerNumber; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this lecturer?')">Delete</a>
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

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Function to filter lecturers by faculty using AJAX
        function filterByFaculty(faculty) {
            // Send an AJAX request to the server to get filtered results
            $.ajax({
                url: 'filterlecturer.php',
                type: 'GET',
                data: { faculty: faculty },
                success: function (response) {
                    // Replace the current lecturer list with the filtered results
                    $('.lecturer-list tbody').html(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Function to load the initial lecturer list
        function loadLecturerList() {
            filterByFaculty(''); // Empty faculty value fetches all lecturers
        }

        // Call the loadLecturerList function when the page is ready
        $(document).ready(function () {
            loadLecturerList();
        });
    </script>
</body>
</html>
