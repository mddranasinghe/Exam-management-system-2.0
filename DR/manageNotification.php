<?php
include "Admin_nav.php";
include "db_connection.php";
?>
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        fetchData(null);


    })
    let searchText = null;

    function createModelDelete(id, title) {
        // console.log("model");
        let model = document.createElement("div");
        let modelDoc = document.createElement("div");
        let modelContent = document.createElement("div");
        let modelHeader = document.createElement("h4");
        let modelTitle = document.createElement("div");
        let modelBody = document.createElement("div");
        let modelFooter = document.createElement("div");
        let confirmBtn = document.createElement("input");
        let cancelBtn = document.createElement("input");

        model.classList.add("modal");
        model.setAttribute("id", "model" + id);
        // model.setAttribute("role", "dialog");
        // model.setAttribute("aria-labelledby","exampleModalLabel");
        // model.setAttribute("tabindex", "-1");
        // model.setAttribute("aria-hidden", "true");
        modelDoc.classList.add("modal-dialog");
        modelDoc.classList.add("modal-dialog-centered");
        modelDoc.setAttribute("role", "document");
        modelContent.classList.add("modal-content");
        modelHeader.classList.add("modal-header");
        modelTitle.classList.add("modal-title");
        modelBody.classList.add("modal-body");
        modelFooter.classList.add("modal-footer");
        confirmBtn.classList.add("btn", "btn-danger");
        confirmBtn.setAttribute("type", "button");
        confirmBtn.setAttribute("value", "Confirm")
        confirmBtn.setAttribute("onclick", "deleteNotification(" + id + ")");
        confirmBtn.setAttribute("data-dismiss", "modal");
        cancelBtn.classList.add("btn", "btn-secondary");
        cancelBtn.setAttribute("type", "button");
        cancelBtn.setAttribute("value", "Cancel")
        cancelBtn.setAttribute("data-dismiss", "modal");
        modelTitle.innerText = "Are you sure?";
        modelBody.innerText = "You are deleting " + title + " notification permenetly!";
        modelFooter.replaceChildren(confirmBtn, cancelBtn);
        modelHeader.replaceChildren(modelTitle);
        modelContent.replaceChildren(modelHeader, modelBody, modelFooter);
        modelDoc.appendChild(modelContent);
        model.appendChild(modelDoc);
        document.getElementById("models").appendChild(model);
    }

    function createModelEdit(id, title, type, category, faculty, field, year, semester, indexYear, dateFrom, dateTo, message) {
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
        if (faculty == "FTS")
            option1.setAttribute("selected", true);
        else if (faculty == "FBS")
            option3.setAttribute("selected", true);
        else if (faculty == "FAS")
            option2.setAttribute("selected", true);
        else {
            option1.setAttribute("selected", true);
        }
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

        // subject section
        let subjectLabel = document.createElement("label");
        let subjectText = document.createElement("input");
        subjectText.setAttribute('type', 'text');
        subjectText.classList = "form-control";
        subjectText.name = "subject";
        subjectText.setAttribute('placeholder', 'Ex: Information and Communication Technology')
        subjectLabel.innerHTML = "Insert the subject Field:";
        subjectLabel.classList = ['input-group-text'];
        subjectLabel.setAttribute("for", "subjectText");
        let subjectGroup = document.createElement('div');
        subjectGroup.classList = ['input-group my-3'];
        subjectGroup.appendChild(subjectLabel);
        subjectGroup.appendChild(subjectText);

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
        if (year == 4)
            option4.setAttribute("selected", true);
        else if (year == 3)
            option3.setAttribute("selected", true);
        else if (year == 2)
            option2.setAttribute("selected", true);
        else
            option1.setAttribute("selected", true);
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
        if (semester == 2)
            option2.setAttribute("selected", true);
        else
            option1.setAttribute("selected", true);
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
        indexText.setAttribute('placeholder', 'Ex: 2018');
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
        setUpModalSubSction(type, message, faculty, field, year, semester, indexYear, dateFrom, dateTo);
        const element = document.getElementById("messageType");
        // const content = document.getElementById("subSection");
        const titleBox = document.getElementById("title");
        const updateButton = document.getElementById("updateButton");
        updateButton.setAttribute("onclick", "updateNotification(" + id + ")");
        titleBox.setAttribute("value", title);
        element.addEventListener("change", () => {
            setUpModalSubSction(element.value, message, faculty, field, year, semester, indexYear, dateFrom, dateTo);
        });

        function setUpModalSubSction(element, message, faculty, field, year, semester, indexYear, dateFrom, dateTo) {
            // console.log(element);
            let content = document.getElementById("subSection");
            let messageTypeSelection = document.getElementById("messageType");
            switch (element) {
                case "announcement":
                    messageTypeSelection.selectedIndex = 0;
                    let label = document.createElement("label");
                    let textarea = document.createElement("textarea");
                    label.innerHTML = "Message :";
                    label.classList = ['form-label'];
                    textarea.name = "message";
                    textarea.classList = ['form-control'];
                    textarea.innerText = message;
                    textarea.setAttribute("id", "msg");
                    let textareaGroup = document.createElement("div");
                    textareaGroup.replaceChildren(label, textarea)
                    content.replaceChildren(textareaGroup);
                    break;
                case "applicationSubmission":
                    messageTypeSelection.selectedIndex = 1;
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
                    option3.setAttribute("value", "Resit");
                    if (category == "Resit")
                        option3.setAttribute("selected", true);
                    else if (category == "Medical")
                        option2.setAttribute("selected", true);
                    else
                        option1.setAttribute("selected", true);
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
                    startDateText.setAttribute("value", dateFrom);
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
                    endDateText.setAttribute("value", dateTo);
                    endDateLabel.innerHTML = "TO:";
                    endDateLabel.classList = ['input-group-text'];
                    endDateLabel.setAttribute("for", "endDateText");
                    let endDateGroup = document.createElement('div');
                    endDateGroup.classList = ['input-group my-3'];
                    endDateGroup.appendChild(endDateLabel);
                    endDateGroup.appendChild(endDateText);
                    startDateText.setAttribute("value", dateFrom);
                    endDateText.setAttribute("value", dateTo);
                    subjectText.setAttribute("value", field);
                    indexText.setAttribute("value", indexYear);
                    content.replaceChildren(facultyGroup, subjectGroup, typeGroup, yearGroup, semesterGroup, indexGroup, startDateGroup, endDateGroup);

                    break;
                case "resultRelease":
                    messageTypeSelection.selectedIndex = 2;
                    indexText.setAttribute("value", indexYear);
                    messageText.setAttribute("value", message);
                    content.replaceChildren(facultyGroup, yearGroup, semesterGroup, indexGroup, messageGroup);
                    break;
                case "faculty":
                    messageTypeSelection.selectedIndex = 3;
                    indexText.setAttribute("value", indexYear);
                    messageText.setAttribute("value", message);
                    content.replaceChildren(facultyGroup, yearGroup, semesterGroup, indexGroup, messageGroup);
                    break;
                default:
                    messageTypeSelection.selectedIndex = 0;
                    let label1 = document.createElement("label");
                    let textarea1 = document.createElement("textarea");
                    label1.innerHTML = "Message :";
                    label1.classList = ['form-label'];
                    textarea1.name = "message";
                    textarea1.classList = ['form-control'];
                    textarea1.innerText = message;
                    let textareaGroup1 = document.createElement("div");
                    textareaGroup.replaceChildren(label1, textarea1)
                    content.replaceChildren(textareaGroup1);
                    break;
            }
        }

    }

    function displayContent(data) {
        // console.log(data);
        let count = 0,
            i = 0;
        // let row = document.createElement("div");
        // let row;
        //Data contents
        //TYPE  | YEAR | category | dateFrom | dateTo | faculty 
        //field | indexYear | message | notificationId | semester | title
        const elem = document.getElementById("content");
        let collection = document.createElement("div");
        collection.classList.add("card-columns");
        data.forEach(element => {
            if (count === 0) {
                // row = document.createElement("div");
                // row.classList.add("row", "justify-content-around", "mb-2");
            }
            let content = "";
            let dataRow = data[i];
            for (text in dataRow) {
                if (dataRow[text] != null) {
                    content += "<li class='list-group-item text-capitalize'>" + text + " : " + dataRow[text] + "</li>";
                }
            }
            i++

            count++;
            let card = document.createElement("div");
            card.setAttribute("id", "card_" + element['notificationId']);
            card.classList.add("card");
            let cardBody = document.createElement("div");
            cardBody.classList.add("card-body");
            let cardTitle = document.createElement("h5");
            cardTitle.classList.add("card-title");
            cardTitle.innerHTML = element['title'];
            let buttonDown = document.createElement("input");
            buttonDown.setAttribute("type", "button");
            buttonDown.setAttribute("value", "👇");
            buttonDown.setAttribute("data-toggle", "collapse");
            buttonDown.setAttribute("data-target", "#cardContent" + element['notificationId'])
            buttonDown.setAttribute("aria-expanded", "false");
            buttonDown.setAttribute("aria-controls", "cardContent" + element['notificationId']);
            let buttonEdit = document.createElement("input");
            buttonEdit.setAttribute("type", "button");
            buttonEdit.setAttribute("value", "📝");
            // console.log("createModelEdit('" + element['notificationId'] + "','" + element['title'] + "','" + element['TYPE'] + "','" + element['category'] + "','" + element['faculty'] + "','" + element['field'] + "','" + element['YEAR'] + "','" + element['semester'] + "','" + element['indexYear'] + "','" + element['dateFrom'] + "','" + element['dateTo'] + "','" + element['message'] + "')");
            buttonEdit.setAttribute("onclick", "createModelEdit('" + element['notificationId'] + "','" + element['title'] + "','" + element['TYPE'] + "','" + element['category'] + "','" + element['faculty'] + "','" + element['field'] + "','" + element['YEAR'] + "','" + element['semester'] + "','" + element['indexYear'] + "','" + element['dateFrom'] + "','" + element['dateTo'] + "','" + element['message'] + "')");
            buttonEdit.setAttribute("data-toggle", "modal");
            buttonEdit.setAttribute("data-target", "#myModal");
            let buttonClose = document.createElement("input");
            buttonClose.setAttribute("type", "button");
            buttonClose.setAttribute("value", "❌");
            buttonClose.setAttribute("data-toggle", "modal");
            buttonClose.setAttribute("data-target", "#model" + element['notificationId']);
            let collapse = document.createElement("div");
            collapse.setAttribute("id", "cardContent" + element['notificationId']);
            collapse.classList.add("collapse");
            let cardCont = document.createElement("ul");
            cardCont.classList.add("list-group", "list-group-flush");
            cardCont.innerHTML = content;
            content = "";
            collapse.appendChild(cardCont);
            cardBody.replaceChildren(cardTitle, buttonDown, buttonEdit, buttonClose, collapse);
            card.appendChild(cardBody);
            createModelDelete(element['notificationId'], element['title']);
            if (count < 4) {
                // row.appendChild(card);
            } else {
                count = 0;
            }
            collection.appendChild(card);
        });
        elem.replaceChildren(collection);
        i++;
    }

    function updateNotification(params) {
        var myHeaders = new Headers();

        let form = document.getElementById("subSection");
        let title = document.getElementById("title").value;
        let type = document.getElementById("messageType").value;
        let children = form.children;
        // for (key in children) {
        //     console.log(key);
        // }
        let subSection = "{";
        subSection += '"id":' + '"' + params + '", ';
        subSection += '"title":' + '"' + title + '", ';
        subSection += '"type":' + '"' + type + '", ';
        children.forEach(element => {
            if (element.children.length != 0)
                subSection += '"' + element.children[0].innerText.slice(0, -1) + '": "' + element.children[1].value + '" , ';

        })
        subSection = subSection.slice(0, -2);
        subSection += "}";
        // subsection = JSON.parse(subSection);
        // console.log(subSection);



        var requestOptions = {
            method: 'PUT',
            headers: myHeaders,
            body: subSection,
            redirect: 'follow'
        };


        fetch("./API/ap.php/notifications", requestOptions)
            .then(response => response.json())
            // .then(result => console.log(result))
            .then(result => refreshData(result))
            .catch(error => console.log('error', error));

    }

    function deleteNotification(params) {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");
        var raw = JSON.stringify({
            "id": params
        })


        var requestOptions = {
            method: 'DELETE',
            headers: myHeaders,
            body: raw,
            redirect: 'follow'
        };
        fetch("./API/ap.php/notifications", requestOptions)
            .then(response => response.json())
            .then(result => deleteCard(result))
            .catch(error => console.log('error', error));

    }

    function serchTextUpdate() {
        searchText = document.getElementById('Search').value;
        fetchData(searchText);
    }

    function refreshData(params) {
        // params = JSON.parse(params);

        if (params['status'] == 'Completed') {
            fetchSingle(params['id']);
        }
    }

    function deleteCard(params) {
        if (params['status'] == 'Completed') {
            let element = document.getElementById("card_" + params['id']);
            element.remove();
        }
    }

    function fetchSingle(params) {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            "id": params
        })

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: raw,
            redirect: 'follow'
        };

        fetch("./API/ap.php/notifications/One", requestOptions)
            .then(response => response.json())
            .then(result => updateData(result))
            .catch(error => console.log('error', error));
    }

    function fetchData(searchText) {
        var myHeaders = new Headers();
        var formdata = new FormData();

        formdata.append("searchText", searchText);

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: formdata,
            redirect: 'follow'
        };

        if (searchText === null) {
            var requestOptions = {
                method: 'GET',
                headers: myHeaders,
                redirect: 'follow'
            };
            fetch("./API/ap.php/notifications/All", requestOptions)
                .then(response => response.json())
                .then(result => displayContent(result))
                .catch(error => console.log('error', error));
        } else {
            fetch("./API/ap.php/notifications", requestOptions)
                .then(response => response.json())
                .then(result => displayContent(result))
                .catch(error => console.log('error', error));
        }

    }

    function updateData(params) {
        let cardContent = document.getElementById("cardContent" + params['notificationId']);
        let list = cardContent.childNodes[0];
        let content = "";
        for (text in params) {
            if (params[text] != null) {
                content += "<li class='list-group-item text-capitalize'>" + text + " : " + params[text] + "</li>";
            }
        }
        list.innerHTML = content;
    }
