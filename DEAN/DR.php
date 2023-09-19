<?php
session_start();
include "../db_conn.php";

// Initialize variables
$totalLecturers = 0;
$totalHODs = 0;
$totalDeans = 0; // Initialize the variable for Deans

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    // Perform database query to get the total number of students
    $queryStudents = "SELECT COUNT(*) AS total_students FROM students";
    $resultStudents = mysqli_query($conn, $queryStudents);
    $rowStudents = mysqli_fetch_assoc($resultStudents);
    $totalStudents = $rowStudents['total_students'];

    // Perform database query to get the total number of lecturers
    $queryLecturers = "SELECT COUNT(*) AS total_lecturers FROM lecturer";
    $resultLecturers = mysqli_query($conn, $queryLecturers);
    $rowLecturers = mysqli_fetch_assoc($resultLecturers);
    $totalLecturers = $rowLecturers['total_lecturers'];

    // Perform database query to get the total number of HODs
    $queryHODs = "SELECT COUNT(*) AS total_hods FROM hod";
    $resultHODs = mysqli_query($conn, $queryHODs);
    $rowHODs = mysqli_fetch_assoc($resultHODs);
    $totalHODs = $rowHODs['total_hods'];

    // Perform database query to get the total number of Deans
    $queryDeans = "SELECT COUNT(*) AS total_deans FROM dean";
    $resultDeans = mysqli_query($conn, $queryDeans);
    $rowDeans = mysqli_fetch_assoc($resultDeans);
    $totalDeans = $rowDeans['total_deans'];
} else {
    header("Location: ../index.php");
    exit(); // Add an exit here to stop executing the rest of the script
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        /* Custom styles for the webpage */
        body {
            padding: 20px;
            background-color: #e0dbdf;
        }
        .navbar {
            background-color: #381030;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .back-btn {
            color: white;
            font-size: 20px;
        }
        .container {
            margin-top: 20px;
        }
        /* Add responsive style for the card */
        .total-students-card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            transition: transform 0.3s; /* Add a smooth transform animation */
        }
        .total-students-card:hover {
            transform: scale(1.05); /* Increase size on hover */
        }
        /* Footer styles */
        .footer {
            background-color: #e2bee2;
            color: #381030;
            text-align: center;
            padding: 10px;
        }
        .homepage-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .homepage-box {
            flex: 1;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .homepage-box:hover {
            transform: scale(1.05);
        }
        .homepage-box h3 {
            text-align: center;
        }
        .homepage-box p {
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">DEPUTY REGISTRAR</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                Role: <?php echo $_SESSION['role']; ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        <div class="homepage-container">
            <div class="homepage-box">
                <h3 style="text-align: center;">Student</h3>
                <p>Total Students: <?php echo $totalStudents; ?></p>
                <div style="text-align: center;">
                    <a href="AddStudent.php" class="btn btn-primary">Add Students</a>
                    <a href="manageStudent.php" class="btn btn-secondary">Manage Students</a>
                </div>
            </div>
            <div class="homepage-box">
                <h3 style="text-align: center;">Lecturer</h3>
                <p>Total Lecturers: <?php echo $totalLecturers; ?></p>
                <div style="text-align: center;">
                    <a href="add_lecturer.php" class="btn btn-primary">Add Lecturer</a>
                    <a href="manage_lecturer.php" class="btn btn-secondary">Manage Lecturer</a>
                </div>
            </div>
        </div>
        <div class="homepage-container mt-4">
            <div class="homepage-box">
                <h3 style="text-align: center;">HOD</h3>
                <p>Total HOD: <?php echo $totalHODs; ?></p>
                <div style="text-align: center;">
                    <a href="add_HOD.php" class="btn btn-primary">Add HOD</a>
                    <a href="manage_HOD.php" class="btn btn-secondary">Manage HOD</a>
                </div>
            </div>
            <div class="homepage-box">
                <h3 style="text-align: center;">Dean</h3>
                <p>Total Dean: <?php echo $totalDeans; ?></p>
                <div style="text-align: center;">
                    <a href="add_Dean.php" class="btn btn-primary">Add Dean</a>
                    <a href="manage_Dean.php" class="btn btn-secondary">Manage Dean</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer fixed-bottom">
        <p class="mb-0">Copyright © 2023 University of Vavuniya</p>
    </div>

</body>
</html>
