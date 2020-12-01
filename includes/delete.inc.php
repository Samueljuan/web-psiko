<?php

if (isset($_POST['submit'])) {
   $nik = $_POST['nik'];

   require_once 'database.php';
   require_once 'functions.inc.php';

   if (nikExist($conn, $nik) !== false) {
      header("location: ../phpAdmin/delete.php?error=invalidnik");
   } 
   delete($conn, $nik);
}
else {
   header("location: ../phpAdmin/delete.php");
}