</script>
<div id="models"></div>
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-5 ml-auto">
            <div id="search" class="row input-group">
                <input type="text" id="Search" class="col-9 form-control">
                <input type="button" value="🔍" class="col-3 btn btn-outline-primary" onclick="serchTextUpdate()">
            </div>
        </div>
    </div>
    <div id="content">

    </div>

</div>
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center bg-dark text-light">

                <h3>CREATE NOTIFICATION</h3>

            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <div class="bg-light p-2 rounded">

                        <form id="notificationForm">
                            <label for="title" class="form-label">Title: </label>
                            <input type="text" id="title" name="title" required class="form-control">
                            <label for="messageType" class="from-label">Type:</label>
                            <select name="messageType" id="messageType" class="form-select">

                                <option selected value="announcement">Announcement</option>
                                <option value="applicationSubmission">Application Submission</option>
                                <option value="resultRelease">Result Relesase</option>
                                <option value="faculty">Faculty message</option>
                            </select>
                            <div id="subSection">
                                <!-- <div>
                                    <label for="mes" class="form-label">Message :</label>
                                    <textarea name="message" id="mes" class="form-control"></textarea> 
                            </div> -->
                            </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" id="updateButton" class="btn btn-outline-warning" value="Update" name="send" data-dismiss="modal">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>