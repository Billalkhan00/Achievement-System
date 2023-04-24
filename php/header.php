<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carlito&display=swap" rel="stylesheet">
<header>
    <div id = title-container>
        <div id = title-inner-container>
            <img src="images/trophy.png" width = "50px" height = "50px">
            <h1>High Achievers</h1>
        </div>
     </div>
    <div id = "header-buttons">
        <?php
        session_start();
        // check if user is logged in
        if (isset ($_SESSION['user'])){
            if ($_SESSION['user']->accountType=='parent'){
                // if user is a parent
                ?>
                <a href="index.php">Home</a>
                <a href="aboutpage.php">About</a>
                <a href="achievementspage.php">Achievements</a>
                <a href="contactpage.php">Contact Us</a>
                <a href="viewchildaccountpage.php">View Child Account</a>
                <a href="php/logout.php">Logout</a>
            <?php
            }else if ($_SESSION['user']->accountType=='teacher'){
                // if user is a teacher
                ?>
                <a href="index.php">Home</a>
                <a href="aboutpage.php">About</a>
                <a href="achievementspage.php">Achievements</a>
                <a href="leaderboardpage.php">Leaderboard</a>
                <a href="contactpage.php">Contact Us</a>
                <a href="teacherdashboard.php">Dashboard</a>
                <a href="php/logout.php">Logout</a>
                <?php
            }else if ($_SESSION['user']->accountType=='student'){
                // if user is a student
                ?>
                <a href="index.php">Home</a>
                <a href="aboutpage.php">About</a>
                <a href="achievementspage.php">Achievements</a>
                <a href="leaderboardpage.php">Leaderboard</a>
                <a href="contactpage.php">Contact Us</a>
                <a href="studenthomepage.php">Student Homepage</a>
                <a href="php/logout.php">Logout</a>  
                <?php 
            }
        }  else {
            // if the user is not logged in
            ?>
            <a href="index.php">Home</a>
            <a href="aboutpage.php">About</a>
            <a href="achievementspage.php">Achievements</a>
            <a href="contactpage.php">Contact Us</a>
            <a href="signuppage.php">Signup</a>
            <a href="loginselection.php">Login</a>
            <?php
        }
    ?>
    </div>
</header>