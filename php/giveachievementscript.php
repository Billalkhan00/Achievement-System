<?php
include "database.php";

if (isset($_POST["studentID"]) == false) {
    header("location: ../teacherdashboard.php");
    exit();
}
$studentID=$_POST["studentID"];
if (isset($_POST["achievementID"]) == false) {
    header("location: ../teacherdashboard.php");
    exit();
}
$achievementID=$_POST["achievementID"];

$conn -> query("INSERT INTO child_achievements (ChildID, AchievementID) VALUES($studentID, $achievementID)");
header("location: ../teacherdashboard.php");
?>