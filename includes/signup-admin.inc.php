<?php

if (isset($_POST ["submit"])){


   $name = $_POST["name"];
   $email = $_POST["email"];
   $nik = $_POST["nik"];
   // LOGIN SYSTEM
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'database.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($name, $email, $nik, $username, $pwd, $pwdRepeat) !== false){
      header ("location: ../phpAdmin/daftar-admin.php?error=emptyinput");
      exit();
   }

   if (invalidUid($username) !== false){
      header ("location: ../phpAdmin/daftar-admin.php?error=invaliduid");
      exit();
   }
   if (invalidEmail($email) !== false){
      header ("location: ../phpAdmin/daftar-admin.php?error=invalidemail");
      exit();
   }

   // LOGIN SYSTEM
   if (pwdMatch($pwd, $pwdRepeat) !== false){
      header ("location: ../phpAdmin/daftar-admin.php?error=passwordsdontmatch");
      exit();
   }

   if (uidExistsAdmin($conn, $username, $email) !== false){
      header ("location: ../phpAdmin/daftar-admin.php?error=usernametaken");
      exit();
   }

   createAdmin($conn, $name, $email, $nik, $username, $pwd);
}
else{
   header("location: ../phpAdmin/daftar-admin.php");
}