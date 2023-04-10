<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>



    <body>
    <?php
    include("php/header.php");
    ?>
    <h1>Student Homepage</h1>
    <?php
    include "php/database.php";
    if (isset($_SESSION["user"])==FALSE){
        header("location: studentloginpage.php");
        exit();
    }
    $userID = $_SESSION ["user"] -> ChildID; 
    $user = $_SESSION ["user"];
    ?>
    <p> <?php echo $user ->First_Name . " " . $user -> Last_Name ?></p>
    <p> <?php echo $user ->Email_Address?> </p>
    <p> <?php echo $user ->Class?> </p>
    <p> <?php echo $user ->Date_Of_Birth?> </p>
    <?php
    include("php/footer.php");
    ?>
    </body>



</html>