<?php 
  include_once "../action/cek.php";
  include_once "../config/db_categori.php";
  include_once "../config/db_item.php";
  include_once "../config/db_order_detail.php";
  // categori
  $categori=new categori();
  $data_categori=$categori->read();
  /*order detail*/
  $order_detail=new order_detail();
  
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
                  <h4 class="page-title">Order Item</h4>
                </div>
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Order</h4>                    
                        <div class="row">
                          <div class="col-md-12">
                            <form method="POST" action="index.php">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Categori</label>
                                <div class="col-sm-12">
                                  <select class="form-control" name="id_categori">
                                    <option>-- select categori --</option>
                                    <?php 
                                      
                                      foreach ($data_categori as $hasil_categori) {
                                     ?>
                                    <option value="<?= $hasil_categori['id'];?>"><?= $hasil_categori['categori_name'];?></option>
                                    <?php 

                                      }
                                     ?>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-success mx-2 my-2">Show Item</button>
                          <a href="index.php" class="btn btn-light my-2">Back</a>
                        </form>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- order item -->
            <div class="row page-title-header">
              <div class="col-12">          
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Item</h4>                    
                        <div class="row">
                          <?php 
                            if (isset($_POST['id_categori'])) 
                            {
                              $data_order_detail=$order_detail->showbycate($_POST['id_categori']);
                              if ($data_order_detail != null) 
                              {                   
                              foreach ($data_order_detail as $hasil_order_detail) 
                              {
                                ?>
                                  <div class="col-lg-4 my-3">
                                    <div class="card" style="width: 18rem;">
                                      <div class="card-body">
                                        <h5 class="card-title"> Categori :<?= $hasil_order_detail['id_categori'];?></h5>
                                        <h5 class="card-title"><?= $hasil_order_detail['img'];?></h5>
                                        <h5 class="card-title">Nama Item :<?= $hasil_order_detail['name_item'];?></h5>
                                        <h5 class="card-title">Harga satuan:<?= $hasil_order_detail['price'];?></h5>
                                        <h5 class="card-title">stok:<?= $hasil_order_detail['stok'];?></h5>
                                        <button class="add btn btn-success" data-id="1" data-nama="Cabe" data-qty="1" data-price="1000"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Add</button>
                                      </div>
                                    </div>
                                  </div>
                                <?php
                                  }

                                }
                                else
                                  {
                                    echo  
                                    '<script>
                                        setTimeout(function() {
                                            swal({
                                                title: "Caution",
                                                icon: "warning",
                                                text: "Item Does Not Exit!"

                                              
                                            }, function() {
                                                window.location = "index.php";
                                            });
                                        }, 1000);
                                    </script>';
                                  }
                              }  
                           ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
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