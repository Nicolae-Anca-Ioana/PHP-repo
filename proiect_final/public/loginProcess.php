<?php
include '../functions.php';
use App\Entities\User;
$email= $_POST['email'];
if (is_null($entityManager->getRepository(User::class)->findOneBy(['email'=>$email]))) {
    $_SESSION['login']= "User not found";
    header('Location:loginPage.php');
    return;
}
$user = $entityManager->getRepository(User::class)->findOneBy(['email'=>$email]);


if (($_POST['password']) !== $user->getPassword()){
    $_SESSION['login'] = "Incorect password!";
    header('Location:loginPage.php');
    return;
}
if ($user == $user){
    $_SESSION['user']=$user;
    $_SESSION['loggedin'] = "Welcome back!";
    header('Location:index.php');
    return;
}





//if (is_null($entityManager->getRepository(User::class)->findOneBy(['email'=>$email]))) {
//    $_SESSION['login']= "User not found";
//    header('Location:loginPage.php');
//    return;
//}
//$user = $entityManager->getRepository(User::class)->findOneBy(['email'=>$email]);
//$userType= $entityManager->getRepository(User::class)->findBy(['role']);
//var_dump($userType);
//
//if (($_POST['password']) !== $user->getPassword()){
//    $_SESSION['login'] = "Incorect password!";
//    header('Location:loginPage.php');
//    return;
//}
//if ($user == $user){
//    $_SESSION['user']=$user;
//    $_SESSION['loggedin'] = "Welcome back!";
//    header('Location:index.php');
//    return;
//}
//
//if ($userType === $userType) {
//        $_SERSSION["loggedin"] = "Welcome back boss!";
//    header("Location:pageAdminMenu.php");
//        return;
//}
//


