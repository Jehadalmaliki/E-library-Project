<php >

<head>
<?php include_once('include/headlib.php')?>
</head>

<body>
    <div class="grid-container">
      
        <header class="item1">
         <?php include_once('include/headerlib.php')?>
         </header>
         <!-- header end -->
         <!-- section sing up start -->
         <?php include_once('include/login.php')?>
         <!-- section sing up end -->
         <!-- log in  start-->
    
       <?php include_once('include/singup.php')?>
         <!--  log in end-->
         <!-- section home start homestyle.css -->
         <section class="item3">
         <?php include_once('include/slider.php')?>
          
         
          
              </section>
         
          <!--home end  -->
          <!-- catagory section start /catagorystyle.css -->
          <section class="item4">
            <div class="services" id="services">
              <h1 >
                  تصفح حسب القسم
              </h1>
             <div class="box-container">
          
             <?php foreach($params['categories']  as $category){?>
              <?php if ($category['is_active']== 1){?>
                  <div class="box">
                    <a href="/catogrypag" ><img src="images/<?= $category['image'];?>"></a>
                      <h3><?= $category['name'];?></h3>
                  </div>
              
                  <?php } 
                  
               
               } ?>
               
                      
                  </div>
                
          
            </div>
            <div class="Advertisment">
              <div class="photos">
                <img src="assets1/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 700px">
                <img src="assets1/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 200px">
                <img src="assets1/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 100px">
                <img src="assets1/img/sliderImgs/slider_img.webp"  height=" 200px;" width=" 800px">
              </div>
            </div>

          </section>

          <!-- catagory section end -->
          <!-- packages section start  packagestyle.css -->
        <section class="item2">
          <div class="packages" id="packages">
          
              <h1 >العروض  الحالية </h1>
            <div class="box-container">
          
                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img class="add-cart"src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo"> </span>
                      </div>
                  </div>
          
                  <div class="box">
                    <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img class="add-cart" src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo1"></span>
                        </div>
                  </div>
                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img  class="add-cart" src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo2"></span>
                        </div>
                  </div>

                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img class="add-cart" src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo3"></span>
                        </div>
                  </div>
                  <div class="box">
                    <a href="/detailspag"><img src="img/b4.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img class="add-cart" src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo4"></span>
                        </div>
                  </div>
              
              </div>
              <a href="/catogrypag" id="go">عرض الكل</a>
          </div>
         
         
               

                
            
          
            <a href="/catogrypag" id="go">عرض الكل</a>
        </div>
        <div class="packages" id="packages">
          
          <h1 >الكتب الدينية</h1>
        <div class="box-container">
      
              <div class="box">
                <img src="assets1/img/b2.jpg">
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
      
              <div class="box">
                <img src="assets1/img/b3.jpg">
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
              <div class="box">
                <img src="assets1/img/book.jpg">
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>

              <div class="box">
                <img src="assets1/img/b5.jpg">
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
              <div class="box">
                <img src="assets1/img/b4.jpg">
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
          
          </div>
          <a href="/catogrypag" id="go">عرض الكل</a>
      </div>
      <div class="packages" id="packages">
          
        <h1 >الروايات</h1>
      <div class="box-container">
    
            <div class="box">
              <img src="img/b2.jpg">
                <div class="content">
                    <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
    
            <div class="box">
              <img src="assets1/img/b3.jpg">
                <div class="content">
                    <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            <div class="box">
              <img src="assets1/img/book.jpg">
                <div class="content">
                    <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>

            <div class="box">
              <img src="assets1/img/b5.jpg">
                <div class="content">
                    <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            <div class="box">
              <img src="assets1/img/b4.jpg">
                <div class="content">
                    <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            
        
        </div>
        <a href="/catogrypag" id="go">عرض الكل</a>
    </div>

        </section>
        
        
       <?php include_once('include/footerlib.php')?>
       <?php include_once('include/scriptlib.php')?>
   
    
         
    
</body>

</php>