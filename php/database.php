<!-- This is the link to the database and sets all the variables to the database -->
<?php
$userName = "root";
$password = "";
$hostName = "localhost";
$databaseName = "achievement-website-database";

$conn = new PDO("mysql:dbname=$databaseName;host=$hostName", $userName, $password);
