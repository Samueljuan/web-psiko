<!DOCTYPE html>
<html>

<head>
</head>

<body>




   <?php
   include_once 'header.php';
   include_once '../includes/database.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-mail-bulk mr-2"></i>DAFTAR FILE</h3>
      <hr>
      <h3>INPUT FILE</h3>
      <br>
      <form action="../includes/uploadfile.php" method="POST" enctype="multipart/form-data">
         <!-- Input File -->
         <div class="input-group mb-3 col-md-12">
            <div class="input-group-prepend">
               <span class="input-group-text" id="inputGroupFileAddon01">File</span>
            </div>

            <div class="custom-file">
               <input type="file" class="custom-file-input" id="inputFile">
               <label class="custom-file-label" for="inputFile">Choose file</label>
            </div>
         </div>

         <!-- Pesan -->
         <div class="col-md-12">
            <label class="text-black" for="message"><strong>Pesan</strong></label>
            <textarea name="pesan" id="message" cols="30" rows="7" class="form-control" placeholder="Tentang File..." required></textarea>
         </div>

         <!-- Date -->
         <div class="col-md-12 mt-4">
            <input type="date" class="form-control" name="date">
         </div>

         <div class="col-md-12 mt-5">
            <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary py-2 px-4 text-white">
         </div>

      </form>

      <hr class="mt-3 mb-3">
      <H3>SEARCH FILE</H3>
      <input type="text" name="search" placeholder="Search">
      <button type="submit" name="submit-search "></button>

      <hr class="mt-3 mb-3">
      <H3>DAFTAR FILE</H3>
      <br>
      <div class="col-md-12">
         <table class="table table-striped table-bordered col-md-12">
            <thead>
               <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA FILE</th>
                  <th scope="col">KOMENTAR</th>
                  <th scope="col">TANGGAL</th>
                  <th colspan="2" scope="col">AKSI</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $i = 1;
               $sql = "SELECT * FROM files;";
               $result = mysqli_query($conn, $sql);
               $resultCheck = mysqli_num_rows($result);

               if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                     <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row["filesName"]; ?></td>
                        <td><?= $row["filesMessage"]; ?></td>
                        <td><?= $row["date"]; ?></td>
                        <td><i class="fas fa-download bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Download"></i></td>
                        <td>
                           <i class="far fa-trash-alt bg-danger p-2 text-white rounded btn" data-toggle="tooltip" title="Hapus" onclick="konfirmasik()">
                           </i></td>
                     </tr>
               <?php }
               }
               $i++;
               ?>
            </tbody>
         </table>
      </div>
   </div>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/scrollax.min.js"></script>
   <script src="js/main.js"></script>
   <!-- show-name-input -->
   <script>
      $('#inputFile').on('change', function() {
         //get the file name
         var fileName = $(this).val();
         //replace the "Choose a file" label
         $(this).next('.custom-file-label').html(fileName);
      })
   </script>
</body>

</html>