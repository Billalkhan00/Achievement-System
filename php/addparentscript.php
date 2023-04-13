<?php

if (isset($_POST["student"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$student = $_POST["student"];

if (isset($_POST["First_Name"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$First_Name = $_POST["First_Name"];

if (isset($_POST["Last_Name"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Last_Name = $_POST["Last_Name"];

if (isset($_POST["Email_Address"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Email_Address = $_POST["Email_Address"];

if (isset($_POST["Password"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

include "database.php";

$conn -> query("INSERT INTO parent_account (First_Name, Last_Name, Email_Address, Password) VALUES ('$First_Name','$Last_Name','$Email_Address','$Password')");
$last = $conn-> lastInsertId();

$conn -> query("INSERT INTO parent_of_child (ChildID, ParentID) VALUES ('$student','$last')");
header("location: ../studentprofilepage.php?student=$student");
