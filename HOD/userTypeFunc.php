<?php

// echo session_status();
if (session_status() != 2) {
    session_start();
}
function userType()
{
    if (isset($_SESSION['regNum'])) {
        $user = $_SESSION['regNum'];
        if (str_ends_with($user, "/H")) {
            return "head";
        } else if (str_ends_with($user, "/DR")) {
            return "dr";
        } else if (str_ends_with($user, "/DEAN")) {
            return "dean";
        } else if (str_contains($user, "/L/")) {
            return "lecturer";
        } else {
            return "student";
        }
    }
}
function department()
{
    if (isset($_SESSION['regNum'])) {
        $user = $_SESSION['regNum'];
        if (str_contains($user, "/DICT/")) {
            return "dict";
        } else if (str_contains($user, "Da")) {
            return "e";
        } else {
            return null;
        }
    }
}
function faculty()
{
    if (isset($_SESSION['regNum'])) {
        $user = $_SESSION['regNum'];
    }
    if (str_contains($user, "/FOTS/")) {
        return "fts";
    } else if (str_contains($user, "/FOAS/")) {
        return "fas";
    }
    if (str_contains($user, "/FOBS/")) {
        return "fbs";
    } else {
        return null;
    }
}
