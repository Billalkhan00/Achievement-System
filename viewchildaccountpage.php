<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/viewchildaccountpage.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
    <div id="mainContainer">
        <div id="infoContainer">
            <h1 id="title">Child Account</h1>
            <?php
            include "php/database.php";
            if (isset($_SESSION["user"])==FALSE){
                header("location: studentloginpage.php");
                exit();
            }
            
            $userID = $_SESSION ["user"] -> ParentID; 
            $childaccount = $conn -> query("SELECT c.* FROM child_account AS c INNER JOIN parent_of_child AS pc ON c.ChildID=pc.ChildID AND pc.ParentID=$userID");

            if ($childaccount-> rowCount() >0) {
                $childData = $childaccount ->fetchObject();
                ?>
                <h2>Personal Information</h2>
                <p>Name: <?php echo $childData ->First_Name . " " . $childData -> Last_Name ?></p>
                <p>Email: <?php echo $childData ->Email_Address?> </p>
                <p>Class: <?php echo $childData ->Class?> </p>
                <p>Date of Birth: <?php echo $childData ->Date_Of_Birth?> </p>
                <br>
                <h2>Achievements:</h2>

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
                <h2>Parents Details:</h2>
                <p>First Name: <?php echo $_SESSION["user"]->First_Name ?></p>
                <p>Last Name: <?php echo $_SESSION["user"]->Last_Name ?></p>
                <p>Email: <?php echo $_SESSION["user"]->Email_Address ?></p>
                <?php

                $achievementData = array();
                $childID = $childData->ChildID;
                $childAchievements = $conn -> query("SELECT ChildID, count(AchievementID) AS total FROM child_achievements WHERE ChildID=$childID HAVING COUNT(AchievementID) >= 1");
                
                if ($childAchievements -> rowCount() > 0) {
                    $childAchievementData = $childAchievements -> fetchObject();
                    $achievementData[$childID] = $childAchievementData->total;          
                } else {
                    $achievementData[$childID] = 0;
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
                <br>
                <h2>Leaderboard</h2>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                <?php
                $counter = 0;
                    for ($i = $start; $i >-1; $i--) {
                        $counter+=1;
                        if ($counter > 1) {
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
                            <!-- <td><?php echo count($achievementData)-$start-$i ?></td> -->
                            <td><?php echo $childName ?></td>
                            <td><?php echo $childClass ?></td>
                            <td><?php echo $childCount ?></td>
                        </tr>

                        <?php
                    }
                

                

                ?>
                
                </table>
                <?php
            } else {
                ?>
                <p>No child linked</p>
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