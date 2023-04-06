<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>



    <body>
    <?php
    include("php/header.php")
    ?>
    <h1>Teacher Dashboard</h1>
    <form action="studentsearchresults.php" method = "get" >
        <input type="search" name = "name" placeholder = "Please enter Students Name">
        <input type="search" name = "class" placeholder = "Please enter Students Class">
        <input type="submit" name = "submit" value = "search">
    </form>
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>