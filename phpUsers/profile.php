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
      <h3><i class="fas fa-chart-line mr-2"></i> Profile</h3>
      <hr>
      <!-- display-4 agar angkanya lebih besar -->
      <div class="row text-white">
         <?php
         $ses = "useruid";
         if (isset($_SESSION[$ses])) {
            echo "<p style='color: black'> Hello" . $_SESSION[$ses] . "</p>";
         }
         ?>
         <table class="table">
            <?php
            $sql = "SELECT usersId, usersEmail, usersName FROM users WHERE usersId='useruid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                     <th>NIK: </th>
                     <td><?= $row["usersId"]; ?></td>
                  </tr>
                  <tr>
                     <th>Nama: </th>
                     <td><?= $row["usersName"]; ?></td>
                  </tr>
                  <tr>
                     <th>Email: </th>
                     <td><?= $row["usersEmail"]; ?></td>
                  </tr>
            <?php }
            } else {
               echo "0 results";
            }

            exit();
            ?>
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
</body>

</html>