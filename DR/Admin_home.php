<?php
include "Admin_nav.php";
include "db_connection.php";
?>
<script>
	document.addEventListener("DOMContentLoaded", () => {
		//faculty drop down
		let facultyLabel = document.createElement("label");
		let facultySelect = document.createElement("select");
		let option1 = document.createElement("option");
		option1.innerHTML = "Faculty of Technologocal Studies";
		option1.setAttribute("value", "FTS");
		let option2 = document.createElement("option");
		option2.innerHTML = "Faculty of Applied Science";
		option2.setAttribute("value", "FAS")
		let option3 = document.createElement("option");
		option3.innerHTML = "Faculty of Business Studies";
		option3.setAttribute("value", "FBS")
		facultySelect.replaceChildren(option1, option2, option3);
		facultySelect.name = "faculty";
		facultySelect.classList = ['form-select'];
		facultyLabel.innerHTML = "Select Faculty:";
		facultyLabel.classList = ['input-group-text'];
		facultyLabel.setAttribute("for", "facultySelect");
		let facultyGroup = document.createElement('div');
		facultyGroup.classList = ['input-group my-3'];
		facultyGroup.appendChild(facultyLabel);
		facultyGroup.appendChild(facultySelect);

		//year drop down
		let yearLabel = document.createElement("label");
		let yearSelect = document.createElement("select");
		option1 = document.createElement("option");
		option1.innerHTML = "First";
		option1.setAttribute("value", "1");
		option2 = document.createElement("option");
		option2.innerHTML = "Second";
		option2.setAttribute("value", "2")
		option3 = document.createElement("option");
		option3.innerHTML = "Third";
		option3.setAttribute("value", "3")
		option4 = document.createElement("option");
		option4.innerHTML = "Fourth";
		option4.setAttribute("value", "4")
		yearSelect.replaceChildren(option1, option2, option3, option4);
		yearSelect.name = "year";
		yearSelect.classList = ['form-select'];
		yearLabel.innerHTML = "Select year:";
		yearLabel.classList = ['input-group-text'];
		yearLabel.setAttribute("for", "yearSelect");
		let yearGroup = document.createElement('div');
		yearGroup.classList = ['input-group my-3'];
		yearGroup.appendChild(yearLabel);
		yearGroup.appendChild(yearSelect);

		//semester drop down
		let semesterLabel = document.createElement("label");
		let semesterSelect = document.createElement("select");
		option1 = document.createElement("option");
		option1.innerHTML = "First";
		option1.setAttribute("value", "1");
		option2 = document.createElement("option");
		option2.innerHTML = "Second";
		option2.setAttribute("value", "2")
		semesterSelect.replaceChildren(option1, option2);
		semesterSelect.name = "semester"
		semesterSelect.classList = ['form-select'];
		semesterLabel.innerHTML = "Select semester:";
		semesterLabel.classList = ['input-group-text'];
		semesterLabel.setAttribute("for", "semesterSelect");
		let semesterGroup = document.createElement('div');
		semesterGroup.classList = ['input-group my-3'];
		semesterGroup.appendChild(semesterLabel);
		semesterGroup.appendChild(semesterSelect);

		//academic year
		let indexLabel = document.createElement("label");
		let indexText = document.createElement("input");
		indexText.setAttribute('type', 'number');
		indexText.classList = "form-control";
		indexText.name = "indexStart";
		indexLabel.innerHTML = "Insert the year of the index no:";
		indexLabel.classList = ['input-group-text'];
		indexLabel.setAttribute("for", "indexText");
		indexText.setAttribute('placeholder', 'Ex: 2018/2019');
		let indexGroup = document.createElement('div');
		indexGroup.classList = ['input-group my-3'];
		indexGroup.appendChild(indexLabel);
		indexGroup.appendChild(indexText);

		//message
		let messageLabel = document.createElement("label");
		let messageText = document.createElement("input");
		messageText.setAttribute('type', 'text');
		messageText.classList = "form-control";
		messageText.name = "message";
		messageLabel.innerHTML = "Message:";
		messageLabel.classList = ['input-group-text'];
		messageLabel.setAttribute("for", "messageText");
		let messageGroup = document.createElement('div');
		messageGroup.classList = ['input-group my-3'];
		messageGroup.appendChild(messageLabel);
		messageGroup.appendChild(messageText);

		document.getElementById("notificationButton").addEventListener("click", () => {
			const element = document.getElementById("messageType");
			const content = document.getElementById("subSection");
			element.addEventListener("change", () => {
				switch (element.value) {
					case "announcement":
						let label = document.createElement("label");
						let textarea = document.createElement("textarea");
						label.innerHTML = "Message";
						label.classList = ['form-label'];
						textarea.name = "message";
						textarea.classList = ['form-control'];
						content.replaceChildren(label, textarea);
						break;
					case "applicationSubmission":

						let typeLabel = document.createElement("label");
						let typeSelect = document.createElement("select");
						option1 = document.createElement("option");
						option1.innerHTML = "Exam Application";
						option1.setAttribute("value", "Exam");
						option2 = document.createElement("option");
						option2.innerHTML = "Medical Application";
						option2.setAttribute("value", "Medical")
						option3 = document.createElement("option");
						option3.innerHTML = "Resit Application";
						option3.setAttribute("value", "Resit")
						typeSelect.replaceChildren(option1, option2, option3);
						typeSelect.name = "type";
						typeSelect.classList = ['form-select'];
						typeLabel.innerHTML = "Select type:";
						typeLabel.classList = ['input-group-text'];
						typeLabel.setAttribute("for", "typeSelect");
						let typeGroup = document.createElement('div');
						typeGroup.classList = ['input-group my-3'];
						typeGroup.appendChild(typeLabel);
						typeGroup.appendChild(typeSelect);

						let startDateLabel = document.createElement("label");
						let startDateText = document.createElement("input");
						startDateText.setAttribute('type', 'date');
						startDateText.classList = "form-control";
						startDateText.name = "startDate";
						startDateLabel.innerHTML = "From:";
						startDateLabel.classList = ['input-group-text'];
						startDateLabel.setAttribute("for", "startDateText");
						let startDateGroup = document.createElement('div');
						startDateGroup.classList = ['input-group my-3'];
						startDateGroup.appendChild(startDateLabel);
						startDateGroup.appendChild(startDateText);

						let endDateLabel = document.createElement("label");
						let endDateText = document.createElement("input");
						endDateText.setAttribute('type', 'date');
						endDateText.classList = "form-control";
						endDateText.name = "endDate";
						endDateLabel.innerHTML = "TO:";
						endDateLabel.classList = ['input-group-text'];
						endDateLabel.setAttribute("for", "endDateText");
						let endDateGroup = document.createElement('div');
						endDateGroup.classList = ['input-group my-3'];
						endDateGroup.appendChild(endDateLabel);
						endDateGroup.appendChild(endDateText);
						content.replaceChildren(facultyGroup, typeGroup, yearGroup, semesterGroup, indexGroup, startDateGroup, endDateGroup);
						break;
					case "resultRelesase":
						content.replaceChildren(facultyGroup, yearGroup, semesterGroup, indexGroup, messageGroup);
						break;
					case "faculty":
						content.replaceChildren(facultyGroup, messageGroup);
						break;
					default:
						content.remove();
						break;
				}
				if (element.value == "announcement") {

					// content.appendChild(dd);
				}
			})
		});

	});
</script>
<div class="home_full">
	<div class=N_box>
		<div class="container p-3 my-3 bg-dark text-white">
			<h2>EXAMINATION NOTIFICATIONS</h2>

			<button type="button" id="notificationButton" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin-left:40px">
				ADD NOTIFICATION
			</button>
			<hr>

			<?php
			$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {
					$id = $row['id'];
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
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header text-center bg-dark text-light">

				<h3>CREATE NOTIFICATION</h3>

			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="bg-light p-2 rounded">

						<form id="notificationForm" method="post" action="script.php">
							<label for="title" class="form-label">Title: </label>
							<input type="text" id="title" name="title" required class="form-control">
							<label for="messageType" class="from-label">Type:</label>
							<select name="messageType" id="messageType" class="form-select">
								<option selected value=""></option>
								<option value="announcement">Announcement</option>
								<option value="applicationSubmission">Application Submission</option>
								<option value="resultRelesase">Result Relesase</option>
								<option value="faculty">Faculty message</option>
							</select>
							<div id="subSection"></div>
					</div>

				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-outline-primary" value="Send Notice" name="send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>