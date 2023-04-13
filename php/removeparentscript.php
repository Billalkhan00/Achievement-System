<?php
include "database.php";
if (isset($_GET["parentID"]) == FALSE) {
    header("location: ../teacherdashboard.php");
    exit();
}
$parentID = $_GET["parentID"];
if (isset($_GET["childID"]) == FALSE) {
    header("location: ../teacherdashboard.php");
    exit();
}
$childID = $_GET["childID"];
$conn -> query("DELETE FROM parent_account WHERE ParentID='$parentID'");
// $conn -> query("DELETE FROM parent_of_child WHERE ParentID='$parentID' AND ChildID='$childID'");
header("Location: ../studentprofilepage.php?student=$childID");
exit();