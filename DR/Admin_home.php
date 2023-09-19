

<?php   
include "Admin_nav.php";
include "db_connection.php"; 
?>
<div class="home_full">
	<div class=N_box>
		<div class="container p-3 my-3 bg-dark text-white">
			<h2>EXAMINATION NOTIFICATIONS</h2>

			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin-left:40px">
			ADD NOTIFICATION
			</button>
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
				echo "<a class='btn btn-danger m-2 btn-sm' href='./script.php?id=$id'>Delete</a>";
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




