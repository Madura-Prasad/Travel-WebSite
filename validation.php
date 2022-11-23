<?php

session_start();
include("db.php");
$errors=[];

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
    if($user_data=$conn->query($sql)){
        if($user_data->num_rows > 0){
            $_SESSION['user_logged']=true;
            header("Location: home.php");
            exit;
            //success login
        }else{
            $errors[]="Recheck Email & Password";
        }
    }else{
        $errors[]="Loging Failed";
    }
}
include("join.php");
?>

