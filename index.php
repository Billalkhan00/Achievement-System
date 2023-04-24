<html>

    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
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
                        <h1>High Achievers the place to reward students</h1>
                        <p>The new way for students to find a competitive approach in learning with the use of achievements. Allow students to stay interested in learning with the use of features such as leader boards and rankings. Students its time to aim for the top!</p>
                    </div>
                    <div id="rightContainer">
                        <img src="images/trophy.png" width="500px" height="500px">
                    </div>
                </div>
                <div id="bottomContainerm">
                    <div id="loginContainer">
                        <?php
                        // check if user is logged in
                        if (isset($_SESSION["user"]) == FALSE) {
                            ?>
                            <a href="loginselection.php">Login</a>
                            <a href="signuppage.php">Signup</a>
                        <?php
                        }
                        ?>
                    </div>
                    <div id="topAchiever" style="margin-right:25px">
                        <div id="titleAchiever">
                            <p>Top Achiever</p>
                        </div>
                        <div id="imageAchiever">
                            <img src="images/rsz_pexels-katerina-holmes-5905497.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("php/footer.php")
        ?>
    </body>

</html>