<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/studenthomepage.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
    <h1>Student Homepage</h1>
    <?php
    include "php/database.php";
    if (isset($_SESSION["user"])==FALSE){
        header("location: studentloginpage.php");
        exit();
    }
    $userID = $_SESSION ["user"] -> ChildID; 
    $user = $_SESSION ["user"];
    ?>
    <p>Name: <?php echo $user ->First_Name . " " . $user -> Last_Name ?></p>
    <p>Email: <?php echo $user ->Email_Address?> </p>
    <p>Class: <?php echo $user ->Class?> </p>
    <p>Date of Birth: <?php echo $user ->Date_Of_Birth?> </p>
    <br>
    <p>Achievements:</p>

    <?php
    $achievements = $conn -> query("SELECT a.* FROM achievements AS a INNER JOIN child_achievements AS ca ON ca.ChildID = $userID AND ca.AchievementID=a.AchievementID");
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
    $parent = $conn -> query("SELECT p.* FROM parent_account AS p INNER JOIN parent_of_child AS pc ON p.ParentID=pc.ParentID AND pc.ChildID=$userID");
    if ($parent-> rowCount() > 0) {
        $parentsData = $parent-> fetchAll();
    } else {
        $parentsData = array();
    }

    for($i = 0; $i < count($parentsData); $i++) {
        ?>
        <p>First Name: <?php echo $parentsData[$i]["First_Name"] ?></p>
        <p>Last Name: <?php echo $parentsData[$i]["Last_Name"] ?></p>
        <p>Email: <?php echo $parentsData[$i]["Email_Address"] ?></p>
        <?php
    }

    include("php/database.php");

        $childrenData = $conn -> query("SELECT * FROM child_account");
        $children = $childrenData->fetchAll();

        $achievementData = array();
        for ($i = 0; $i< count($children); $i++) {
            $childID = $children[$i]["ChildID"];
            $childAchievements = $conn -> query("SELECT ChildID, count(AchievementID) AS total FROM child_achievements WHERE ChildID=$childID HAVING COUNT(AchievementID) >= 1");
            
            if ($childAchievements -> rowCount() > 0) {
                $childAchievementData = $childAchievements -> fetchObject();
                $achievementData[$childID] = $childAchievementData->total;          
            } else {
                $achievementData[$childID] = 0;
            }
        }

        asort($achievementData);
        $achievementDataKeys = array_keys($achievementData);

        $start = 0;
        for ($i = 0; $i < count($achievementData); $i++) {
            if ($achievementDataKeys[$i] == $userID) {
                $start = $i;
                break;
            }
        }


        ?>

        <h2>Leaderboard</h2>
        <table>
            <tr>
                <td>Position</td>
                <td>Name</td>
                <td>Class</td>
                <td>Total Achievements</td>
            </tr>
        <?php

        $counter = 0;
            for ($i = $start; $i >-1; $i--) {
                $counter+=1;
                if ($counter > 10) {
                    break;
                }
                $childID=$achievementDataKeys[$i];

                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");

                if ($childData-> rowCount()==1 ) {
                    $child = $childData-> fetchObject();
                    $childName = $child-> First_Name;
                    $childClass = $child-> Class;
                    $childCount = $achievementData[$childID];
                }
                ?>
                <tr>
                    <td><?php echo $start-$i+1 ?></td>
                    <td><?php echo $childName ?></td>
                    <td><?php echo $childClass ?></td>
                    <td><?php echo $childCount ?></td>
                </tr>

                <?php
            }
        

        

        ?>
        
        </table>
        <?php

    include("php/footer.php");
    ?>
    </body>



</html>