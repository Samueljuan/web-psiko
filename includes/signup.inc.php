<?php

if (isset($_POST["submit"])) {


   $name = $_POST["name"];
   $email = $_POST["email"];
   $nik = $_POST["nik"];
   // LOGIN SYSTEM
   $status = $_POST["signup-as"];
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'database.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($name, $email, $nik, $status, $username, $pwd, $pwdRepeat) !== false) {
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

   createUser($conn, $name, $email, $nik, $status, $username, $pwd);
} else {
   header("location: ../phpAdmin/daftar.php");
}
