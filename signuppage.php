<html>



    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Billal Khan">
        <meta name="Description" content="High Achievers website for School children">
        <title>High Achievers</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>



    <body>
    <?php
    include("php/header.php")
    ?>
    <form action="php/signupscript.php" method= "POST">
        <div id="form-container">
            <h1>Teacher Signup</h1>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" placeholder="Please enter your Name">
            
            <label for="second_name">Second Name</label>
            <input type="text" name="second_name" placeholder="Please enter your Second Name">
            
            <label for="date_of_birth">Date Of Birth</label>
            <input type="date" name="date_of_birth" placeholder="Please enter your Date of Birth">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Please enter your email">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Please enter your password">

            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Please confirm your password">



            <input type="submit" name="submit" value="Signup">
            <a href="#">Login</a>
        </div>
    </form>
    <?php
    include("php/footer.php")
    ?>
    </body>



</html>