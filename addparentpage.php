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
    <h1>Add Parent</h1>
    <?php
    include "php/database.php";
    // check if student id is set
    if (isset($_GET["student"])==FALSE){
        header("location:index.php");
        exit();
    }

    $studentID = $_GET["student"];

    // check if user is logged in
    if (isset($_SESSION["user"])==FALSE){
        header("location:index.php");
        exit();
    }

    // get student info
    $student = $conn -> query ("SELECT * FROM child_account WHERE ChildID = $studentID");
    $studentData = $student-> fetchObject();
    
?>
<p>Student: <?php echo $studentData -> First_Name . " " . $studentData ->  Last_Name ?></p>
<br>
<p>Create Parent Account:</p>
<form action="php/addparentscript.php" method="post">
    <input type = "hidden" name= "student" value="<?php echo $studentData-> ChildID?>">
    <input type = "text" name= "First_Name" placeholder="First Name">
    <input type = "text" name= "Last_Name" placeholder="Last_Name">
    <input type = "email" name= "Email_Address" placeholder="Email_Address">
    <input type = "password" name= "Password" placeholder="Password">
    <input type = "submit" name= "submit" value="create">

<?php
    include("php/footer.php");
    ?>
    </body>



</html>