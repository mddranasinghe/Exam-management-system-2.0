<?php  

//login login 
session_start();
include "db_connection.php";

if(isset($_POST['submit'])){

	$regnum=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$role=mysqli_real_escape_string($conn,$_POST['role']);
	

	if ($role == 'Student') {
		$sql = "SELECT * FROM students WHERE Registration_No='$regnum' AND password='$password'";
		$result = mysqli_query($conn, $sql);
	
		// Check if any rows were returned by the query
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['regNum'] = $regnum;
			header("Location: students/home.php");
		} else {
			echo "Failed to login.";
		}
	}
  else if ($role == 'HOD'){ 

	$sql1 = "SELECT * FROM hod WHERE Passwords=$password AND HODNum='$regnum'";
	$result1= mysqli_query($conn, $sql1);
	var_dump($result1);

	if(mysqli_num_rows($result1)>0){
		
		$_SESSION['regNum'] =$regnum ;
		header("Location: HOD/Admin_home.php");
	
	}else{
		echo "Failed to login.";
	}
	
  } 
  else if ($role == 'DR'){ 

	$sql1 = "SELECT * FROM dr WHERE drnum='$regnum' AND Password='$password'";
	$result1= mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result1)>0){
		
		$_SESSION['regNum'] =$regnum ;
		header("Location: DR/Admin_home.php");
	
	}else{
		echo "Failed to login.";
	}
	
  } 
  else if ($role == 'Lecturer'){ 

	$sql1 = "SELECT * FROM Lec WHERE LECNum='$regnum' AND Password=$password";
	$result1= mysqli_query($conn, $sql1);
	if(mysqli_num_rows($result1)>0){
		
		$_SESSION['regNum'] =$regnum ;
		header("Location: LECTURE/Admin_home.php");
	
	}
	
	else{
		echo "Failed to login.";
	}
	
  } 
  else if ($role == 'DEAN'){ 

	$sql1 = "SELECT * FROM dean WHERE DEANNum='$regnum' AND PasswordS='$password'";
	$result1 = mysqli_query($conn, $sql1);

	if($result1){
		if(mysqli_num_rows($result1) > 0){
			$_SESSION['regNum'] = $regnum;
			header("Location: DEAN/Admin_home.php");
		} else {
			echo "Failed to login.";
		}
	} else {
		echo "Query failed: " . mysqli_error($conn);
	}
}
 
}
?>

