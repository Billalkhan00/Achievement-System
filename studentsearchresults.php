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
    if (isset($_GET["name"])==FALSE && isset($_GET["class"])==FALSE){
        header("location:teacherdashboard.php");
        exit();
    }
    if (empty($_GET["name"])==TRUE && empty($_GET["class"])==TRUE){
        header("location:teacherdashboard.php");
        exit();
    }
    $studentName = $_GET["name"];
    $className = $_GET["class"];
    if (isset($_SESSION["user"])==FALSE){
        header("location:teacherdashboard.php");
        exit();
    }
    $userID = $_SESSION ["user"] -> TeacherID; 
    $students = $conn -> query ("SELECT * FROM child_account WHERE First_Name LIKE '%$studentName%' OR Last_Name LIKE '%$studentName%' OR Class LIKE '%$className%'");
    $students = $students -> fetchAll();
    for ($i=0;$i<count($students) ;$i++){
        $student = $students[$i];
        ?>
        <a href="studentprofilepage.php?student=<?php echo $student ['ChildID'] ?>"><?php echo $student ["First_Name"] ." ". $student ["Last_Name"] ?></a>
        <?php
    }
    ?>
    <?php
    include("php/footer.php");
    ?>
    </body>



</html>