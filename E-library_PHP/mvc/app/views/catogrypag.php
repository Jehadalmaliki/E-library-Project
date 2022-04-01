<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
     <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="assets1/css/styleAR.css">
    <link rel="stylesheet" href="assets1/css/homestyle.css">
    <link rel="stylesheet" href="assets1/css/catogrypag.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<body>
    <div class="grid-container">
    <header class="item1">
         <?php include_once('include/headerlib.php')?>
         </header>
         <!-- header end -->
         <!-- section sing up start -->
       <!-- section sing up start -->
       <?php include_once('include/login.php')?>
         <!-- section sing up end -->
         <!-- log in  start-->
    
       <?php include_once('include/singup.php')?>
         <!--  log in end-->
         <!-- section sing up end -->
         <!-- log in  start-->
         <!-- The Modal -->

             
   </div>

</div>
         <!--  log in end-->
         <!-- section home start homestyle.css -->
         <section class="item3">
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="assets1/img/sliderImgs/slider_img.webp" style="width:100%">
            <div class="text"></div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="assets1/img/sliderImgs/slider_img2.webp" style="width:100%">
            <div class="text"></div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets1/img/sliderImgs/slider_img3.jpg" style="width:100%">
            <div class="text"></div>
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
          </div>
          <br>
          
          <div style="text-align:center" id="dot">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          
              </section>
         
          <!--home end  -->
          <!-- section right start -->

          <section class="item4">
            <div class="container-catogry">
              <div class="right-catogry">
                <div class="services" id="services">
              <ul class="breadcrumb">
              <li><a href="#">الرئيسة</a></li>
             <li><a href="#">الكتب العربية</a></li>
             <li><a href="#"> كتب الكترونية</a></li>
              </ul> 
              </div>
              <div class="heading">
                <p>كتب الالكترونيه</p>
              </div>
              <div class="down">
                <div class="cell a">
                  تصفية النتائج
                </div>
                <div class="cell b">
                   <p>علامة تجارية</p>
                </div>
                <div class="cell b">
                  <p> السعر</p>
               </div>
               <div class="cell b">
                <p> صيغ الكتاب</p>
             </div>
              </div>
              </div>
              <div class="left-catogry">
                <div class="packages" id="packages">
          
                  <!-- input tag -->
                
    <div class="forminput">
      <input id="searchbar" onkeyup="search_animal()" type="text"
    name="search" placeholder="ابحث عن كتاب">
  </div>

                <div class="box-container">
              
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                              <p>العادات الذرية لاكثر الناس نجاحا</p>
                              <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                             
                          </div>
                      </div>
              
                      <div class="box">
                        <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                              <p>دمار العادات</p>
                              <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                            
                            </div>
                      </div>
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                              <p>هو الله</p>
                              <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                             
                            </div>
                      </div>
    
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                              <p> الحب والحرب</p>
                              <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                          
                            </div>
                      </div>
                  
                  </div>
              </div>
              <div class="packages" id="packages">
          
               
              <div class="box-container">
            
                    <div class="box">
                      <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                            <p>    لاتحزن</p>
                            <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                          
                        </div>
                    </div>
            
                    <div class="box">
                      <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                            <p>    محمد القائد الاعظم</p>
                            <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                           
                          </div>
                    </div>
                    <div class="box">
                      <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                            <p>سبع اقمار</p>
                            <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         
                          </div>
                    </div>
  
                    <div class="box">
                      <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                            <p>العادات الذرية لاكثر الناس نجاحا</p>
                            <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                           
                          </div>
                    </div>
                
                </div>
            </div>
            <div class="packages" id="packages">
        
            <div class="box-container">
          
                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>في بيتنا طبيب</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
          
                      </div>
                  </div>
          
                  <div class="box">
                    <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>لاتحزن</p>
                          <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                       
                        </div>
                  </div>
                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p> من الدي حرك قطعة الجبن</p>
                          <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         
                        </div>
                  </div>

                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                        
                        </div>
                  </div>
              
              </div>
          </div>
          <div class="packages" id="packages">
  
          <div class="box-container">
        
                <div class="box">
                  <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
        
                <div class="box">
                  <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    
                      </div>
                </div>
                <div class="box">
                  <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                      
                      </div>
                </div>

                <div class="box">
                  <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                       
                      </div>
                </div>
            
            </div>
        </div>
        <div class="packages" id="packages">
          
        <div class="box-container">
      
              <div class="box">
                <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                   
                  </div>
              </div>
      
              <div class="box">
                <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                   
                    </div>
              </div>
              <div class="box">
                <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    
                    </div>
              </div>

              <div class="box">
                <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                   
                    </div>
              </div>
          
          </div>
      </div>
              </div>
            </div>
           
          </section>
          <!-- section right end -->

          <section class="item2"></section>

    
          <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3> انضم الي نشرتنا البريدية</h3>
                    
                    <div class="form">
                      <form><i class='fa fa-lock'></i><input type="email" placeholder="ادخل بريدك الاكتروني"><button type="submit">اشتراك</button></form>
                    </div>

                     
                  </div>
                  <div class="box">
                    <h3>خدمه العملاء</h3>
                    <h1></h1>
                    <a href="#">مبيعلت الشركات</a>
                    <a href="#">الاسئلة المتكررة</a>
                    <a href="#">دليل التسوق</a>
                    <a href="#"> مواقع المعارض</a>
                    <a href="#"> سياسة الضمان</a>
                    <a href="#">سياسة الاسترجاع والاستبدال </a>
                    <a href="#"> <اتصل بنا</a>
                    <a href="#"><b style="color: aliceblue;">920000089</b> </a>
                    
                </div>
                <div class="box">
                    <h3>خدمات جرير</h3>
                    <h1></h1>
                    <a href="#">خدمه تقسيط المشتريات</a>
                    <a href="#">خدمات مابعد البيع</a>
                    <a href="#">خدمة الحماية الشاملة</a>
                    <a href="#">حماية اجهزة ابل</a>
                    <a href="#">بطاقة خصم جرير</a>
                    <a href="#">بطاقة جرير للهدايا</a>

                </div>
                 
              
                <div class="box">
                    <h3>روابط سريعة</h3>
                    <h1></h1>
                    <a href="#">اصدارات جرير</a>
                    <a href="#">قارى جرير</a>
                    <a href="#">قارى جرير</a>
                    <a href="#">قارى جرير</a>
                </div>
                  <div class="box">
                      <h3>عن جرير</h3>
                      <h1></h1>
                      <a href="#">من نحن</a>
                      <a href="#">الحوكمة</a>
                      <a href="#">علاقات المستثمرين والتقارير</a>
                      <a href="#">  الاستدامة</a>
                      <a href="#">  الاخبار</a>
                      <h3> فرص العمل</h3>
                      <h1></h1>

                     
                  </div>
                 
                  
          
              </div>
              <div class="box-container1">
                
                <div class="box">
                    <h3>روابط سريعة</h3>
                      <h1></h1>
                    <a href="#"> <img src="assets1/img/svg/svgexport-59.svg"></a>
                    <a href="#"> <img src="assets1/img/svg/svgexport-60.svg"></a>
                    <a href="#"><img src="assets1/img/svg/svgexport-61.svg"></i></a>
                    <a href="#"> <img src="assets1/img/svg/svgexport-62.svg"></a>
                    <a href="#"> <img src="assets1/img/svg/svgexport-63.svg"></a>
                    <a href="#"><img src="assets1/img/svg/svgexport-64.svg"></a>
                    <a href="#"><img src="assets1/img/svg/svgexport-65.svg"></a>
                </div>
                
            </div>
          
              <div class="box-container2">
                
                    <div class="box">
                        <h3></h3>
                        
                        <a href="#"> <img src="assets1/img/svg/svgexport-66.svg"></a>
                        <a href="#"> <img src="assets1/img/svg/svgexport-67.svg"></a>
                        <a href="#"><img src="assets1/img/svg/svgexport-68.svg"></i></a>
                        <a href="#"> <img src="assets1/img/svg/svgexport-69.svg"></a>
                        <a href="#"> <img src="assets1/img/svg/svgexport-70.svg"></a>
                        <a href="#"><img src="assets1/img/svg/svgexport-71.svg"></i></a>
                    </div>
                    <div class="box">
                        <h3>سياسة الخصوصية|شروط الخدمة</h3>
                        <p>جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
                    </div>
                </div>
          </section>
   
   
    
          <script src="assets1/script/cartcount.js"></script>
          <script src="assets1/script/script.js"></script>
          <script src="assets1/script/login.js"></script>
          <script src="assets1/script/slider.js"></script>
          <script src="assets1/script/ChangLan.js"></script> 
          <script src="assets1/script/search.js"></script>
    
</body>

</html>