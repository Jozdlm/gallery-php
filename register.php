<?php
require_once("src/AuthGuard.php");
isAnonGuard();

require_once("src/UserRepository.php");
require_once("src/AuthService.php");

$message = "";

if (isset($_POST['username']) && isset($_POST["email"]) && isset($_POST['password'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT, ['cost' => 10]);

    $user = [
        'username' => $_POST['username'],
        'email' => $email,
        'password' => $password,
    ];

    if (createUser($user)) {
        header('Location: home.php');
    } else {
        $message = "There was an error trying to create the user";
    }
}

require_once('views/RegisterPage.php');