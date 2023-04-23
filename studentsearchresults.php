<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/searchresults.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
    <h1 id="title">Student Search Results</h1>
    <div id="tableContainer"> 
        <table>
            <tr>
                <td>Student Name</td>
                <td>Student Class</td>
            </tr>
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
        if (empty($studentName) == true) {
            $students = $conn -> query ("SELECT * FROM child_account WHERE Class LIKE '%$className%'");
        } else {
            $studentNameList = explode(" ", $studentName);
            if (count($studentNameList) > 1) {
                $firstName = $studentNameList[0];
                $lastName = $studentNameList[1];
                $students = $conn -> query ("SELECT * FROM child_account WHERE First_Name LIKE '%$firstName%' OR Last_Name LIKE '%$lastName%'");
            } else {
                $students = $conn -> query ("SELECT * FROM child_account WHERE First_Name LIKE '%$studentName%' OR Last_Name LIKE '%$studentName%'");
            }
        }
        $students = $students -> fetchAll();
        for ($i=0;$i<count($students) ;$i++){
            $student = $students[$i];
            ?>
            <tr>
            <td><a href="studentprofilepage.php?student=<?php echo $student ['ChildID'] ?>"><?php echo $student ["First_Name"] ." ". $student ["Last_Name"]?></a></td>
            <td><p><?php echo $student ["Class"]?></p></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
    <?php
    include("php/footer.php");
    ?>
    </body>



</html>