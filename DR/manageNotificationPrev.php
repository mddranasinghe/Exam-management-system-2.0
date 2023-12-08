<?php
include "Admin_nav.php";
include "db_connection.php";
?>
<script>
    let TYPE = null;
    let faculty = null;
    let year = null;
    let semester = null;
    let searchText = null;

    function updateFilterParameters(filterName, filterValue) {
        switch (filterName) {
            case 'TYPE':
                TYPE = filterValue;
                fetchData(TYPE, faculty, year, semester, searchText);
                // console.log(TYPE + " " + faculty + " " + year + " " + semester + " " + searchText);
                return true;
                break;
            case 'faculty':
                faculty = filterValue;
                // console.log(TYPE + " " + faculty + " " + year + " " + semester + " " + searchText);
                return true;
                break;
            case 'year':
                year = filterValue;
                // console.log(TYPE + " " + faculty + " " + year + " " + semester + " " + searchText);
                return true;
                break;
            case 'semester':
                semester = filterValue;
                // console.log(TYPE + " " + faculty + " " + year + " " + semester + " " + searchText);
                return true;
                break;
            default:
                return false;
                break;
        }
    }

    function serchTextUpdate() {
        searchText = document.getElementById('Search').value;
    }

    function fetchData(TYPE, faculty, year, semester, searchText) {
        var myHeaders = new Headers();
        var formdata = new FormData();
        formdata.append("TYPE", TYPE);
        formdata.append("faculty", faculty);
        formdata.append("year", year);
        formdata.append("semester", semester);
        formdata.append("searchText", searchText);

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: formdata,
            redirect: 'follow'
        };

        fetch("./notificationData.php", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
    }
</script>

<div class="container-fluid">
    <div id="filters" class="row g-2 justify-content-between">
        <select id="typeSelection" class="col-6 col-md-2" onchange="updateFilterParameters('TYPE',value)">
            <option value="announcement">Announcements</option>
            <option value="faculty">Special Announcements</option>
            <option value="applicationSubmission">Applications</option>
            <option value="resultRelesase">Results</option>
            <option value="">All</option>
        </select>
        <select id="facultySelection" class="col-6 col-md-3" onchange="updateFilterParameters('faculty',value)">
            <option value="FTS">Faculty of Technological Studies</option>
            <option value="FAS">Faculty of Applied Science</option>
            <option value="FBS">Faculty of Business Studies</option>
            <option value="">All</option>
        </select>
        <select id="yearSelection" class="col-6 col-md-1" onchange="updateFilterParameters('year',value)">
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="">All</option>
        </select>
        <select id="semesterSelection" class="col-6 col-md-1" onchange="updateFilterParameters('semester',value)">
            <option value="1">1st</option>
            <option value="2">2nd</ption>
            <option value="">All</option>
        </select>
        <input type="text" id="Search" class="col-6 col-md-3">
        <input type="button" value="🔍" class="col-6 col-md-1" onclick="serchTextUpdate()">
    </div>
    <div id="data" class="container-fluid overflow-auto">
        <table class="table">
            <tr>
                <th>No</th>
                <th>notificationId</th>
                <th>title</th>
                <th>type</th>
                <th>message</th>
                <th>category</th>
                <th>faculty</th>
                <th>field</th>
                <th>YEAR</th>
                <th>semester</th>
                <th>indexYear</th>
                <th>dateFrom</th>
                <th>dateTo</th>
            </tr>
        </table>
    </div>
</div>