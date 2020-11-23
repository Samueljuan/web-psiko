<!DOCTYPE html>
<html>

<head>

</head>

<body>
   <?php
   include_once 'header.php';
   ?>


   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i> HAPUS ADMIN</h3>
      <hr>
      <form class="pt-3 bg-white" data-aos="zoom-in-up" method="POST" action="../includes/signup.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for="email"><strong>Nama</strong></label>
               <input type="text" name="name" placeholder="Nama Lengkap..." class="form-control" required name="Nama">
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