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

      <form class="pt-3 bg-white" method="POST" action="../includes/signup.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama</strong></label>
               <input type="text" name="name" placeholder="Nama Lengkap..." class="form-control" required name="Nama">
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Email</strong></label>
               <input type="email" name="email" placeholder="Email..." class="form-control" required name="email">
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>NIK</strong></label>
               <input type="text" name="nik" placeholder="NIK..." class="form-control" required name="nik">
            </div>
         </div>

         <hr class="mt-5 mb-5">

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Daftar Sebagai</strong></label>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="signup-as" id="" value="dosen">
                  <label class="form-check-label" for="inlineRadio1">DOSEN</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="signup-as" id="" value="admin">
                  <label class="form-check-label" for="inlineRadio2">ADMIN</label>
               </div>
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>User Name</strong></label>
               <input type="text" name="uid" placeholder="User name..." class="form-control" required name="User Name">
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Password</strong></label>
               <input type="password" name="pwd" placeholder="Password..." class="form-control" required name="Password">
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Repeat Password</strong></label>
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