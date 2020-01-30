<?php 
  include_once "../action/cek.php";
  include_once "../config/db_user.php";
  $id=$_GET['id'];
  $data=new user();
  $result=$data->show($id);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <?php include_once"../layouts/links.php"; ?>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include_once "../layouts/navbar.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
         <?php include_once '../layouts/sidebar.php'; ?>
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">User Detail</h4>
                </div>
                <div class="col-lg-6 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body">
                      <table class="table table-striped">
                      
                          <tr>
                            <td colspan="2" class="text-center" class="py-1">
                              <img src="http://localhost/master1/PosOop/start/src/assets/images/faces-clipart/pic-1.png" alt="image" /> </td>
                          </tr>
                          <tr>
                            <td>User Name</td>
                            <td><?= $result['name']; ?></td>
                          </tr>
                          <tr>
                            <td>email</td>
                            <td><?= $result['email']; ?></td>
                          </tr>
                      </table>
                      <div class="row mt-5 ">
                        <div class="col-md-6">
                          <a class="btn btn-rounded btn-success" href="index.php">Back</a>
                        </div>
                        <div class="col-md-6  pl-5">
                          <a class="btn btn-rounded btn-info" href="">Edit</a>
                          <a class="btn btn-rounded btn-danger" href="../action/user_proses.php?action=delete&id=<?= $result['id']; ?>">Delete</a>
                        </div>
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
          <?php include_once "../layouts/footer.php"; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  <?php include_once "../layouts/script.php"; ?>
  </body>
</html>