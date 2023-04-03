<header>
    <h1>High Achievers</h1>
    <div>
        <a href="index.php">Home</a>
        <a href="#">About</a>
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
                <a href="#">Dashboard</a>
                <a href="php/logout.php">Logout</a>
                <?php
            }else if ($_SESSION['user']->accountType=='student'){
                ?>
                <a href="#">Student Homepage</a>
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