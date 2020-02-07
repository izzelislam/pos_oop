<?php 
  include_once "../action/cek.php";
  include_once "../config/db_order.php";
  include_once "../config/db_user.php";
  include_once "../config/db_table.php";

  // select table where available
  $order=new order();
  $show=$order->show($_GET['id']);
  //table
  $table=new table();
  $result_table=$table->read();
  $status=[0,1,2,3];

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
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>POS</title>
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
                  <h4 class="page-title">Buat Order</h4>
                </div>
                 <div class="row">
                   <div class="col-md-12 grid-margin stretch-card">
                     <div class="card">
                       <div class="card-body">
                         <form class="forms-sample" method="post" action="../action/order_proses.php?action=update">
                          <input type="hidden" name="id" value="<?= $show['id'];?>">
                          <input type="hidden" name="id_user" value="<?= $show['id_user'];?>">
                          <input type="hidden" name="datee" value="<?= $show['datee'];?>">
                           <div class="form-group">
                               <div class="form-group row">
                                 <label class="col-md-12 col-form-label">Table Number</label>
                                 <div class="col-md-12">
                                   <select class="form-control" name="id_table_number">
                                     <option>-- Select Table --</option>
                                     <?php 
                                      foreach ($result_table as $order_table) {
                                      ?>
                                        <option value="<?= $order_table['id'] ;?>" <?= ($order_table['id']==$show['id_table_number']) ? 'selected="selected"' : ''; ?>><?= $order_table['table_number'] ;?></option>
                                      <?php
                                      }
                                     ?>
                                   </select>
                                 </div>
                               </div>                          
                           </div>

                           <div class="form-group">
                               <div class="form-group row">
                                 <label class="col-md-12 col-form-label">Status</label>
                                 <div class="col-md-12">
                                   <select class="form-control" name="status">
                                     <option>-- Select Status --</option>                   
                                        <?php
                                          foreach ($status as $sts) {
                                            ?>
                                            <option value="<?= $sts;?>" <?= ($sts==$show['status'])?'selected="selected"':'';?>><?= status_trx($sts);?></option>
                                          <?php
                                           } 
                                         ?>
                                   </select>
                                 </div>
                               </div>                          
                           </div>
                           
                           <button type="submit" class="btn btn-success mr-2">Update</button>
                           <a href="index.php" class="btn btn-light">Back</a>
                         </form>
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