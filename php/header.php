<header>
    <div id = title-container>
        <div id = title-inner-container>
            <img src="images/trophy.png" width = "50px" height = "50px">
            <h1>High Achievers</h1>
        </div>
     </div>
    <div id = "header-buttons">
        <a href="index.php">Home</a>
        <a href="aboutpage.php">About</a>
        <a href="#">Achievements</a>
        <a href="#">Leaderboard</a>
        <?php
        session_start();
        if (isset ($_SESSION['user'])){
            if ($_SESSION['user']->accountType=='parent'){
                ?>
                <a href="#">View Child Account</a>
                <a href="php/logout.php">Logout</a>
            <?php
            }else if ($_SESSION['user']->accountType=='teacher'){
                ?>
                <a href="teacherdashboard.php">Dashboard</a>
                <a href="php/logout.php">Logout</a>
                <?php
            }else if ($_SESSION['user']->accountType=='student'){
                ?>
                <a href="studenthomepage.php">Student Homepage</a>
                <a href="php/logout.php">Logout</a>  
                <?php 
            }
        }  else {
            ?>
            <a href="signuppage.php">Signup</a>
            <a href="loginselection.php">Login</a>
            <?php
        }
    ?>
    </div>
</header>