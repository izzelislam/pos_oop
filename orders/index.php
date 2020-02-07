<?php 
  include_once "../action/cek.php";
  include_once "../config/db_order.php";
  include_once "../config/db_table.php";

  $dat=new order();
  $res=$dat->read();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pos</title>
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
                  <h4 class="page-title">Order</h4>
                </div>
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Order</h4>
                        <a class="btn btn-rounded btn-success mb-3" href="create_order.php">Buat Order</a>
                    
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> No </th>
                              <th> User </th>
                              <th> Table Number </th>
                              <th> status </th>
                              <th > Action </th>
                           </tr>
                          </thead>
                          <tbody>
                            <?php 
                              function status_trx($trx)
                              {
                                if ($trx == 0) 
                                {
                                  return "<div class='badge btn-danger'>Cancel</div>";
                                }
                                else if ($trx == 1) 
                                {
                                  return "<div class='badge btn-warning'>Terboking</div>";
                                }
                                 else if ($trx == 2) 
                                {
                                  return "<div class='badge btn-primary'>Belum Lunas</div>";
                                }
                                 else if ($trx == 3) 
                                {
                                  return "<div class='badge btn-success'>Lunas</div>";
                                }
                              }
                              if (!empty($res)) {
                                $no=1;
                                foreach ($res as $hasil) {
                             ?>
                            <tr>
                              <td><?= $no++;?>
                              </td>
                              <td><?= $dat->userorder($hasil['id_user']); ?></td>
                              <td><?= $dat->usertable($hasil['id_table_number']); ?></td>
                              <td><?= status_trx($hasil['status']); ?></td>
                              <td> 
                                <a class="btn btn-rounded btn-primary" href="../action/order_proses.php?id=<?= $hasil['id'];?>&action=bayar">Bayar</a>
                                <a class="btn btn-rounded btn-warning" href="user_detail.php?id=<?= $hasil['id'];?>">Detail</a>
                                <a class="btn btn-rounded btn-info" href="edit_order.php?id=<?= $hasil['id'];?>">Edit</a>
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