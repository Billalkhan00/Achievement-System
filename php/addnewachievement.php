<?php
include "database.php";

// check if user has entered reason
if (isset($_POST["reason"]) == FALSE) {
    header("location: ../achievementspage.php");
    exit();    
}

// remove special charaters
$reason = htmlspecialchars($_POST["reason"]);

// add achivement to database
$conn -> query("INSERT INTO achievements (Reason, Date, Milestone) VALUES ('$reason', '0000-00-00', '0')");

// take user back to achievement page
header("location: ../achievementspage.php");
exit();