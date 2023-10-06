<?php
include "db_connection.php";
//Check for tables with the name and if not the table will be created
$result = $conn->query("SHOW TABLES LIKE 'examentrytracking'");
if ($result->num_rows <= 0) {
    $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS `examentrytracking` (
        `Application_No` int(20) NOT NULL AUTO_INCREMENT,
        `Registration_No` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
        `Exam` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
        `Date` date DEFAULT NULL,
        `Time` time DEFAULT NULL,
        PRIMARY KEY (`Application_No`),
        KEY `Registration_No` (`Registration_No`,`Exam`)
      ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");
    $stmt->execute();
    $stmt = $conn->prepare(
        "ALTER TABLE `examentrytracking`
      ADD CONSTRAINT `examentrytracking_ibfk_2` FOREIGN KEY (`Registration_No`,`Exam`) REFERENCES `examenrty` (`Registration_No`, `Name_of_the_examination`)"
    );
    $stmt->execute();
}
$result = $conn->query("SHOW TABLES LIKE 'medicaltracking'");
if ($result->num_rows <= 0) {
    $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS `medicaltracking` (
        `Application_No` int(20) NOT NULL AUTO_INCREMENT,
        `Registration_No` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
        `Exam` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
        `Date` date DEFAULT NULL,
        `Time` time DEFAULT NULL,
        PRIMARY KEY (`Application_No`),
        KEY `Registration_No` (`Registration_No`,`Exam`)
      ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");
    $stmt->execute();
    $stmt = $conn->prepare(
        "ALTER TABLE `medicaltracking`
      ADD CONSTRAINT `medicaltracking_ibfk_2` FOREIGN KEY (`Registration_No`,`Exam`) REFERENCES `medical` (`Registration_No`, `Name_of_the_examination`)"
    );
    $stmt->execute();
}
$result = $conn->query("SHOW TABLES LIKE 'resittracking'");
if ($result->num_rows <= 0) {
    $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS `resittracking` (
        `Application_No` int(20) NOT NULL AUTO_INCREMENT,
        `Registration_No` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
        `Exam` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
        `Date` date DEFAULT NULL,
        `Time` time DEFAULT NULL,
        PRIMARY KEY (`Application_No`),
        KEY `Registration_No` (`Registration_No`,`Exam`)
      ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");
    $stmt->execute();
    $stmt = $conn->prepare(
        "ALTER TABLE `resittracking`
      ADD CONSTRAINT `resittracking_ibfk_2` FOREIGN KEY (`Registration_No`,`Exam`) REFERENCES `medical` (`Registration_No`, `Name_of_the_examination`)"
    );
    $stmt->execute();
}
