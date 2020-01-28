<?php 
  include "../action/cek.php";
  include "../config/db_categori.php";
  $id=$_GET['id'];
  $categori=new categori();
  if (isset($id)) 
  {
    $result=$categori->show($id);
  }
  else
  {
    echo "gagal update";
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
                  <h4 class="page-title">Edit Categori</h4>
                </div>
                 <div class="row">
                   <div class="col-md-12 grid-margin stretch-card">
                     <div class="card">
                       <div class="card-body">
                         <form class="forms-sample" method="post" action="../action/categori_proses.php?action=update">
                           <div class="form-group">
                            <input type="hidden" name="id" value="<?= $result['id']; ?>">
                             <label for="categori_name">Categori Name</label>
                             <input type="text" class="form-control" id="categori_name" placeholder="Categori Name" name="categori_name" value="<?= $result['categori_name'];?>">
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