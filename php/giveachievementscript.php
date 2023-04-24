<?php
include "database.php";

// check if student id is set
if (isset($_POST["studentID"]) == false) {
    header("location: ../teacherdashboard.php");
    exit();
}
$studentID=$_POST["studentID"];

// check if achievement id is set
if (isset($_POST["achievementID"]) == false) {
    header("location: ../teacherdashboard.php");
    exit();
}
$achievementID=$_POST["achievementID"];

// add achievement to student in database
$conn -> query("INSERT INTO child_achievements (ChildID, AchievementID) VALUES($studentID, $achievementID)");
header("location: ../studentprofilepage.php?student=$studentID");
?>