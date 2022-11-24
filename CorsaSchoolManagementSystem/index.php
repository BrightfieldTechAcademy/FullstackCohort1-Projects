<?php 

require('Core/init.php');

$user = new User(new Database());
session_start();
if($_SESSION['loggedIn']){
    header('Location: /dashboard.php');
}else{
    if($_POST['loginAction']){
        $email = $_POST['email'];
        $password = htmlspecialchars($_POST['password']);
        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate e-mail address
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $data = $user->logIn($email);
            if($data){
                if(password_verify($password, $data->password)){
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['userType'] = UserType::ADMIN;
                    header('Location: /dashboard.php');
                }else{
                    die("The <b>Password</b> provided does not exist");
                }
            }else{
                die("The <b>Email</b> provided does not exist");
            }
        } else{
           die("The <b>Email</b> is not a valid email address");

        }
    }
    $template = new Template("Views/login.php");
    echo $template;
}

