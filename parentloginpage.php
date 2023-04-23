<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/loginselection.css">
    </head>



    <body>
    <?php
    include("php/header.php")
    ?>
     <div id="button-container">
        <a id="button" href="loginpage.php">Teacher Login</a>
        <a id="button" href="studentloginpage.php">Student Login</a>
        <a id="button" href="parentloginpage.php">Parent Login</a>
    </div>
    <form id="mainForm" action="php/parentloginscript.php" method= "POST">
        <div id="form-container">
            <h1>Parent Login</h1>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Please enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Please enter your Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot your Password?</a>
        </div>
    </form>
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>