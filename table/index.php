<?php 
  include_once "../action/cek.php";
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
                  <h4 class="page-title">Table</h4>
                </div>
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Table</h4>
                        <a class="btn btn-rounded btn-success mb-3" href="create_table.php">Tambah Table</a>
                        <?php 
                          include_once "../config/db_table.php";
                            $read=new table();
                            $table=$read->read();
                         ?>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> No </th>
                              <th> Table Number </th>
                              <th> Seat </th>
                              <th> Status </th>
                              <th> Action </th>
                           </tr>
                          </thead>
                          <tbody>
                            <?php 
                              function status_seat($status)
                              {
                                if ($status==1) 
                                {
                                  return "<div class='badge badge-success'>Availalble</div>";
                                }
                                else
                                {
                                  return "<div class='badge badge-danger'>Un Availalble</div>";
                                }
                              }
                              if (!empty($table)) {
                                $no=1;
                                foreach ($table as $hasil_table) {
                             ?>
                            <tr>
                              <td><?= $no++;?>
                              </td>
                              <td><?= $hasil_table['table_number']; ?></td>
                              <td><?= $hasil_table['seat']; ?>. Orang</td>
                              <td><?= status_seat($hasil_table['status']); ?></td>
                              <td> 
                                <a class="btn btn-rounded btn-info" href="edit_table.php?id=<?= $hasil_table['id'];?>">edit</a>
                                <a class="btn btn-rounded btn-danger delete" href="../action/table_proses.php?action=delete&id=<?= $hasil_table['id'];?> ">Delete</a>
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