<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
    <h1>Student Search Result</h1>
    <?php
    include "php/database.php";
    if (isset($_GET["student"])==FALSE){
        header("location:index.php");
        exit();
    }

    $studentID = $_GET["student"];

    if (isset($_SESSION["user"])==FALSE){
        header("location:index.php");
        exit();
    }

    $student = $conn -> query ("SELECT * FROM child_account WHERE ChildID = $studentID");

    if ($student->rowCount() == 1) {
        $studentData = $student->fetchObject();
        $studentname = $studentData->First_Name;
        $studentlastname = $studentData->Last_Name;
        $studentemailaddress = $studentData->Email_Address;
        $studentclass = $studentData->Class;
        $studentdateofbirth = $studentData->Date_Of_Birth;
        ?>
        <p><?php echo $studentname ?></p>
        <p><?php echo $studentlastname ?></p>
        <p><?php echo $studentemailaddress ?></p>
        <p><?php echo $studentclass ?></p>
        <p><?php echo $studentdateofbirth ?></p>
        <a href="addachievementpage.php?student=<?php echo $studentID?>">Add Achievement</a>
        <?php
    } else {
        header("location: index.php");
        exit();
    }

    $achievements = $conn -> query("SELECT a.* FROM achievements AS a INNER JOIN child_achievements AS ca ON ca.ChildID = $studentID AND ca.AchievementID=a.AchievementID");
    $achievementsData = $achievements->fetchAll();
    for($i = 0; $i< count($achievementsData); $i++) {
        $a = $achievementsData[$i];

        ?>
        <p><?php echo $a["Reason"]?></p>
    <?php
}
    include("php/footer.php");
    ?>
    </body>



</html>