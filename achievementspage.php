<html>

    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="css/achievementspage.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>

    <body>
        <?php
        include("php/header.php")
        ?>
        <div id="mainContainer">
            <div id="innerContainer">
                <div id="topContainer">
                    <div id="leftContainer">
                        <h1>Achievements</h1>
                        <?php
                        include "php/database.php";

                        // get all achievements
                        $sql = "SELECT * FROM achievements";
                        $achievementsData = $conn -> query($sql);
                        $achievements = $achievementsData-> fetchAll();

                        // if teacher is logged in then show add achievement box
                        if (isset($_SESSION["user"])) {
                            if ($_SESSION["user"]->accountType=='teacher') {
                                ?>
                                <form action="php/addnewachievement.php" method="post">
                                    <h2>Add Achievement</h2>
                                    <input type="text" name="reason" placeholder="Enter reason">
                                    <input type="submit" value="Add">
                                </form>
                                <?php
                            }
                        }

                        // display all achievements
                        for ($i = count($achievements)-1; $i >-1; $i--){ 
                        ?>
                            <p><?php echo $achievements[$i]["Reason"] ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div id="rightContainer">
                        <img src="images/trophy.png" width="500px" height="500px">
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("php/footer.php")
        ?>
    </body>

</html>