<?php
$conn = mysqli_connect("localhost", "root", "", "admin");

$result = mysqli_query($conn, "SELECT * FROM komentar");
?>


<!DOCTYPE html>
<html>

<head>
   <title>FAMELICOSE</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description" content="Famelicose">
   <meta name="description" content="Kuliner Semarang">
   <meta name="author" content="Samuel">
   </meta>
   <meta name="author" content="Juan">
   </meta>
   <meta name="author" content="Pranoto">
   </meta>

   <!-- bootstrap -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://famelicose.000webhostapp.com/css/admin.css">
   <script src="https://kit.fontawesome.com/2b2328adf6.js" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://famelicose.000webhostapp.com/js/admin.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
   

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN</a>
      <form class="form-inline my-2 my-lg-0 ml-auto">
      </form>
      <!-- tolltip: Semacam tulisan kalo di hover -->
      <div class="icon ml-4">
         <h5>
            <a href="https://www.gmail.com" target="_blank">
               <i class="fa-1x fas fa-envelope-open-text btn" title="Surat Masuk"></i>
            </a>
            <a href="https://www.gmail.com" target="_blank">
               <i class="fa-1x fas fa-bell btn" title="Notivikasi"></i>
            </a>
            <a href="https://localhost/PSIKOLOGI/index.php">
               <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
            </a>
         </h5>
      </div>
   </nav>
   <!-- no-gutters agar tidak ada jarak antar grid -->
   <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
         <ul class="nav flex-column ml-3 mb-5">
         <li class="nav-item">
               <a class="nav-link active text-white" href="https://localhost/PSIKOLOGI/phpUsers/dashboard.php"><i class="fas fa-chart-line mr-2"></i>Dashboard</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link active text-white" href="https://localhost/PSIKOLOGI/phpUsers/profile.php"><i class="fas fa-chart-line mr-2"></i>Profile</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="https://localhost/PSIKOLOGI/phpUsers/file.php"><i class="fas fa-mail-bulk mr-2"></i>File</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="https://localhost/PSIKOLOGI/phpUsers/penunjang.php"><i class="fas fa-comment-dots mr-2"></i>Penunjang lainnya </a>
               <hr class="bg-secondary">
            </li>
         </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
         <nav class="sticky-top">
            <h3><i class="fas fa-reply mr-2"></i>PENUNJANG LAINNYA</h3>
         </nav>
         <hr>
         <table class="table table-hover text-center">
            <thead>
               <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">ASAL</th>
                  <th scope="col">KOMENTAR</th>
                  <th colspan="2" scope="col">AKSI</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $row["nama"]; ?></td>
                     <td><?= $row["email"]; ?></td>
                     <td><?= $row["asal"]; ?></td>
                     <td><?= $row["komentar"]; ?></td>
                     <td><i class="fas fa-reply bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Balas"></i></td>
                     <td>
                        <i class="far fa-trash-alt bg-danger p-2 text-white rounded btn" data-toggle="tooltip" title="Hapus" onclick="konfirmasik()">
                        </i></td>
                  </tr>
                  <?php $i++; ?>
               <?php endwhile; ?>
            </tbody>
         </table>
      </div>
   </div>
   <script src="js/jquery.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/scrollax.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>