<?php

if (isset($_POST["submit"])){

   $username= $_POST["uid"];
   $pwd= $_POST["pwd"];

   require_once 'database.php';
   require_once 'functions.inc.php';   

   if (emptyInputLogin($username, $pwd) !== false){
      header ("location: ../index.php?error=emptyinput");
      exit();
   }

   loginUser($conn, $username, $pwd); 

   // if ($_SESSION["userStatus"] == "admin"){
      // header ("location: ../index.php?error=emptyinput"); Halaman admin
   // }

}
else{
   header ("location: ../index.php");
   exit();
}
