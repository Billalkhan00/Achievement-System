<?php
include_once "database.php";
// This checks if the email and password is entered if it isnt then it will send the user back to the page
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    header("Location: ../parentloginpage.php?error=no submit");
    exit();
}
// This checks if the password and email is empty
if(empty($password)) {
    header("Location: ../parentloginpage.php?error=empty password");
    exit();
} else if (empty($email)) {
header("Location: ../parentloginpage.php?error=Empty email");
exit();
} else {
    $SQLquery = $conn->query("SELECT * FROM parent_account WHERE Email_Address='$email'");
    if ($SQLquery->rowCount() == 1) {
        $user = $SQLquery->fetchObject();
        // This will check if the password entered is correct, if correct it will log in the user otherwise it will give an error
        if(password_verify($password, $user->Password)) {
            session_start();
            $user -> accountType = 'parent';
            $_SESSION['user'] = $user;
            header("Location: ../index.php");
            exit();
        }else{
            //These show if the password entered is incorrect if it is, it will take the user back to the log in page.
            header("Location: ../parentloginpage.php?error=incorrect password");
            exit();
        }
     }else {
        //These show if the email entered is incorrect if it is, it will take the user back to the log in page.
        header("Location: ../parentloginpage.php?error=incorrect email" . $SQLquery->rowCount());
        exit();
    }
}