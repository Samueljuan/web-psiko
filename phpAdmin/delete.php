<!DOCTYPE html>
<html>

<head>

</head>

<body>
   <?php
   include_once 'header.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i> HAPUS DOSEN</h3>
      <hr>
      <?php
      if (isset($_GET["error"])) {
         if ($_GET["error"] == "invalidnik") {
            echo "<div class='alert alert-danger' role='alert'>
                  NIK Salah
                </div>";
         }else if ($_GET["error"] == "stmtfailed") {
            echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
         }
      }
      ?>
      
      <form class="pt-3 bg-white" data-aos="zoom-in-up" method="POST" action="../includes/delete.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for="email"><strong>NIK</strong></label>
               <input type="text" name="nik" placeholder="NIK" class="form-control" required>
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <input type="submit" name="submit" class="btn btn-primary py-2 px-4 text-white">
            </div>
         </div>
      </form>

</body>

</html>