<?php
include "./Admin_nav.php";

?>
<script>
    function setAuxAmount(params) {
        Aux = params;
    }

    function setCourseCode(params) {
        CourseCode = params;
    }

    function setProperAmount(params) {
        Proper = params;
    }
    let auxModified = false,
        properModified = false;

    function generateForm() {
        let year = 1,
            semester = 1;
        let Aux = document.getElementById("auxAmount").value;
        let CourseCode = document.getElementById("courseCodeLetters").value;
        let Proper = document.getElementById("properAmount").value;
        if (document.getElementById("secondY").checked) {
            year = 2;
        } else if (document.getElementById("thirdY").checked) {
            year = 3;
        } else if (document.getElementById("fourthY").checked) {
            year = 4;
        }
        if (document.getElementById("secondS").checked) {
            semester = 2;
        }
        // let year=document.GetElementByName("year").value;
        console.log(year);
        // let semester=document.GetElementByName("semester").value;
        console.log(semester);
        if (Aux > 0 && CourseCode != "" && Proper > 0) {
            for (let i = 1; i <= Aux; i++) {
                let label = document.createElement("label");
                label.innerHTML = "AUX" + year + semester;
                label.name = "AUX" + i;
                let label2 = document.createElement("label");
                label2.innerHTML = "Subject name";
                label2.name = "AUXsub" + i;
                let credit = document.createElement("input");
                credit.type = "number";
                credit.placeholder = "Subject_No and Credit";
                credit.name = "AUX" + i + "Credit";
                let subject = document.createElement("input");
                subject.name = "AUX" + i + "subject";
                let div = document.createElement("div");
                if (!auxModified) {
                    label.appendChild(credit);
                    div.appendChild(label);
                    label2.appendChild(subject);
                    div.appendChild(label2);
                    document.getElementById("courseDetails").appendChild(div);
                }
            }
            for (let i = 1; i <= Proper; i++) {
                let label = document.createElement("label");
                label.innerHTML = CourseCode + year + semester;
                label.name = CourseCode + i;
                let label2 = document.createElement("label");
                label2.innerHTML = "Subject name";
                label2.name = CourseCode + "sub" + i;
                let credit = document.createElement("input");
                credit.type = "number";
                credit.placeholder = "Subject_No and Credit";
                //class example 
                // credit.classList.add("form-control");
                credit.name = CourseCode + i + "Credit";
                let subject = document.createElement("input");
                subject.name = CourseCode + i + "subject";
                let div = document.createElement("div");
                if (!properModified) {
                    label.appendChild(credit);
                    div.appendChild(label);
                    label2.appendChild(subject);
                    div.appendChild(label2);
                    document.getElementById("courseDetails").appendChild(div);
                }
            }
            auxModified = true;
            properModified = true;
        }
    }

    function clearForm() {
        let elem = document.getElementById("courseDetails");
        while (elem.hasChildNodes()) {
            elem.removeChild(elem.firstChild);
        }
        let legend = document.createElement("legend");
        legend.innerHTML = "Courses";
        elem.appendChild(legend);
        auxModified = false;
        properModified = false;
    }

    //function insertData() {
    // $sql="INSERT INTO course_offerings('year','semester','faculty') VALUES ( "
    //}

    function goBack() {
        header("Location: ../");
    }
</script>
<style type="text/css">
    /* #addSubjects {
        margin: 10px auto;
        padding: 5px;
        background-color: #fff;
        border: 1px solid #000;
        border-radius: 12px;
        width: 95vw;
    }

    legend {
        font-weight: semibold;
        text-align: center;
        text-decoration: underline;
    }

    label {
        width: auto;
    }

    input {
        width: auto;
    }

    fieldset {
        border: 1px solid #000;
        border-radius: 12px;
        margin: 5px;
        padding: 5px;
    }

    fieldset input,
    fieldset label {
        margin-left: 10px;
         display: inline-flex;
        justify-content:between; 
    }

    .flexCol {
        display: flex;
        flex-direction: column;
    }*/
