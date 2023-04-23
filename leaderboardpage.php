<html>

    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/leaderboard.css">
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

        ?>

        <h1 id="title">Leaderboard page </h1>
        <div id="mainContainer">
            <div id="leaderboardContainer">
                <div id="buttonContainer">
                    <button onclick="location.href='leaderboardpage.php?sort=most'">Most Achievements</button>
                    <button onclick="location.href='leaderboardpage.php?sort=least'">Least Achievements</button>
                </div>
                <table>
                    <tr>
                        <td>Position</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Total Achievements</td>
                    </tr>
                <?php


                if (isset($_GET["sort"])) {
                    $sortType = $_GET["sort"];
                
                    if ($sortType == "most") {
                        $counter = 0;
                        for ($i = count($achievementDataKeys)-1; $i >-1 ; $i--) {
                            $childID=$achievementDataKeys[$i];
                            $counter += 1;

                            $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                
                            if ($childData-> rowCount()==1 ) {
                                $child = $childData-> fetchObject();
                                $childName = $child-> First_Name;
                                $childClass = $child-> Class;
                                if($counter == 1) {
                                    $childCount = $achievementData[$childID] . "🥇";
                                } else if ($counter == 2) {
                                    $childCount = $achievementData[$childID] . "🥈";
                                } else if ($counter == 3) {
                                    $childCount = $achievementData[$childID] . "🥉";
                                } else {
                                    $childCount = $achievementData[$childID] . "⭐";
                                }
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
                    } else if ($sortType == "least") {
                        $counter = 0;
                        for ($i = 0; $i < count($achievementDataKeys) ; $i++) {
                            $childID=$achievementDataKeys[$i];
                            $counter += 1;

                            $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
                
                            if ($childData-> rowCount()==1 ) {
                                $child = $childData-> fetchObject();
                                $childName = $child-> First_Name;
                                $childClass = $child-> Class;
                                if($counter == 1) {
                                    $childCount = $achievementData[$childID] . "🥇";
                                } else if ($counter == 2) {
                                    $childCount = $achievementData[$childID] . "🥈";
                                } else if ($counter == 3) {
                                    $childCount = $achievementData[$childID] . "🥉";
                                } else {
                                    $childCount = $achievementData[$childID] . "⭐";
                                }
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
                    } else if ($sortType == "class") {

                    }

                } else {
                    $counter = 0;
                    for ($i = count($achievementDataKeys)-1; $i >-1 ; $i--) {
                        $childID=$achievementDataKeys[$i];
                        $counter+=1;
                        $childData = $conn -> query("SELECT * FROM child_account WHERE ChildID=$childID");
            
                        if ($childData-> rowCount()==1 ) {
                            $child = $childData-> fetchObject();
                            $childName = $child-> First_Name;
                            $childClass = $child-> Class;
                            if($counter == 1) {
                                $childCount = $achievementData[$childID] . "🥇";
                            } else if ($counter == 2) {
                                $childCount = $achievementData[$childID] . "🥈";
                            } else if ($counter == 3) {
                                $childCount = $achievementData[$childID] . "🥉";
                            } else {
                                $childCount = $achievementData[$childID] . "⭐";
                            }
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