<?php
namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["submit"])) {
    session_start();
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "Member.php");
    
    $member = new Member();
    $isLoggedIn = $member->processLogin($email, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ../assignment1/index.php");
    exit();
}