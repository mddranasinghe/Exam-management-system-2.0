<?php
//delete notification.................................................................
include 'db_connection.php';
// $id = $_GET['id'];
// $sql = "DELETE FROM notifications WHERE id='$id'";


// $res = mysqli_query($conn, $sql);

// if ($res) {
//     header('location:Admin_home.php');
// } else {
//     echo "failed to delete student.";
// }
// 
//add notification.................................................................
if (isset($_POST['send'])) {
    switch ($_POST['messageType']) {
        case 'announcement':
            $sql = $conn->prepare("INSERT INTO notificationmanagement(title,type,message) VALUES('$_POST[title]','$_POST[messageType]','$_POST[message]')");
            break;
        case 'applicationSubmission':
            $sql = $conn->prepare("INSERT INTO notificationmanagement(title,type,category,faculty,field,year,semester,indexYear,dateFrom,dateTo) VALUES('$_POST[title]','$_POST[messageType]','$_POST[type]','$_POST[faculty]','$_POST[subject]','$_POST[year]','$_POST[semester]','$_POST[indexStart]','$_POST[startDate]','$_POST[endDate]')");
            break;
        case 'resultRelesase':
            $sql = $conn->prepare("INSERT INTO notificationmanagement(title,type,faculty,year,semester,indexYear) VALUES('$_POST[title]','$_POST[messageType]','$_POST[faculty]','$_POST[year]','$_POST[semester]','$_POST[indexStart]')");
            break;
        case 'faculty':
            $sql = $conn->prepare("INSERT INTO notificationmanagement(title,type,faculty,message) VALUES('$_POST[title]','$_POST[messageType]','$_POST[faculty]','$_POST[message]')");
            break;
        default:
            echo $_POST['type'];
            break;
    }
    $sql->execute();
    header("Location: ./Admin_home.php");
}
    // $sql="INSERT INTO notifications (title, message) VALUES  ('$_POST[title]', '$_POST[message]')";
    // $res=mysqli_query($conn,$sql);

    // if(mysqli_num_rows($res)>0){

    //   echo "Notification inserted successfully";
    // }else{
    //     echo "Failed to login.";
    // }
