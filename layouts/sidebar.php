<?php 
 include_once '../config/db_user.php';
 include_once '../action/cek.php';
 $data=new user();
 $result=$data->show($_SESSION['id']);
 ?>
<nav class="sidebar bg-dark" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-md rounded-circle ml-0" src="/master1/PosOop/start/src/assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?= $result['name'] ;?></p>
                  <p class="designation">Administrator</p>
                </div>
              </a>
            </li> <li class="nav-item nav-category">Home</li>
            <li class="nav-item">
              <a class="nav-link"  href="/master1/PosOop/dasboard">
                <i class="f-suitcase"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
         
            <li class="nav-item nav-category">Main Menu</li>
               <li class="nav-item">
              <a class="nav-link" href="/master1/PosOop/categories">
                <i class="f-tags"></i>
                <span class="menu-title">Catagory</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/master1/PosOop/items">
                <i class="f-suitcase"></i>
                <span class="menu-title">Item</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/master1/PosOop/table">
                <i class="f-tags"></i>
                <span class="menu-title">table</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/master1/PosOop/orders">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Order</span>
              </a>
            </li>
            <li class="nav-item nav-category">Account</li>
            <li class="nav-item">
              <a class="nav-link" href="/master1/PosOop/users" >
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">User</span>
              </a>
            </li>
          </ul>
        </nav>