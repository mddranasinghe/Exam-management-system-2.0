<?php   
include "Admin_nav.php";
include "db_connection.php"; ?>
<table class="table table-stripped m-4">
	<h2 style="text-align:center;margin:2px;"> List of Resit Applications Submitted</h2>
        <thead class="thead-dark">
            <tr>
                <th>REGISTATION NUMBER </th>
                <th>NAME</th>
        
            </tr>
        </thead>
        <body>
        <?php


$sql= "SELECT  resit.Registration_No,resit.Name_with_initials FROM resit JOIN approve_state_resit ON resit.Registration_No = approve_state_resit.Registration_No WHERE approve_state_resit.hod_recommend=1";

    $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    $Registration_No=$row['Registration_No'];
                    echo "<tr>";
                    echo "<td>".$row['Registration_No']."</td>";
                    echo "<td>".$row['Name_with_initials']."</td>";
                    

                    echo "<td>";
                    echo "<a class='btn btn-primary btn-sm' href='./viewResit.php?Registration_No=$Registration_No'>view</a>";
                    //echo "<a class='btn btn-danger m-2 btn-sm' href='./delete.php?id=$id'>Delete</a>";
                }
            }
        ?>
        </tbody>
    </table>