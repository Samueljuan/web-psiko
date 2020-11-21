<!DOCTYPE html>
<html>
<head>
   <title>PSIKOLOGI</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </meta>

   <!-- bootstrap -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
               <a class="nav-link active text-white" href="https://localhost/PSIKOLOGI/phpAdmin/dashboard.php"><i class="fas fa-chart-line mr-2"></i>Dashboard</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link active text-white" href="https://localhost/PSIKOLOGI/phpAdmin/profile.php"><i class="fas fa-chart-line mr-2"></i>Profile</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="https://localhost/PSIKOLOGI/phpAdmin/file.php"><i class="fas fa-mail-bulk mr-2"></i>File</a>
               <hr class="bg-secondary">
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="https://localhost/PSIKOLOGI/phpAdmin/penunjang.php"><i class="fas fa-comment-dots mr-2"></i>Penunjang lainnya </a>
               <hr class="bg-secondary">
            </li>
         </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
         <h3><i class="fas fa-mail-bulk mr-2"></i>DAFTAR FILE</h3>
         <hr>
         <h3>INPUT FILE</h3>
         <form action="uploadfile.php" method="POST" enctype="multipart/form-data">
            <div>
               BERKAS: <input type="file" name="file">
            </div>

            <div class="col-md-6 mb-3 mb-md-0">
               <label class="text-black" for="fname"><strong>Nama Depan</strong></label>
               <input type="text" id="fname" class="form-control" required name="depan">
            </div>

            <div class="col-md-12">
               <label class="text-black" for="message"><strong>Pesan</strong></label>
               <textarea name="pesan" id="message" cols="30" rows="7" class="form-control" placeholder="Tentang File..." required></textarea>
            </div>

            <div class="col-md-12 mt-3">
               <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary py-2 px-4 text-white">
            </div>
         </form>


         <H3>DAFTAR FILE</H3>
         <table class="table table-striped table-bordered">
            <thead>
               <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA FILE</th>
                  <th scope="col">NAMA FILE</th>
                  <th scope="col">NAMA FILE</th>
                  <th scope="col">NAMA FILE</th>
                  <th colspan="2" scope="col">AKSI</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $row["depan"]; ?></td>
                     <td><?= $row["belakang"]; ?></td>
                     <td><?= $row["email"]; ?></td>
                     <td><?= $row["pesan"]; ?></td>
                     <td><i class="fas fa-download bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Download"></i></td>
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