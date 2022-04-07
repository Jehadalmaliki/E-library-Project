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
      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> اضافة كتاب</h4>


<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <form class="card-body" action="/save_book" method="POST" enctype="multipart/form-data">
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">عنوان الكتاب</label>
        <input name="title" type="text" id="multicol-username" class="form-control" placeholder="" />
      </div>
      <div class="col-md-6">
          <label for="formFile" class="form-label">الصورة</label>
          <input class="form-control" name="image" type="file" id="formFile">
        </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-pages_number">رقم الصفحات</label>
        <input name="pages_number" type="number" id="multicol-pages_number" class="form-control" placeholder="" />
      </div>

      <div class="col-md-6">
        <label class="form-label" for="multicol-username">سعر الكتاب</label>
        <input name="price" type="number" id="multicol-phone" class="form-control" placeholder="" />
      </div>
      <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
      <label class="form-label" for="multicol-email">  القسم</label>
                    <select name="categories" class="form-select item-details mb-2">
                    <?php
                foreach($params['categories'] as $category){
                 ?>
    <option  value ='<?=$category['id']?>'><?=$category['name']?></option>
			       	
		         	<?php
 
                         }?>
               
                    </select>
      </div>
      <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
      <label class="form-label" for="multicol-email"> الكاتب</label>
                    <select name="authors" class="form-select item-details mb-2">
                    <?php
                foreach($params['authors'] as $author){
                 ?>
    <option  value ='<?=$author['id']?>'><?=$author['name']?></option>
			       	
		         	<?php
 
                         }?>
                    </select>
      </div>
      <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
      <label class="form-label" for="multicol-email"> الناشر</label>
                    <select name="publishers" class="form-select item-details mb-2">
                    <?php
                foreach($params['publishers'] as $publisher){
                 ?>
    <option  value ='<?=$publisher['id']?>'><?=$publisher['name']?></option>
			       	
		         	<?php
                 }?>
               
                 </select>
   </div>
   <div class="col-md-6">
     <label class="form-label" for="multicol-country">الكمية</label>
     <input name="quantity" type="number" id="multicol-country" class="form-control" placeholder="" />
   </div>	
   <div class="col-md-6">
     <label class="form-label" for="multicol-format">الصيغة</label>
     <input name="format" type="text" id="multicol-format" class="form-control" placeholder="" />
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
      <div>
          <label for="exampleFormControlTextarea1" class="form-label">الوصف</label>
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
