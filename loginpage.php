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
    <form action="php/loginscript.php" method= "POST">
        <h1>Login</h1>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Please enter your email">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Please enter your Password">
        <a href="#">Signup</a>
        <input type="submit" name="submit" value="Login">
        <a href="#">Forgot your Password?</a>
    </form>
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>