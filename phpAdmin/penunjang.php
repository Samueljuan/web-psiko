<?php
$conn = mysqli_connect("localhost", "root", "", "admin");

$result = mysqli_query($conn, "SELECT * FROM komentar");
?>


<!DOCTYPE html>
<html>

<head>
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
   <?php
      include_once 'header.php';
   ?>
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