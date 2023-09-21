<?php
//delete notification.................................................................
include 'db_connection.php';
    $id=$_GET['id'];
    $sql="DELETE FROM notifications WHERE id='$id'";

    
    $res=mysqli_query($conn,$sql);

    if($res){
        header('location:Admin_home.php');
    }else{
        echo "failed to delete student.";
    }
?>

<?php
//add notification.................................................................
include 'db_connection.php';
if(isset($_POST['send']))
{
    $sql="INSERT INTO notifications (title, message) VALUES  ('$_POST[title]', '$_POST[message]')";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
      
      echo "Notification inserted successfully";
    }else{
        echo "Failed to login.";
    }
}

?>

<?php
include 'db_connection.php';
if(isset($_POST['Assign']))
{
 
    $sql="INSERT INTO asign_lecturer (year, semester,subject_code,subject_name,LECNum,faculty) VALUES  ('$_POST[year]','$_POST[semester]','$_POST[subject_code]','$_POST[subject_name]','$_POST[LECNum]','$_POST[faculty]')";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
      
        echo "Lecturer Assign successfully";
        header('location:log.php');
      }else{
          echo "Failed to Assign Lecturer .";
      }
}
?>
