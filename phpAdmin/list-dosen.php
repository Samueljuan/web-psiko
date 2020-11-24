<!DOCTYPE html>
<html>

<head>
</head>

<body>

   <?php
   include_once 'header.php';
   include_once '../includes/database.php'
   ?>
   <div class="col-md-10 p-5 pt-2">
      <nav class="sticky-top">
         <h3><i class="fas fa-chalkboard-teacher mr-2"></i>LIST DOSEN</h3>
      </nav>
      <hr>

      <form action="../includes/lecturer-order.inc.php" method="$_POST">
         <!-- <div class="container mt-5 mb-5">
            <div class="row justify-content-around">
               <select class="custom-select col-4">
                  <optgroup label="Urutkan Dosen Berdasar">
                     <option name="name">Nama</option>
                     <option name="nik">NIK</option>
                  </optgroup>
               </select>
               <select class="custom-select col-4">
                  <optgroup label="Naik/ Turun">
                     <option name="ASC" value="Ascending">A-Z / 0-9</option>
                     <option name="DESC" value="Descending">Z-A / 9-0</option>
                  </optgroup>
               </select>




               <button type="button" class="btn btn-primary" name="sort-submit">Urutkan</button>
            </div>
         </div> -->
         <input type="submit" name="ASC" value="Ascending"><br><br>
         <input type="submit" name="DESC" value="Descending"><br><br>

         
         <table class="table table-hover text-center">
            <thead>
               <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA</th>
                  <th scope="col"> NIK</th>
                  <th scope="col">EMAIL</th>
                  <th colspan="2" scope="col">AKSI</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $i = 1;
               $sql = "SELECT * FROM users;";
               $result = mysqli_query($conn, $sql);
               $resultCheck = mysqli_num_rows($result);

               if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                     <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row["usersName"]; ?></td>
                        <td><?= $row['usersId']; ?></td>
                        <td><?= $row["usersEmail"]; ?></td>
                        <td><i class="fas fa-download bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Download File"></i></td>
                     </tr>
               <?php }
               }
               $i++;
               ?>
            </tbody>
         </table>
      </form>
   </div>
</body>

</html>