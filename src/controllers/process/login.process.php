<?php

if(isset($_POST['loginBtn'])){

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if(strlen($userEmail) > 0 || strlen($userPassword) > 0){

        // 1. Sanitize the email with filter_var()
        // 2. Check if the email exists in the database or not
        // 3. if the email exists and the user password matches with the password set in DB then,
        // 4. Login the user and set session varibales
        // NOTE: change the navbar accordingly 

        // This is a static email and password for development purposes
        if($userEmail === 'admin@grover.com' && $userPassword === '123123'){
            // login the user
            session_start();
            $_SESSION['currentUserEmail'] = $userEmail;
            header("Location: ../../views/templates/index.php?login=successfull");
        }else{
            header("Location: ../../views/templates/login.php?error=Email or Password did not matched");
        }


    }else{
        header("Location: ../../views/templates/login.php?error=You must fill up all the fields.");
    }



}else{
    header("Location: ../../views/templates/login.php?error=Authentication%20Error");
}


