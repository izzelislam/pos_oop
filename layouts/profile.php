<?php 
 include_once '../config/db_user.php';
 include_once '../action/cek.php';
 $data=new user();
 $result=$data->show($_SESSION['id']);
 ?>
<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="http://localhost/master1/PosOop/start/src/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="http://localhost/master1/PosOop/start/src/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?= $result['name'] ;?></p>
                  <p class="font-weight-light text-muted mb-0"><?= $result['email'] ;?></p>
                </div>
                <a href="/master1/PosOop/users/user_detail.php?id=<?= $result['id'];?>" class="dropdown-item">My Profile<i class="dropdown-item-icon ti-power-off"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a href="/master1/PosOop/action/logout.php" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
</li>