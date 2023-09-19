

<?php   
include "Admin_nav.php";
include "db_connection.php"; 
?>
<style type="text/css">
    
    
    #Sub{
        margin-left:70%;  
        margin-top:-45%; 
        width:28%;
    }
    @media (max-width:480px){
        #Sub{
        margin:auto;
        width:80vw;
        }
    }
    @media (max-width:768px){
        #Sub{
        margin:auto;
        width:80vw;
        }
    }
   
</style>
<div class="Fullpage">
<div class="home_full">
<div class=N_box>
<div class="container p-3 my-3 bg-dark text-white">
<h2>EXAMINATION NOTIFICATIONS</h2>
<hr>

<?php
$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $id=$row['id'];
        echo '<div class="notification">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['message'] . '</p>';
        echo '<span class="timestamp">' . $row['created_at'] . '</span>';
    
        echo '</div>';
    }
} else {
    echo 'No notifications to display.';
}

$conn->close();
?>
</div>
</div>

</div>
<div id="Sub" class="container  bg-dark text-white" class="SubStyle">
<h1 style="text-align:center">SUBJECTS</h1>


<?php
include "db_connection.php"; 
$regNum=$_SESSION['regNum'];
$sql = "SELECT * FROM asign_lecturer WHERE LECNum='$regNum'" ;

$res=mysqli_query($conn,$sql);


if(mysqli_num_rows($res)>0){

    while( $row=mysqli_fetch_assoc($res)) {
       
        echo '<div class="show_sub">';
        echo '<p> <b>FACULTY  : </b>' . $row['faculty'].'</p> ';
        echo '<p> <b>YEAR  :  </b>' . $row['year'] . '</p>';
		echo '<p> <b>SEMESTER  : </b>' . $row['semester'] . '</p>';
        echo '<p> <b> SUBJECT CODE  : </b>' . $row['subject_code'] . '</p>';
        echo '<p> <b>SUBJECT NAME  : </b>' . $row['subject_name'] . '</p>';
        echo '</div>';
        echo '<hr>';
    }
} else {
    echo 'No notifications to display.';
}

$conn->close();





?>
</div>



<!-- add notification use pop up scren -->
<div class="modal" id="myModal">
<div class="full-page">
    <div class="container">
    <div class="container p-1 my-2 bg-dark text-white">
		<h3 style="text-align:center">CREATE NOTIFICATION</h3></div>
		<form method="post" action="script.php">
			<table>
				<tr>
					<td><label for="title">Title:  </label></td>
					<td><input type="text" id="title" name="title" required></td>
				</tr>
				<tr>
					<td><label for="message">Message:</label></td>
					<td><textarea id="message" name="message" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" class="btn btn-outline-primary" value="Send Notice"style="margin-left:72px;" name="send"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</div>


