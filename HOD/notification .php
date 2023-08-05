
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">

	<style type="text/css">
        .full-page {
            width: 50%;
            height: 100%;
            background-color: #f2f2f2;
            margin-left:27%;
            margin-top:5%;
            padding:50px;
            float:center;
        }

       

        body
        {
            background-color:#e4bfe2;
        }
       
        input{
            margin-top:5%;
            width:400px;
        }
        textarea 
        {
            margin-top:10%;
            width:400px;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="full-page">
    <div class="container">
		<h1>Add Notice</h1>
		<form method="post">
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
					<td colspan="2"><input type="submit" class="btn btn-outline-primary" value="Send Notice"style="margin-left:72px;"></td>
				</tr>
			</table>
		</form>
	</div>
    <?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['title']) && !empty($_POST['message']))
{
    $sql = "INSERT INTO notifications (title, message) VALUES  ('$_POST[title]', '$_POST[message]')";
    if ($conn->query($sql) === TRUE) {
        echo "Notification inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html> 
