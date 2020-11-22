<!DOCTYPE html>
<html>
<head>
</head>

<body>
   <?php
      include_once 'header.php';
   ?>
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