<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/studentprofilepage.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
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
        <h1 id="title">Student Profile Page</h1>
        <div id="mainContainer">
            <div id="infoContainer">
                <h2>Student Details:</h2>
                <p>First Name: <?php echo $studentname ?></p>
                <p>Last Name: <?php echo $studentlastname ?></p>
                <p>Email: <?php echo $studentemailaddress ?></p>
                <p>Class: <?php echo $studentclass ?></p>
                <p>Date of Birth: <?php echo $studentdateofbirth ?></p>
                <br>
                <h2>Add Achievement</h2>
                <?php

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


                <br>
                <h2>Achievements:</h2>
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
            <h2>Parents Details:</h2>
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

            if ($parent-> rowCount() > 0) {
                ?>
                <a href = "php/removeparentscript.php?childID=<?php echo $studentID ?>&parentID=<?php echo $parentID?>">Remove Parent</a>
                <?php
            } else {
                ?>
                <p>Add Parent Account:</p>
                <form action="php/addparentscript.php" method="post">
                    <input type = "hidden" name= "student" value="<?php echo $studentID?>">
                    <input type = "text" name= "First_Name" placeholder="First Name">
                    <input type = "text" name= "Last_Name" placeholder="Last_Name">
                    <input type = "email" name= "Email_Address" placeholder="Email_Address">
                    <input type = "password" name= "Password" placeholder="Password">
                    <input type = "submit" name= "submit" value="create">
                </form>
                <?php
                
            }
            ?>
        </div>
    </div>
<?php
    include("php/footer.php");
    ?>
    </body>



</html>