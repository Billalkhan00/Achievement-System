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

    $achievements = $conn -> query ("SELECT * FROM achievements");
    $achievementsData = $achievements -> fetchAll();

    ?>
    <form method="POST" action="php/giveachievementscript.php">
    <select name="achievementID" id="achievementID">
    <?php
    for ($i = 0; $i < count($achievementsData); $i++) {
        $a = $achievementsData[$i];
        $aID = $a ["AchievementID"];	
        $reason = $a ["Reason"];	

    ?>
        <option value="<?php echo $aID ?>"><?php echo $reason ?></option>
        <?php
    }
    ?>
    </select>
    <input type="hidden" name="studentID" value="<?php echo $studentID ?>">
    <input type="submit" value="add">
    </form>

    <?php
    include("php/footer.php");
    ?>
    </body>



</html>