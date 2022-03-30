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

      <?php include_once('aside.php');?>
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
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> </h4>

<div class="card mb-4">
 
  <form class="card-body" action="/save_orders" method="POST">
    <h6>تفاصيل الطلب </h6>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">رقم المستخدم </label>
        <input name="user_id" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username"> الحاله</label>
        <input name="city_id" type="" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">الكميه </label>
        <input name="phone" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">  التخفيضات</label>
        <input name="address" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">   net_total</label>
        <input name="lat" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">  طرق الدفع</label>
        <input name="lng" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-username"> رقم العنوان</label>
        <input name="lng" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
    
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">user activation</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">حفظ</button>
      <button type="reset" class="btn btn-label-secondary">الالغاء</button>
    </div>
  </form>
</div>


<!-- Multi Column with Form Separator -->

          <!-- / Content -->

          
          

<!-- Footer -->
<?php include_once ('include/footer.php');?>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
  yout wrapper -->

  
  
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <?php include_once ('include/script.php');?>
</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->
</html>
