<?php

// if (isset($_POST["sort-submit"])) {

//    $name = $_POST["name"];
//    $nik = $_POST["nik"];
//    $up= $_POST["ASC"];
//    $down= $_POST["DESC"];

//    require_once 'database.php';
//    require_once 'functions.inc.php';   

//    if (isset($_POST[$up])){
//       $sql= "SELECT * FROM users ORDER BY usersName ASC;";
//       $result= executeQuerry($conn, $sql);
//    } 
//    else if (isset($_POST[$down])){
//       $sql= "SELECT * FROM users ORDER BY usersName DESC;";
//       $result= executeQuerry($conn, $sql);
//    }
//    else{
//       $sql= "SELECT * FROM users;";
//       $result= executeQuerry($conn, $sql);
//    }
// }

// function executeQuerry($conn, $query){
//    $result= mysqli_query($conn, $query);
//    return $result;
// }

// Ascending Order
// if(isset($_POST['ASC']))
// {
//     $asc_query = "SELECT * FROM users ORDER BY usersName ASC";
//     $result = executeQuery($asc_query);
// }

// // Descending Order
// elseif (isset ($_POST['DESC'])) 
//     {
//           $desc_query = "SELECT * FROM users ORDER BY usersName DESC";
//           $result = executeQuery($desc_query);
//     }
    
//     // Default Order
//  else {
//         $default_query = "SELECT * FROM users";
//         $result = executeQuery($default_query);
// }


// function executeQuery($query)
// {
//     $connect = mysqli_connect("localhost", "root", "", "loginsystem");
//     $result = mysqli_query($connect, $query);
//     return $result;
// }

// Ascending Order


// if(isset($_POST['ASC']))
// {
//     $asc_query = "SELECT * FROM users ORDER BY usersId ASC";
//     $result = executeQuery($asc_query);
// }

// // Descending Order
// elseif (isset ($_POST['DESC'])) 
//     {
//           $desc_query = "SELECT * FROM users ORDER BY usersId DESC";
//           $result = executeQuery($desc_query);
//     }
    
//     // Default Order
//  else {
//         $default_query = "SELECT * FROM users";
//         $result = executeQuery($default_query);
// }


// function executeQuery($query)
// {
//     $connect = mysqli_connect("localhost", "root", "", "loginsystem");
//     $result = mysqli_query($connect, $query);
//     return $result;
// }

if(isset($_POST["ASC"])){

   require_once 'database.php';

    $asc_query = "SELECT * FROM users ORDER BY usersId ASC";
    $result = executeQuery($asc_query);

}

function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "loginsystem");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>