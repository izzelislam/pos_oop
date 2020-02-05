<?php 
  include_once "../action/cek.php";
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
                  <h4 class="page-title">Tambah Table</h4>
                </div>
                 <div class="row">
                   <div class="col-md-12 grid-margin stretch-card">
                     <div class="card">
                       <div class="card-body">
                         <form class="forms-sample" method="post" action="../action/table_proses.php?action=create">
                           <div class="form-group">
                             <label for="categori_name">Table Number</label>
                             <input type="text" class="form-control" id="categori_name" placeholder="Table Number" name="table_number">
                           </div>
                           <div class="form-group">
                             <label for="categori_name">Seat</label>
                             <input type="text" class="form-control" id="categori_name" placeholder="Seat Name" name="seat">
                           </div>
                           <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Status</label>
                             <div class="col-sm-4">
                               <div class="form-radio">
                                 <label class="form-check-label">
                                   <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked> Available </label>
                               </div>
                             </div>
                             <div class="col-sm-5">
                               <div class="form-radio">
                                 <label class="form-check-label">
                                   <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0"> UnAvailable </label>
                               </div>
                             </div>
                           </div>
                           <button type="submit" class="btn btn-success mr-2">Submit</button>
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