<?php 
  include "../action/cek.php";
  include "../config/db_user.php";
  $data=new user();
  $result=$data->read();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <?php include"../layouts/links.php"; ?>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include "../layouts/navbar.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
         <?php include '../layouts/sidebar.php'; ?>
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">User</h4>
                </div>
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">User</h4>
                        <a class="btn btn-rounded btn-success mb-3" href="create_categori.php">Tambah User</a>
                    
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> No </th>
                              <th> Username </th>
                              <th> Email </th>
                              <th> Action </th>
                           </tr>
                          </thead>
                          <tbody>
                            <?php 
                              if (!empty($result)) {
                                $no=1;
                                foreach ($result as $hasil) {
                             ?>
                            <tr>
                              <td><?= $no++;?>
                              </td>
                              <td><?= $hasil['name']; ?></td>
                              <td><?= $hasil['email']; ?></td>
                              <td> 
                                <a class="btn btn-rounded btn-info" href="user_detail.php?id=<?= $hasil['id'];?>">Detail</a>
                              </td>
                            </tr>
                            <?php 
                                }
                              }
                             ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include "../layouts/footer.php"; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  <?php include "../layouts/script.php"; ?>
  </body>
</html>