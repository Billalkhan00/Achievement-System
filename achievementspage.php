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

                        $sql = "SELECT * FROM achievements";
                        $achievementsData = $conn -> query($sql);
                        $achievements = $achievementsData-> fetchAll();

                        for ($i = 0; $i < count($achievements); $i++){ 
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