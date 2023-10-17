<?php
function filterFaculty($indexNo)
{
    $faculty = '';
    if (str_contains($indexNo, 'ICTS'))
        $faculty = 'FTS';
    else if (str_contains($indexNo, 'ICT') || str_contains($indexNo, 'ASP'))
        $faculty = 'FAS';
    else
        $faculty = 'FBS';
    return $faculty;
}
function filterYear($indexNo)
{
    $faculty = $indexNo[0] . $indexNo[1] . $indexNo[2] . $indexNo[3];
    return $faculty;
}
function yearExtend($year)
{
    switch ($year) {
        case 1:
            return "1<sup>st</sup> Year";
            break;
        case 2:
            return "2<sup>nd</sup> Year";
            break;
        case 3:
            return "3<sup>rd</sup> Year";
            break;
        case 4:
            return "4<sup>th</sup> Year";
            break;
        default:
            return null;
            break;
    }
}
function semesterExtend($semester)
{
    switch ($semester) {
        case 1:
            return "1<sup>st</sup> semester";
            break;
        case 2:
            return "2<sup>nd</sup> semester";
            break;
        case 3:
            return "3<sup>rd</sup> semester";
            break;
        default:
            return null;
            break;
    }
}
function facultyExtend($faculty)
{
    switch ($faculty) {
        case "FTS":
            return "Faculty of Technological Studies";
            break;
        case "FAS":
            return "Faculty of Applied Science";
            break;
        case "FBS":
            return "Faculty of Business Studies";
            break;
        default:
            return null;
            break;
    }
}
function calculateExamName($year, $semester, $subject)
{
    $yearValue = '';
    $semesterValue = '';
    switch ($year) {
        case 1:
            $yearValue = 'First';
            break;
        case 2:
            $yearValue = 'Second';
            break;
        case 3:
            $yearValue = 'Third';
            break;
        case 4:
            $yearValue = 'Fourth';
            break;
        default:
            # code...
            break;
    }
    switch ($semester) {
        case 1:
            $semesterValue = 'First';
            break;
        case 2:
            $semesterValue = 'Second';
            break;
        default:
            # code...
            break;
    }
    return $yearValue . " examination in " . $subject . " " . $semesterValue . " semester";
}
function yearNumToText($year)
{
    switch ($year) {
        case 1:
            return '1st year';
            break;
        case 2:
            return '2nd year';
            break;
        case 3:
            return '3rd year';
            break;
        case 4:
            return '4th year';
            break;
        default:
            return '';
            break;
    }
}
function semesterNumToText($semester)
{
    switch ($semester) {
        case 1:
            return '1st semester';
            break;
        case 2:
            return '2nd semester';
            break;
        default:
            return;
            break;
    }
}
function facultyText($faculty)
{
    switch ($faculty) {
        case "FTS":
            return "Technological studies";
            break;
        case "FAS":
            return "Applied science";
            break;
        case "FBS":
            return "Business studies";
            break;
        default:
            return null;
            break;
    }
}
