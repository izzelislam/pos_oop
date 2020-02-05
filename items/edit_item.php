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
                  <h4 class="page-title">Edit Item</h4>
                </div>
                 <div class="row">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <form class="form-sample" method="POST"  action="../action/item_proses.php?action=update">
                          <?php 
                            include_once "../config/db_item.php";
                            include_once "../config/db_categori.php";
                            // item
                            $orek=new item();
                            $hasil=$orek->show($_GET['id']);
                            // categori
                            $categori=new categori();
                            $result_categori=$categori->read();
                           ?>
                           <input type="hidden" name="id" value="<?= $hasil['id'];?>">
                          <p class="card-description"> Info Product </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Select Categori</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="id_categori">
                                    <option>-- select categori --</option>
                                      <?php 
                                        foreach ($result_categori as $cat ) {  
                                      ?>
                                    <option value="<?= $cat['id'] ;?>" <?= ($cat['id']==$hasil['id_categori']) ? 'selected="selected"' : ''; ?>>
                                      <?= $cat['categori_name'] ;?> 
                                    </option>
                                      <?php 
                                        }
                                      ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Img Item</label>
                                <div class="col-sm-9">
                                  <div class="input-group col-sm-12">
                                    <div class="form-group row">
                                      <div class="col-sm-9">
                                        <div class="form-group">
                                          <input type="text" name="img" class="form-control" id="exampleInputPassword4" placeholder="Item Name" value="<?= $hasil['img'];?>">
                                        </div>
                                      </div>
                                    </div>

                               <!-- 
                                     <div class="input-group-prepend">
                                     </div>
                                     <div class="custom-file">
                                       <input type="file" name="img" class="custom-file-input" id="inputGroupFile01">
                                       <label class="custom-file-label" for="inputGroupFile01">Choose img</label>
                                     </div> -->
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Item Name</label>
                                <div class="col-sm-9">
                                  <div class="form-group">
                                    <input type="text" name="name_item" class="form-control" id="exampleInputPassword4" placeholder="Item Name" value="<?= $hasil['name_item'] ;?>">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                         <p class="card-description"> Descripsi Product </p>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Price</label>
                               <div class="col-sm-9">
                                 <div class="form-group">
                                   <input type="number" name="price" class="form-control" id="exampleInputPassword4" placeholder="Price" value="<?= $hasil['price'];?>">
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Status</label>
                               <div class="col-sm-4">
                                 <div class="form-radio"> 
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" <?php echo ($hasil['status']==1) ? 'checked="checked"' : ''; ?> > Activ </label>
                                 </div>
                               </div>
                               <div class="col-sm-5">
                                 <div class="form-radio">
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" <?= ($hasil['status']==0) ? 'checked="checked"' : ''; ?>> Non Activ </label>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Stok</label>
                               <div class="col-sm-9">
                                 <div class="form-group">
                                   <input type="number" name="stok" class="form-control" id="exampleInputPassword4" placeholder="Stok" value="<?= $hasil['stok'];?>">
                                 </div>
                               </div>
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