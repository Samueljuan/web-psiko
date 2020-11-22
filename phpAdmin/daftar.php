<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php
      include_once 'header.php';
   ?>

      <div class="col-md-10 p-5 pt-2">
         <h3><i class="fas fa-users mr-2"></i> DAFTAR DOSEN</h3>
         <hr>
         <?php
         if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
               echo "<div class='alert alert-danger' role='alert'>
                  Tolong diisi semua!
                </div>";
            } else if ($_GET["error"] == "invaliduid") {
               echo "<div class='alert alert-danger' role='alert'>
                  Masukkan Username yang Layak!
                </div>";
            } else if ($_GET["error"] == "invalidemail") {
               echo "<div class='alert alert-danger' role='alert'>
                  Masukkan Email yang Layak!
                </div>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
               echo "<div class='alert alert-danger' role='alert'>
                  Password Tidak Sama!
                </div>";
            } else if ($_GET["error"] == "stmtfailed") {
               echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
            } else if ($_GET["error"] == "usernametaken") {
               echo "<div class='alert alert-danger' role='alert'>
                  Username Telah Dipakai!
                </div>";
            } else if ($_GET["error"] == "none") {
               echo "<div class='alert alert-primary' role='alert'>
                  Pendaftaran Berhasil!
                </div>";
            }
         }
         ?>
         <form class="pt-3 bg-white" data-aos="zoom-in-up" method="POST" action="../includes/signup.inc.php">
            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="email"><strong>Nama</strong></label>
                  <input type="text" name="name" placeholder="Nama Lengkap..." class="form-control" required name="Nama">
               </div>
            </div>

            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="email"><strong>Email</strong></label>
                  <input type="email" name="email" placeholder="Email..." class="form-control" required name="email">
               </div>
            </div>

            <hr class="mt-5 mb-5">

            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="email"><strong>User Name</strong></label>
                  <input type="text" name="uid" placeholder="User name..." class="form-control" required name="User Name">
               </div>
            </div>

            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="email"><strong>Password</strong></label>
                  <input type="password" name="pwd" placeholder="Password..." class="form-control" required name="Password">
               </div>
            </div>

            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for="email"><strong>Repeat Password</strong></label>
                  <input type="password" name="pwdrepeat" placeholder="Repeat Password..." class="form-control" required name="Repeat Password">
               </div>
            </div>

            <div class="row form-group">
               <div class="col-md-12">
                  <input type="submit" name="submit" class="btn btn-primary py-2 px-4 text-white">
               </div>
            </div>
         </form>
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