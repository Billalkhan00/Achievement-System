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
    <h1>Student Profile Page</h1>
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
        <br>
        <a href="addachievementpage.php?student=<?php echo $studentID?>">Add Achievement</a>
        <br>
        <p>Achievements:</p>
        <?php
    } else {
        header("location: index.php");
        exit();
    }

    $achievements = $conn -> query("SELECT a.* FROM achievements AS a INNER JOIN child_achievements AS ca ON ca.ChildID = $studentID AND ca.AchievementID=a.AchievementID");
    $achievementsData = $achievements->fetchAll();
    
    $achievementsList = array();
    for ($i = 0; $i < count($achievementsData); $i++) {
        array_push($achievementsList, $achievementsData[$i]["AchievementID"]);
    }
    $countedList = array_count_values($achievementsList);
    $countedListKeys = array_keys($countedList);
    
    for($i = 0; $i< count($countedList); $i++) {

        $id = $countedListKeys[$i];
        $a = $conn-> query("SELECT * FROM achievements WHERE AchievementID=$id");
        if ($a->rowCount() == 1) {
            $a = $a->fetchObject();
            $reason = $a->Reason;
            $count = $countedList[$id];
        }
        ?>
        <p><?php echo $reason . " x" .$count?></p>
    <?php
}
?>

<br>
    <p>Parents Details:</p>
    <?php
    $parent = $conn -> query("SELECT p.* FROM parent_account AS p INNER JOIN parent_of_child AS pc ON p.ParentID=pc.ParentID AND pc.ChildID=$studentID");
    if ($parent-> rowCount() > 0) {
        $parentsData = $parent-> fetchAll();
    } else {
        $parentsData = array();
    }

    for($i = 0; $i < count($parentsData); $i++) {
        $parentID = $parentsData[$i]["ParentID"];
        ?>
        <p>First Name: <?php echo $parentsData[$i]["First_Name"] ?></p>
        <p>Last Name: <?php echo $parentsData[$i]["Last_Name"] ?></p>
        <p>Email: <?php echo $parentsData[$i]["Email_Address"] ?></p>
        <?php
    }
    ?>
    <br>
    <a href = "addparentpage.php?student=<?php echo $studentID ?>">Add Parent</a>
    <a href = "php/removeparentscript.php?childID=<?php echo $studentID ?>&parentID=<?php echo $parentID?>">Remove Parent</a>
<?php
    include("php/footer.php");
    ?>
    </body>



</html>