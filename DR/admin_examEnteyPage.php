<?php   
include "Admin_nav.php";
include "db_connection.php"; 

$year='1st year';
$semester='1st semester';

?>


<style type="text/css">
    /* Add CSS for positioning the form elements */
    .year-select,
    .semester-select,
    .submit-button {
        display: inline-block;
        margin-right: 10px;
        width:30px auto
    }
</style>
<div class="form-contol ml-4">
    <form name="Registration" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
        <div class="year-select">
            <label>Select Year:</label>
            <select class="form-control" name="year">
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </div>

        <div class="semester-select">
            <label>Select Semester:</label>
            <select class="form-control" name="semester">
                <option value="1st Semester">1st Semester</option>
                <option value="2nd Semester">2nd Semester</option>
            </select>
        </div>

        <div class="submit-button">
            <input class=" btn btn-success m-2 btn-lm" type="submit" name="submit" value="FILTER"  style="width: auto;">
        </div>
    </form>
</div>

<table class="table table-stripped m-4">
	<h2 style="text-align:center;margin:2px;"> List of Examination Entry Applications Submitted</h2>
        <thead class="thead-dark">
            <tr>
                <th>REGISTATION NUMBER </th>
                <th>NAME</th>
        
            </tr>
        </thead>
        <body>
        <?php

    if(isset($_POST['year'])){
        $year=$_POST['year'];
    }
    if(isset($_POST['semester'])){
        $semester=$_POST['semester'];
    }
$sql=  "SELECT  examenrty.Registration_No,examenrty.Name_with_initials,examenrty.Name_of_the_examination FROM examenrty JOIN approve_state ON examenrty.Registration_No = approve_state.Registration_No WHERE approve_state.dean_recommend=1 AND  year ='$year' AND semester='$semester'";

    $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                $check ="abc";
                while($row=mysqli_fetch_assoc($res)){
                    if($row['Registration_No']!=$check)
                    {
                        $check = $row['Registration_No'];
                        $Registration_No=$row['Registration_No'];
                        $_SESSION['Name_of_the_examination']=$row['Name_of_the_examination'];
                        echo "<tr>";
                        echo "<td>".$row['Registration_No']."</td>";
                        echo "<td>".$row['Name_with_initials']."</td>";
                        

                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./view.php?Registration_No=$Registration_No'>view</a>";
                        //echo "<a class='btn btn-danger m-2 btn-sm' href='./delete.php?id=$id'>Delete</a>";
               
                    }

                }

            }
        ?>
        </tbody>
    </table>
