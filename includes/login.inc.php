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

   loginAdmin($conn, $username, $pwd);
   loginUser($conn, $username, $pwd); 


}
else{
   header ("location: ../index.php");
   exit();
}
