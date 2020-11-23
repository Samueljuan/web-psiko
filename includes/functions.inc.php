<?php

function emptyInputSignup($name, $email, $username, $nik, $pwd, $pwdRepeat){
   $result;
   if (empty($name) || empty ($email)|| empty ($username)|| empty ($nik)|| empty ($pwd)|| empty ($pwdRepeat) ){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function invalidUid($username){
   $result;
   if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function invalidEmail($email){
   $result;
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function pwdMatch($pwd, $pwdRepeat){
   $result;
   if ($pwd !== $pwdRepeat){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function uidExists($conn, $username, $email){
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../phpAdmin/daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $username, $email); 
   mysqli_stmt_execute($stmt);

   $resultData= mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt);
}

function uidExistsAdmin($conn, $username, $email){
   $sql = "SELECT * FROM admins WHERE adminUid = ? OR adminEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../phpAdmin/daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $username, $email); 
   mysqli_stmt_execute($stmt);

   $resultData= mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $pwd){
   $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../phpAdmin/daftar.php?error=stmtfailed");
      exit();
   }

   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../phpAdmin/daftar.php?error=none");
   exit();
}

function createAdmin($conn, $name, $email, $nik, $username, $pwd){
   $sql = "INSERT INTO admins(adminName, adminEmail, adminId, adminUid, adminPwd) VALUES (?, ?, ?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../phpAdmin/daftar-admin.php?error=stmtfailed");
      exit();
   }

   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $nik, $username, $hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../phpAdmin/daftar-admin.php?error=none");
   exit();
}

function emptyInputLogin($username, $pwd){
   $result;
   if (empty ($username)|| empty ($pwd)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function loginUser($conn, $username, $pwd){
   $uidExists = uidExists($conn, $username, $username);

   if ($uidExists === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   }

   $pwdHashed= $uidExists["usersPwd"];
   $checkPwd = password_verify($pwd, $pwdHashed);

   if ($checkPwd === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   } 
   else if ($checkPwd === true){
      session_start();
      $_SESSION["userid"] = $uidExists["usersId"];
      $_SESSION["useruid"] = $uidExists["usersUid"];
      header ("location: ../phpUsers/dashboard.php");
      exit();
   }
}

function loginAdmin($conn, $username, $pwd){
   $uidExistsAdmin = uidExistsAdmin($conn, $username, $username);

   if ($uidExistsAdmin === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   }

   $pwdHashed= $uidExistsAdmin["adminPwd"];
   $checkPwd = password_verify($pwd, $pwdHashed);

   if ($checkPwd === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   } 
   else if ($checkPwd === true){
      session_start();
      $_SESSION["adminid"] = $uidExistsAdmin["adminId"];
      $_SESSION["adminuid"] = $uidExistsAdmin["adminUid"];
      header ("location: ../phpAdmin/dashboard.php");
      exit();
   }
}