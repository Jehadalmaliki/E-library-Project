<php >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
     <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="app/assets/css/homestyle.css">
    <link rel="stylesheet" href="app/assets/css/styleAR.css">
  
    <link rel="stylesheet" href="app/assets/css/catagorystyle.css">
    <link rel="stylesheet" href="app/assets/css/packagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<body>
    <div class="grid-container">
      
        <header class="item1">
          <div id="menu-icon" class="fas fa-bars"></div>
                <nav>
                    <div class="ul">
                <ul>
                    <li><a id="myBtn" ><img src="app/assets/img/svg/svgexport-1.svg">ادخل لحسابك وسجل الان </a></li>
                    <li><a href="library.php" ><img src="app/assets/img/svg/svgexport-2.svg">الرئيسيه</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-3.svg">من نحن</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-4.svg">اتصل بنا</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-5.svg">المساعدة</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-24.svg">صحيفة الاسبوعية</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-28.svg">اليمن</a></li>
                    <li><a  ><img src="app/assets/img/svg/svgexport-14.svg" onclick="togglestyle()">English</a></li>    
                </ul>
            </div>
             
             <div class="search" id="search">
                <div class ="icon1"> <img src="app/assets/img/svg/img.png" ></div>
                 <div class="form"><form><input type="search"  placeholder="البحث">
                  <i class="fa fa-search"></i>
                    
                </form></div>
                
                 <div class ="icon"> <a href="cart.php"><div class="span">0</div><img src="app/assets/img/svg/svgexport-50.svg"></a></div>
             </div>
            </nav>
         </header>
         <!-- header end -->
         <!-- section sing up start -->
         <div id="myModal2" class="modal2">

          <!-- Modal content style.css  /login.js-->
          <div class="modal-content2">
            <span class="close2">&times;</span>
            <div class="text3">        انشاء حساب  </div>
                   <form method="post"  action="\">
                      <div class="fields">
                        <div class="field num">
                          <input type="text" id="number" placeholder="رقم الجوال" >
                          <select>
                              <option value="phone1">+967</option>
                              <option value="phone2">+968</option>
                              <option value="phone3">+968</option>
                              <option value="phone4">+968</option>
                              <option value="phone5">+964</option>
                            </select>    
                      </div>
                      <div class="text1">سوف نرسل لك رمز التحقيق عن طريق رسالة نصية </div>
                          <div class="field code">
                              <input type="text" id="code" placeholder="ارسال رمز التحقيق" >
                              
                          </div>
                          <div class="field name1">
                              <input type="text" id="secondName" placeholder="الاسم الاول" >
                              
                          </div>
                          <div class="field name2">
                              <input type="text" id="secondName" placeholder="الاسم الثاني" >
                              
                          </div>
                          <div class="field email">
                          <input type="email" id="emailAddress" placeholder="البريد الالكتروني" >
                          </div>
                          <div class="field email2">
                            <input type="email2" id="emailAddress" placeholder="تاكيد رمز البريد الالكتروني" >
                          
                            </div>
                     
                          <div class="field pass">
                          <input type="password" id="password" placeholder="كلمة السر" >
                        </div>  
                     </div>
                     <div class=" field ckeck">
                     <div class="text"><input type="checkbox" id="checkbox" placeholder="checkbox" >اوافق على الشروط والاحكام</div> 
                       <div class="text">  <input type="checkbox" id="checkbox" placeholder="checkbox" >على الشروط والاحكام</div> 
                   </div>
                     <div class="fields">
                          <div class=" field input2 ">
                          <input type="submit" value=" انشاء حساب">
                          </div>
                          
                      </div>
                   </form>
           </div>
        
        </div>
         <!-- section sing up end -->
         <!-- log in  start-->
         <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
            <div class="text">تسجيل الدخول</div>
           <form method="post"  >
              <div class="fields">
              
                  <div class="field email">
                  <input type="email" id="emailAddress" placeholder="البريد الالكتروني" >
                  </div>
             
                  <div class="field pass">
                  <input type="password" id="password" placeholder="كلمة السر" >
                </div>  
             </div>
             <div class="fields">
                  <div class=" field input2 ">
                  <input type="submit" value="تسجيل الدخول">
                  </div>
                   <div class="text" >ليس لديك حساب</div>
              <div class=" field input3 ">  
                
                <div class="text" id ="myBtn2" >انشاءحساب جديد</div>
