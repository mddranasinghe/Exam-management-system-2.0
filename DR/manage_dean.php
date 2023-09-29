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
    
                  
                    <th>DEAN Number</th>
      
                    <th>Faculty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP code to fetch DEAN details from the database and display them in rows -->
                <?php
                // Perform database query to get DEAN information
                $query = "SELECT * FROM dean";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                  
                    $DEANNumber = $row['DEANNum'];
                   
                    $faculty = $row['Faculty'];
                ?>
                    <tr>
                    
                        <td><?php echo $DEANNumber; ?></td>
                   
                        <td><?php echo $faculty; ?></td>
                        <td>
                            <a href="edit_dean.php?DEANNum=<?php echo $DEANNumber; ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="viwe_dean.php?DEANNum=<?php echo $DEANNumber; ?>" class="btn btn-success btn-sm">View</a>
                            <a href="delectDEAN.php?DEANNum=<?php echo $DEANNumber; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this DEAN?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

