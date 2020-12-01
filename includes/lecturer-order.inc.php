<?php
if (isset($_POST["sort-submit"])){
   // $name= $_POST["name"];
   // $nik= $_POST["nik"];

   require_once "database.php";
   require_once "functions.inc.php";

   
   $sql = "SELECT * FROM users ORDER BY usersName ASC;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

}
?>