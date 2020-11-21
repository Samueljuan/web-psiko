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
   <link rel="stylesheet" href="https://localhost/PSIKOLOGI/css/admin.css">
   <script type="text/javascript" src="https://localhost/PSIKOLOGI/js/admin.js"></script>

   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/2b2328adf6.js" crossorigin="anonymous"></script>
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
               <i class="fa-1x fas fa-bell btn" title="Notifikasi"></i>
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
         <ul class="nav flex-column ml-3">

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
            <li class="nav-item">
               <a class="nav-link text-white" href="https://localhost/PSIKOLOGI/phpAdmin/daftar.php"><i class="fas fa-comment-dots mr-2"></i>Daftar </a>
               <hr class="bg-secondary">
            </li>

         </ul>
      </div>
      
      <div class="col-md-10 p-5 pt-2">
         <h3><i class="fas fa-chart-line mr-2"></i> DASHBOARD</h3>
         <hr>
         <!-- display-4 agar angkanya lebih besar -->
         <div class="row text-white">
            <div class="card bg-info ml-3 mr-4 mt-3" style="width: 18rem;">
               <div class="card-body">
                  <div class="card-body-icon">
                     <i class="fas fa-mail-bulk mr-2"></i>
                  </div>
                  <h5 class="card-title">JUMLAH File</h5>
                  <div class="display-4">12</div>
                  <!-- pake back-end framework yang menggunakan database -->
                  <a>
                     <p class="card-text text-white">Lihat Detail
                        <a href="https://localhost/PSIKOLOGI/php/file.php">
                           <i class="fas fa-angle-double-right ml-2 text-white"></i>
                        </a>
                     </p>
                  </a>
               </div>
            </div>

            <div class="card bg-success ml-3 mr-4 mt-3" style="width: 18rem;">
               <div class="card-body">
                  <div class="card-body-icon">
                     <i class="fas fa-comment-dots mr-2"></i>
                  </div>
                  <h5 class="card-title">JUMLAH Penunjang</h5>
                  <div class="display-4">21</div>
                  <!-- pake back-end framework yang menggunakan database -->
                  <a>
                     <p class="card-text text-white">Lihat Detail<a href="#">
                           <i class="fas fa-angle-double-right ml-2 text-white"></i>
                        </a>
                     </p>
                  </a>
               </div>
            </div>

            <div class="card bg-warning ml-3 mr-4 mt-3" style="width: 18rem;">
               <div class="card-body">
                  <div class="card-body-icon">
                     <i class="fas fa-briefcase mr-2"></i>
                  </div>
                  <h5 class="card-title">JUMLAH Point</h5>
                  <div class="display-4">100</div>
                  <!-- pake back-end framework yang menggunakan database -->
                  <a>
                  <p class="card-text text-white">Lihat Detail<a href="#">
                           <i class="fas fa-angle-double-right ml-2 text-white"></i>
                  </a>
               </div>
            </div>
         </div>
         
         <div class="row mt-4">
            <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
               <div class="card-header bg-danger display-4 pt-4 pb-4">
                  <i class="fab fa-instagram"></i>
               </div>
               <div class="card-body">
                  <h5 class="card-title text-danger">INSTAGRAM</h5>
                  <a href="https://www.instagram.com" target="_blank" class="btn btn-danger">FOLLOW</a>
               </div>
            </div>

            <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
               <div class="card-header bg-info display-4 pt-4 pb-4">
                  <i class="fab fa-facebook-square"></i>
               </div>
               <div class="card-body">
                  <h5 class="card-title text-info">FACEBOOK</h5>
                  <a href="https://www.facebook.com" target="_blank" class="btn btn-info">LIKE</a>
               </div>
            </div>

            <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
               <div class="card-header bg-primary display-4 pt-4 pb-4">
                  <i class="fab fa-twitter"></i>
               </div>
               <div class="card-body">
                  <h5 class="card-title text-primary">TWITTER</h5>
                  <a href="https://www.twitter.com" target="_blank" class="btn btn-primary">FOLLOW</a>
               </div>
            </div>

         </div>
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