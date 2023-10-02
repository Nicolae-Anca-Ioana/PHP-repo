<?php
include '../functions.php';
session_start();

$user = new \App\Entities\User();
$user->setFirstname($_POST['first-name']);
$user->setLastname($_POST['last-name']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);
$user->setAddress($_POST['address']);
$user->setPhone($_POST['phone']);
$user->setRole($_POST['user']);


try{
    $entityManager->persist($user);
    $entityManager->flush();
    $_SESSION['confirmed'] = 'Successfully registered';
    header('Location:index.php');

    if ($_POST['password'] !== $_POST['confirm-password'] ) {
        $_SESSION['not-confirmed'] = 'Both fields should contain the same password!';
        header('Location:registerPage.php');
    }
} catch (Exception $e ){
    $_SESSION['not-confirmed'] = 'Email already exist!';
    header('Location:registerPage.php');
}