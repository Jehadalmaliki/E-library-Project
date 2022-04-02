<!DOCTYPE html>






<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:12 GMT -->
<head>
   <?php include_once ('include/head.php');?>
</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">







      <!-- Menu -->

      <?php include("aside.php");?>
      <!-- / Menu -->



      <!-- Layout container -->
      <div class="layout-page">





        <!-- Navbar -->




        <?php include_once ('include/nav.php');?>


        <!-- / Navbar -->
 <!-- Content wrapper -->
 <div class="content-wrapper">

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">


  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> عرض الصلاحيات</h4>

 


  <!-- Multi Column with Form Separator -->
  <!-- Bordered Table -->
<div class="card">
<div class="card-body">
<div class="table-responsive text-nowrap">
<table class="table table-bordered">
<thead>
<tr>
  <th>الصلاحيه</th>

  <th>الحالة</th>
  
  <th>العمليات</th>
</tr>
</thead>
<tbody>
      
<?php foreach($params as $role){?>
          <tr>
            
            <td><?= $role['name'];?></td>
        
            <td>
            <?php if($role['is_active']==1) {?>    
            <span class="badge bg-label-success me-1">مفعل</span>
            <?php }
            else {?>
             <span class="badge bg-label-danger me-1">موقف</span>
            <?php } ?>
            </td>
            <td>
            <a href="/edit_role/<?php echo $role['id'];?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <button type="button" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
              </button>
              
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
          </div>


          <!-- Footer -->
          <?php include_once ('include/footer.php');?>
          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->





  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <?php include_once ('include/script.php');?>

</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->

</html>