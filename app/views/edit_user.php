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

       


<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> تعديل المستخدم</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" action="/save_user" method="POST">
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم المستخدم</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">الايميل</label>
        <div class="input-group input-group-merge">
          <input  name="email"type="text" id="multicol-email" class="form-control" placeholder="" aria-label="" aria-describedby="multicol-email2" />
          <span class="input-group-text" id="multicol-email2">@example.com</span>
        </div>
      </div>
      <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
      <label class="form-label" for="multicol-email"> الصلاحية</label>
                    <select class="form-select item-details mb-2">
                      <option selected disabled>Select Item</option>
                      <option value="App Design">App Design</option>
                      <option value="App Customization">App Customization</option>
                      <option value="ABC Template">ABC Template</option>
                      <option value="App Development">App Development</option>
                    </select>
      </div>
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-password">رقم السر</label>
          <div class="input-group input-group-merge">
            <input  name="password" type="password" id="multicol-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
            <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">الحالة</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label"> مفعل </span>
            </label>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>





            
          </div>
          <!-- / Content -->

          

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
  <!-- endbuild -->

  
  
</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->
</html>