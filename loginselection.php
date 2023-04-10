<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
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
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>