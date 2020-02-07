<?php 
  include_once "../action/cek.php";
  include_once "../config/db_order.php";
  include_once "../config/db_user.php";

  // select table where available
  $order=new order();
  $result_order_table=$order->tableactiv(1);
  // select user
  $user=new user();
  $result_user=$user->read();
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
                         <form class="forms-sample" method="post" action="../action/order_proses.php?action=create">
                           <div class="form-group">
                               <div class="form-group row">
                                 <label class="col-md-12 col-form-label">User</label>
                                 <div class="col-md-12">
                                   <select class="form-control" name="id_user">
                                     <option>-- Select User --</option>
                                     <?php 
                                      foreach ($result_user as $user_select) {
                                      ?>
                                        <option value="<?= $user_select['id'] ;?>"><?= $user_select['name'];?></option>
                                      <?php
                                      }
                                     ?>
                                     
                                   </select>
                                 </div>
                               </div>                          
                           </div>
                           <div class="form-group">
                               <div class="form-group row">
                                 <label class="col-md-12 col-form-label">Table Number</label>
                                 <div class="col-md-12">
                                   <select class="form-control" name="id_table_number">
                                     <option>-- Select Table --</option>
                                     <?php 
                                      foreach ($result_order_table as $tableactiv ) {
                                      ?>
                                        <option value="<?= $tableactiv['id'];?>"><?= $tableactiv['table_number'];?></option>
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
                                        <option value="<?= 2;?>" selected="selected">Belum Lunas</option>
                                        <option value="<?= 1;?>">Di Boking</option>
                                   </select>
                                 </div>
                               </div>                          
                           </div>
                           
                           <button type="submit" class="btn btn-success mr-2">Order</button>
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