<?php
// Add error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "Admin_nav.php";
include "db_connection.php"; 

// Check if the database connection is successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>


   

    <div class="container">
    <br><br>

        <table class="table table-bordered hod-list">
            <thead>
                <tr>
    
                    <th>HOD Name</th>
                    <th>HOD Number</th>
      
                    <th>Faculty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP code to fetch HOD details from the database and display them in rows -->
                <?php
                // Perform database query to get HOD information
                $query = "SELECT * FROM hod";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                  
                    $hodName = $row['HODName'];
                    $hodNumber = $row['HODNum'];
                   
                    $faculty = $row['Faculty'];
                ?>
                    <tr>
                    
                        <td><?php echo $hodName; ?></td>
                        <td><?php echo $hodNumber; ?></td>
                   
                        <td><?php echo $faculty; ?></td>
                        <td>
                            <a href="edit_hod.php?HODNum=<?php echo $hodNumber; ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="view_hod.php?HODNum=<?php echo $hodNumber; ?>" class="btn btn-success btn-sm">View</a>
                            <a href="deleteHOD.php?HODNum=<?php echo $hodNumber; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this HOD?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

