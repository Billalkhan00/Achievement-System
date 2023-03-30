<?php 
include_once "database.php";
// This if statement checks if all the data are empty
if (empty($_POST['first_name'])) {
    header("Location: ../signuppage.php");
    exit();
} else if (empty($_POST['second_name'])) {
    header("Location: ../signuppage.php");
    exit();
} else if (empty($_POST['email'])) {
    header("Location: ../signuppage.php");
    exit();
} else if (empty($_POST['password'])) {
    header("Location: ../signuppage.php");
    exit();
} else if (empty($_POST['date_of_birth'])) {
    header("Location: ../signuppage.php");
    exit();
} else if (empty($_POST['confirm_password'])) {
    header("Location: ../signuppage.php");
    exit();
} else {

    // This sets the variable
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $date_of_birth = $_POST['date_of_birth'];

    // This tries to find the account with the same email, if it is correct then it will take you back to the signup page
    $findUser = $conn->query("SELECT * FROM teacher_account WHERE Email_Address='$email'");
    if ($findUser->rowCount() >= 1) {
        header("Location: ../signuppage.php");
        exit();
    } else {
        // This adds the user to the database
        if ($password != $confirm_password){
            header("Location: ../signuppage.php");
            exit(); 
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $conn->query("INSERT INTO teacher_account (First_Name, Last_Name, Email_Address, Password)
        VALUES ('{$first_name}','{$second_name}','{$email}','{$password}')");
        header("Location: ../index.php");
        exit();
    }
}
