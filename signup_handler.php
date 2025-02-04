<?php
include_once 'includes/functions.inc.php';

if (!isset($_POST['submit'])) {
    header('Location:../signup.php');
    exit();
}

$turnstile_resp = $_POST['cf-turnstile-response'];

if (handlePost($turnstile_resp) === false) {
    header('Location:../signup.php?error=captchafailed');
    exit();
} else {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $signupResult = addUser($username, $email, $password);
    if ($signupResult) {
        header('Location:signup.php?error=none');
        exit();
    }
}
