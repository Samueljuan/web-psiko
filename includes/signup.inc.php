<?php

if (isset($_POST["submit"])) {


   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["uid"];
   $nik= $_POST["nik"]; 
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'database.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($name, $email, $username, $nik, $pwd, $pwdRepeat) !== false) {
      header("location: ../phpAdmin/daftar.php?error=emptyinput");
      exit();
   }

   if (invalidUid($username) !== false) {
      header("location: ../phpAdmin/daftar.php?error=invaliduid");
      exit();
   }
   if (invalidEmail($email) !== false) {
      header("location: ../phpAdmin/daftar.php?error=invalidemail");
      exit();
   }

   if (pwdMatch($pwd, $pwdRepeat) !== false) {
      header("location: ../phpAdmin/daftar.php?error=passwordsdontmatch");
      exit();
   }

   if (uidExists($conn, $username, $email) !== false) {
      header("location: ../phpAdmin/daftar.php?error=usernametaken");
      exit();
   }

   createUser($conn, $name, $email, $username, $pwd);
} else {
   header("location: ../phpAdmin/daftar.php");
}