</style>
<div id="addSubjects" class="container-fluid">
    <form action="./subjectBack.php" method="post" class="container">
        <fieldset id="year" class="row ">
            <div class="col">
                <div class="row">
                    <h4 class="bg-dark py-2 rounded text-white text-center fs-4 col"> Select Year<h4>
                </div>
                <div class="row mx-2">
                    <!-- <span style="height:50px; background-color: blue; width:100%;"></span> -->
                    <div class="col-md col-12 form-check">
                        <input type="radio" name="year" id="firstY" value="1st year" checked class="form-check-input">
                        <label class="form-label" for="firstY">First</label>
                    </div>
                    <div class="col-md col-12 form-check">
                        <input type="radio" name="year" id="secondY" value="2nd year" class="form-check-input">
                        <label class="form-label" for="secondY">Second</label>
                    </div>
                    <div class="col-md col-12 form-check">
                        <input type="radio" name="year" id="thirdY" value="3rd year" class="form-check-input">
                        <label class="form-label" for="thirdY">Third</label>
                    </div>
                    <div class="col-md col-12 form-check">
                        <input type="radio" name="year" id="fourthY" value="4th year" class="form-check-input">
                        <label class="form-label" for="fourthY">Fourth</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset id="semester" class="row">
            <div class="col">
                <div class="row">
                    <h4 class="container p-1 my-2 bg-dark text-white text-center rounded"> Select Semester<h4>
                </div>
                <div class="row mx-2">
                    <div class="col-md col-12 form-check align-self-center">
                        <input type="radio" name="semester" id="firstS" value="1st semester" checked class="form-check-input">
                        <label for="firstS" class="form-label">First</label>
                    </div>
                    <div class="col-md col-12 form-check">
                        <input type="radio" name="semester" id="secondS" value="2nd semester" class="form-check-input">
                        <label for="secondS" class="form-label">Second</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- <fieldset id="faculty">
            <div class="container p-1 my-2 bg-dark text-white">
                <h4 style="text-align:center"> Select Faculty<h4>
            </div>

            <input type="radio" name="faculty" id="FAS" value="Applied science" checked>
            <label for="FAS">Faculty of Applied Science</label>
            <input type="radio" name="faculty" id="FBS" value="Business studies">
            <label for="FBS">Faculty of Business Studies</label>
            <input type="radio" name="faculty" id="FTS" value="Technological studies">
            <label for="FTS">Faculty of Technological Studies</label>
        </fieldset> -->
        <fieldset id="coursesAmount" class="row">
            <div class="col">
                <div class="row">
                    <h4 class="container p-1 my-2 bg-dark text-white text-center rounded">Select Course Amount and Types<h4>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="properAmount" id="properAmount" max="10" min="0" required placeholder="properAmount">
                            <label class="form-label" for="properAmount">Proper Subject Amount:</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="text" id="courseCodeLetters" name="courseCodeLetters" placeholder="Ex: TICT" required>
                            <label class="form-label" for="courseCodeLetters">Course Code Start: (Ex: TICT)</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="number" name="auxAmount" id="auxAmount" max="5" min="0" required placeholder="auxAmount">
                            <label class="form-label" for="auxAmount">Auxilary Subject Amount:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group">
                            <input type="button" value="Select" class="btn btn-success" onclick="generateForm()">

                            <input type="button" value="Reset" class="btn btn-danger" onclick="clearForm()">
                        </div>
                    </div>

                </div>
            </div>
        </fieldset>
        <fieldset class="row">
            <div class="col">
                <div class="row">
                    <h4 class="container p-1 my-2 bg-dark text-white text-center rounded"> Assign Courses </h4>
                </div>
            </div>
            <div id="courseDetails" class="row"></div>
        </fieldset>
        <fieldset class="row m-4">
            <div class="col form-switch">
                <input type="checkbox" name="overWrite" id="overWriteChb" class="form-check-input" unchecked>
                <label for="overWriteChb" class="form-check-label">Over Write</label>
            </div>
            <input type="submit" value="SUBMIT" class="col btn btn-primary" name="submit">
        </fieldset>
    </form>
</div>
<!-- <div id="viewRecentSubjects">
</div>
<div id="searchSubjects">
</div> -->