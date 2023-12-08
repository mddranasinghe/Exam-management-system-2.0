<?php
require "../../db_connection.php";
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
// echo $path;
if ($method === 'GET' && $path == '/exam-management-system-2.0/DR/API/ap.php/notifications/All') {
    $sql = "SELECT * FROM notificationmanagement";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();
    $data = [];
    while ($row = $results->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
    // echo $results;
} else if ($method === 'POST' && $path == '/exam-management-system-2.0/DR/API/ap.php/notifications') {
    $searchText = $_POST['searchText'];
    $sql = "SELECT * FROM notificationmanagement WHERE title='$searchText'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();
    $data = [];
    while ($row = $results->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else if ($method === 'POST' && $path == '/exam-management-system-2.0/DR/API/ap.php/notifications/One') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $id = $data['id'];
    $sql = "SELECT * FROM notificationmanagement WHERE notificationid='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();
    $data1 = $results->fetch_assoc();
    echo json_encode($data1);
    // echo $results;
} else if ($method === 'PUT' && $path == '/exam-management-system-2.0/DR/API/ap.php/notifications') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $id = $data['id'];
    $type = $data['type'];
    $title = $data['title'];
    $fields = "TYPE='$type', title='$title', ";
    foreach ($data as $key => $value) {
        if ($value == null) {
            $value = "null";
        }
        switch ($key) {
            case 'Select Faculty':
                $fields .= "faculty = '" . $value . "', ";
                break;
            case 'Select year':
                $fields .= "year = " . $value . ", ";
                break;
            case 'Select semester':
                $fields .= "semester = " . $value . ", ";
                break;
            case 'Insert the year of the index no':
                $fields .= "indexYear = " . $value . ", ";
                break;
            case 'Message':
                $fields .= "message = '" . $value . "', ";
                break;
            case 'Insert the subject Field':
                $fields .= "field = '" . $value . "', ";
                break;
            case 'Select type':
                $fields .= "category = '" . $value . "', ";
                break;
            case 'From':
                $fields .= "dateFrom = '" . $value . "', ";
                break;
            case 'TO':
                $fields .= "dateTo = '" . $value . "', ";
                break;
            default:
                break;
        }
    }
    $fields = substr($fields, 0, -2);
    $query = "UPDATE notificationmanagement SET " . $fields . " WHERE notificationId='$id'";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $results = $stmt->get_result();
        $respond = ["id" => $id, "status" => "Completed", "method" => $method];
    } catch (Error $e) {
        http_response_code(500);
        $respond = ["id" => $id, "status" => "Failed", "method" => $method, "Error" => $e];
    }

    echo json_encode($respond);
    // echo $query;
} else if ($method === 'DELETE' && $path == '/exam-management-system-2.0/DR/API/ap.php/notifications') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $id = $data['id'];
    $query = "DELETE FROM notificationmanagement WHERE notificationId='$id'";
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $results = $stmt->get_result();
        $respond = ["id" => $id, "status" => "Completed", "method" => $method];
    } catch (\Throwable $th) {
        http_response_code(500);
        $respond = ["id" => $id, "status" => "Failed", "method" => $method];
    }

    echo json_encode($respond);
}