</div>
              </div>
           </form>
   </div>

</div>
         <!--  log in end-->
         <!-- section home start homestyle.css -->
         <section class="item3">
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="app/assets/img/sliderImgs/slider_img.webp" style="width:100%">
            <div class="text"></div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="app/assets/img/sliderImgs/slider_img2.webp" style="width:100%">
            <div class="text"></div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="app/assets/img/sliderImgs/slider_img3.jpg" style="width:100%">
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
          <!-- catagory section start /catagorystyle.css -->
          <section class="item4">
            <div class="services" id="services">
              <h1 >
                  تصفح حسب القسم
              </h1>
             <div class="box-container">
          
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-46.svg"></a>
                      <h3>دين</h3>
                  </div>
              
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-42.svg"></a> 
                      <h3>تاريخ</h3>
                  </div>
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-40.svg"></a>
                      <h3>روايات</h3>
                  </div>
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-43.svg"></a>
                      <h3>سياسة</h3>
                      
                  </div>
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-45.svg"></a>
                      <h3>اقتصاد</h3>
                     
                  </div>
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-47.svg"></a>
                      <h3>طبخ</h3>
                      
                  </div>
                  <div class="box">
                    <a href="catogrypag.php" ><img src="app/assets/img/svg/svgexport-48.svg"></a> 
                      <h3>تربية</h3>
                      
                  </div>
          
              </div>
          
            </div>
            <div class="Advertisment">
              <div class="photos">
                <img src="app/assets/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 700px">
                <img src="app/assets/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 200px">
                <img src="app/assets/img/sliderImgs/slider_img.webp"  height=" 100px;" width=" 100px">
                <img src="app/assets/img/sliderImgs/slider_img.webp"  height=" 200px;" width=" 800px">
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
                    <a href="detailspag.php"><img src="app/assets/img/b2.jpg"></a>
                      <div class="content">
                          <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img class="add-cart"src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo"> </span>
                      </div>
                  </div>
          
                  <div class="box">
                    <a href="detailspag.php"> <img src="app/assets/img/b3.jpg"></a>
                      <div class="content">
                          <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img class="add-cart" src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo1"></span>
                        </div>
                  </div>
                  <div class="box">
                    <a href="detailspag.php"><img src="app/assets/img/book.jpg"></a>
                      <div class="content">
                          <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img  class="add-cart" src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo2"></span>
                        </div>
                  </div>

                  <div class="box">
                    <a href="detailspag.php"><img src="app/assets/img/b5.jpg"></a>
                      <div class="content">
                          <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img class="add-cart" src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo3"></span>
                        </div>
                  </div>
                  <div class="box">
                    <a href="detailspag.php"><img src="img/b4.jpg"></a>
                      <div class="content">
                          <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                          <p>العادات الذرية لاكثر الناس نجاحا</p>
                          <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                         <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img class="add-cart" src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                         <p>ينتهي العرض</p><span id="demo4"></span>
                        </div>
                  </div>
              
              </div>
              <a href="catogrypag.php" id="go">عرض الكل</a>
          </div>
          <div class="packages" id="packages">
          
            <h1 > الكتب التاريخية</h1>
          <div class="box-container">
        
                <div class="box">
                  <img src="app/assets/img/b2.jpg">
                    <div class="content">
                        <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
        
                <div class="box">
                  <img src="app/assets/img/b3.jpg">
                    <div class="content">
                        <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
                <div class="box">
                  <img src="app/assets/img/book.jpg">
                    <div class="content">
                        <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>

                <div class="box">
                  <img src="iapp/assets/mg/b5.jpg">
                    <div class="content">
                        <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
                <div class="box">
                  <img src="app/assets/img/b4.jpg">
                    <div class="content">
                        <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                        <p>العادات الذرية لاكثر الناس نجاحا</p>
                        <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                       <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
            
            </div>
            <a href="catogrypag.php" id="go">عرض الكل</a>
        </div>
        <div class="packages" id="packages">
          
          <h1 >الكتب الدينية</h1>
        <div class="box-container">
      
              <div class="box">
                <img src="app/assets/img/b2.jpg">
                  <div class="content">
                      <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
      
              <div class="box">
                <img src="app/assets/img/b3.jpg">
                  <div class="content">
                      <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
              <div class="box">
                <img src="app/assets/img/book.jpg">
                  <div class="content">
                      <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>

              <div class="box">
                <img src="app/assets/img/b5.jpg">
                  <div class="content">
                      <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
              <div class="box">
                <img src="app/assets/img/b4.jpg">
                  <div class="content">
                      <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                      <p>العادات الذرية لاكثر الناس نجاحا</p>
                      <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                     <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                  </div>
              </div>
          
          </div>
          <a href="catogrypag.php" id="go">عرض الكل</a>
      </div>
      <div class="packages" id="packages">
          
        <h1 >الروايات</h1>
      <div class="box-container">
    
            <div class="box">
              <img src="img/b2.jpg">
                <div class="content">
                    <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
    
            <div class="box">
              <img src="app/assets/img/b3.jpg">
                <div class="content">
                    <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 80.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            <div class="box">
              <img src="app/assets/img/book.jpg">
                <div class="content">
                    <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 70.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>

            <div class="box">
              <img src="app/assets/img/b5.jpg">
                <div class="content">
                    <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            <div class="box">
              <img src="app/assets/img/b4.jpg">
                <div class="content">
                    <h3> <img src="app/assets/img/svg/svgexport-57.svg">كتاب الالكتروني </h3>
                    <p>العادات الذرية لاكثر الناس نجاحا</p>
                    <div class="price"> 90.00 <span>ريال سعودي</span> </div>
                   <div class="btn"><a href="#" class="btn"><img src="app/assets/img/svg/svgexport-56.svg"><img src="app/assets/img/svg/svgexport-21.svg"><img src="app/assets/img/svg/svgexport-55.svg"></a></div> 
                </div>
            </div>
            
        
        </div>
        <a href="catogrypag.php" id="go">عرض الكل</a>
    </div>

        </section>
        
        
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
                    <a href="#"> <img src="app/assets/img/svg/svgexport-59.svg"></a>
                    <a href="#"> <img src="app/assets/img/svg/svgexport-60.svg"></a>
                    <a href="#"><img src="app/assets/img/svg/svgexport-61.svg"></i></a>
                    <a href="#"> <img src="app/assets/img/svg/svgexport-62.svg"></a>
                    <a href="#"> <img src="app/assets/img/svg/svgexport-63.svg"></a>
                    <a href="#"><img src="app/assets/img/svg/svgexport-64.svg"></a>
                    <a href="#"><img src="app/assets/img/svg/svgexport-65.svg"></a>
                </div>
                
            </div>
          
              <div class="box-container2">
                
                    <div class="box">
                        <h3></h3>
                        
                        <a href="#"> <img src="app/assets/img/svg/svgexport-66.svg"></a>
                        <a href="#"> <img src="app/assets/img/svg/svgexport-67.svg"></a>
                        <a href="#"><img src="app/assets/img/svg/svgexport-68.svg"></i></a>
                        <a href="#"> <img src="app/assets/img/svg/svgexport-69.svg"></a>
                        <a href="#"> <img src="app/assets/img/svg/svgexport-70.svg"></a>
                        <a href="#"><img src="app/assets/img/svg/svgexport-71.svg"></i></a>
                    </div>
                    <div class="box">
                        <h3>سياسة الخصوصية|شروط الخدمة</h3>
                        <p>جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213</p>
                    </div>
                </div>
          </section>
   
   
    
          <script src="app/assets/script/cartcount.js"></script>
          <script src="app/assets/script/script.js"></script>
          <script src="app/assets/script/login.js"></script>
          <script src="app/assets/script/slider.js"></script>
          <script src="app/assets/script/ChangLan.js"></script> 
    
</body>

</php>