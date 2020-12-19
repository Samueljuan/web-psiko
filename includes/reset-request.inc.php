<?php

if (isset($_POST["reset-request-submit"])){

   $selector= bin2hex(random_bytes(8));
   $token= random_bytes(32);

   $url= "www.gmail.com/forgottenpwd/create-new-password.php?";


} else {
   header("Location: ../index.php");
}