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

