<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/teacherdashboard.css">
    </head>



    <body>
    <?php
    include("php/header.php");

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

        //
        $achievementData2 = array();
        for ($i = 0; $i< count($children); $i++) {
            $childID = $children[$i]["ChildID"];
            $childAchievements2 = $conn -> query("SELECT ChildID, count(AchievementID) AS total FROM child_achievements WHERE ChildID=$childID HAVING COUNT(AchievementID) >= 1");
            
            if ($childAchievements2 -> rowCount() > 0) {
                $childAchievementData2 = $childAchievements2 -> fetchObject();
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6KH") {
                    $achievementData2[$childID] = $childAchievementData2->total;          
                }
            } else {
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6KH") {
                    $achievementData2[$childID] = 0;
                }
            }
        }

        asort($achievementData2);
        $achievementDataKeys2 = array_keys($achievementData2);
       
       
        $achievementData3 = array();
        for ($i = 0; $i< count($children); $i++) {
            $childID = $children[$i]["ChildID"];
            $childAchievements3 = $conn -> query("SELECT ChildID, count(AchievementID) AS total FROM child_achievements WHERE ChildID=$childID HAVING COUNT(AchievementID) >= 1");
            
            if ($childAchievements3 -> rowCount() > 0) {
                $childAchievementData3 = $childAchievements3 -> fetchObject();
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6RS") {
                    $achievementData3[$childID] = $childAchievementData3->total;          
                }
            } else {
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6RS") {
                    $achievementData3[$childID] = 0;
                }
            }
        }

        asort($achievementData3);
        $achievementDataKeys3 = array_keys($achievementData3);

       
       
        $achievementData4 = array();
        for ($i = 0; $i< count($children); $i++) {
            $childID = $children[$i]["ChildID"];
            $childAchievements4 = $conn -> query("SELECT ChildID, count(AchievementID) AS total FROM child_achievements WHERE ChildID=$childID HAVING COUNT(AchievementID) >= 1");
            
            if ($childAchievements4 -> rowCount() > 0) {
                $childAchievementData4 = $childAchievements4 -> fetchObject();
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6BD") {
                    $achievementData4[$childID] = $childAchievementData4->total;          
                }
            } else {
                $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                $childDataObject = $childData-> fetchObject();
                $class = $childDataObject->Class;
                if ($class == "6BD") {
                    $achievementData4[$childID] = 0;
                }
            }
        }

        asort($achievementData4);
        $achievementDataKeys4 = array_keys($achievementData4);

       

        ?>
        <h1>Teacher Dashboard</h1>
        <form action="studentsearchresults.php" method = "get" >
            <input type="search" name = "name" placeholder = "Please enter Students Name">
            <input type="search" name = "class" placeholder = "Please enter Students Class">
            <input type="submit" name = "submit" value = "search">
        </form>
        <br>
        <div id="table-container">
            <div id="left-table">
            <h2>Most Achievements</h2>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                <?php

        $counter = 0;
                for ($i = count($achievementDataKeys)-1; $i >-1 ; $i--) {
                    $counter+= 1;
                    if ($counter > 20) {
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
                        <td><?php echo count($achievementData)-$i ?></td>
                        <td><?php echo $childName ?></td>
                        <td><?php echo $childClass ?></td>
                        <td><?php echo $childCount ?></td>
                    </tr>

                    <?php
                }
                ?>
                </table>
            </div>
            <div id="right-table">
                <h2>Least Achievements</h2>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                
                <?php

                $counter = 0;
                for ($i = 0; $i < count($achievementDataKeys) ; $i++) {
                    $counter+= 1;
                    if ($counter > 20) {
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
                        <td><?php echo $i+1 ?></td>
                        <td><?php echo $childName ?></td>
                        <td><?php echo $childClass ?></td>
                        <td><?php echo $childCount ?></td>
                    </tr>

                    <?php
                }
                ?>
                </table>
            </div>
            <div id="right-table">
                <h2>Class 6KH</h2>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                
                <?php

                $counter = 0;
                for ($i = count($achievementDataKeys2)-1; $i > -1; $i--) {
                    $counter+= 1;
                    if ($counter > 20) {
                        break;
                    }
                    $childID=$achievementDataKeys2[$i];

                    $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");

                    if ($childData-> rowCount()==1 ) {
                        $child = $childData-> fetchObject();
                        $childName = $child-> First_Name;
                        $childClass = $child-> Class;
                        $childCount = $achievementData2[$childID];
                    }
                    ?>
                    <tr>
                        <td><?php echo count($achievementDataKeys2)-$i ?></td>
                        <td><?php echo $childName ?></td>
                        <td><?php echo $childClass ?></td>
                        <td><?php echo $childCount ?></td>
                    </tr>

                    <?php
                }
                ?>
                </table>
            </div>
            <div id="right-table">
                <h2>Class 6RS</h2>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                
                <?php

                $counter = 0;
                for ($i = count($achievementDataKeys3)-1; $i > -1; $i--) {
                    $counter+= 1;
                    if ($counter > 20) {
                        break;
                    }
                    $childID=$achievementDataKeys3[$i];

                    $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");

                    if ($childData-> rowCount()==1 ) {
                        $child = $childData-> fetchObject();
                        $childName = $child-> First_Name;
                        $childClass = $child-> Class;
                        $childCount = $achievementData3[$childID];
                    }
                    ?>
                    <tr>
                        <td><?php echo count($achievementDataKeys3)-$i ?></td>
                        <td><?php echo $childName ?></td>
                        <td><?php echo $childClass ?></td>
                        <td><?php echo $childCount ?></td>
                    </tr>

                    <?php
                }
                ?>
                </table>
            </div>
            <div id="right-table">
                <h2>Class 6BD</h2>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                
                <?php

                $counter = 0;
                for ($i = count($achievementDataKeys4)-1; $i > -1; $i--) {
                    $counter+= 1;
                    if ($counter > 20) {
                        break;
                    }
                    $childID=$achievementDataKeys4[$i];

                    $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");

                    if ($childData-> rowCount()==1 ) {
                        $child = $childData-> fetchObject();
                        $childName = $child-> First_Name;
                        $childClass = $child-> Class;
                        $childCount = $achievementData4[$childID];
                    }
                    ?>
                    <tr>
                        <td><?php echo count($achievementDataKeys4)-$i ?></td>
                        <td><?php echo $childName ?></td>
                        <td><?php echo $childClass ?></td>
                        <td><?php echo $childCount ?></td>
                    </tr>

                    <?php
                }
                ?>
                </table>
            </div>
        </div>
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>