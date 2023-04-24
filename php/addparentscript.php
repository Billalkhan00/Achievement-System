<?php
// check if student id is set
if (isset($_POST["student"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$student = $_POST["student"];

// check if first name is set
if (isset($_POST["First_Name"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$First_Name = $_POST["First_Name"];

// check if last name is set
if (isset($_POST["Last_Name"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Last_Name = $_POST["Last_Name"];

// check if email is set
if (isset($_POST["Email_Address"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Email_Address = $_POST["Email_Address"];

// check if password is set
if (isset($_POST["Password"]) == FALSE) {
    header("location: index.php");
    exit();   
}
$Password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

include "database.php";

// add new parent to database
$conn -> query("INSERT INTO parent_account (First_Name, Last_Name, Email_Address, Password) VALUES ('$First_Name','$Last_Name','$Email_Address','$Password')");
$last = $conn-> lastInsertId();

// add link from parent to child in database
$conn -> query("INSERT INTO parent_of_child (ChildID, ParentID) VALUES ('$student','$last')");
header("location: ../studentprofilepage.php?student=$student");
