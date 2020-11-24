<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
   <title>PSIKOLOGI</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- bootstrap -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

   <!-- Personal -->
   <link rel="stylesheet" href="../css/admin.css">
   <script type="text/javascript" src="../js/admin.js"></script>

   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/2b2328adf6.js" crossorigin="anonymous"></script>
</head>

<body>
      <?php
      if (isset($_SESSION["useruid"])) {
         echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">';
         echo "<a class='navbar-brand' href='#'>Selamat Datang " . $_SESSION["useruid"] . " !</a>";
         echo'<form class="form-inline my-2 my-lg-0 ml-auto">';
         echo'</form>';
         echo'<!-- tolltip: Semacam tulisan kalo di hover -->';

         echo'<div class="icon ml-4">';
         echo'<h5>';
         echo'<a href="https://www.gmail.com" target="_blank">';
               echo '<i class="fa-1x fas fa-envelope-open-text btn" title="Surat Masuk"></i>';
            echo '</a>';
            echo '<a href="https://www.gmail.com" target="_blank">';
               echo '<i class="fa-1x fas fa-bell btn" title="Notifikasi"></i>';
            echo '</a>';
            echo '<a href="../includes/logout.inc.php">';
               echo '<i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>';
            echo '</a>';
         echo '</h5>';
      echo '</div>';
   echo '</nav>';

   echo '<!-- no-gutters agar tidak ada jarak antar grid -->';
   echo '<div class="row no-gutters mt-5">';
      echo '<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">';
         echo '<ul class="nav flex-column ml-3">';

            echo '<li class="nav-item">';
               echo '<a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-chart-line mr-2"></i>Dashboard</a>';
               echo '<hr class="bg-secondary">';
            echo '</li>';
            echo '<li class="nav-item">';
               echo '<a class="nav-link active text-white" href="profile.php"><i class="far fa-id-card mr-2"></i>Profile</a>';
               echo '<hr class="bg-secondary">';
            echo '</li>';
            echo '<li class="nav-item">';
               echo '<a class="nav-link text-white" href="file.php"><i class="fas fa-mail-bulk mr-2"></i>File</a>';
               echo '<hr class="bg-secondary">';
            echo '</li>';
            echo '<li class="nav-item">';
               echo '<a class="nav-link text-white" href="penunjang.php"><i class="fas fa-comment-dots mr-2"></i>Penunjang lainnya </a>';
               echo '<hr class="bg-secondary">';
            echo '</li>';

         echo '</ul>';
      echo '</div>';
      }
      else{
         header("location: ../index.php");
      }
      ?>
      <p></p>
      <script src="js/jquery.min.js"></script>
      <script src="js/js/bootstrap.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="js/main.js"></script>
</body>

</html>

