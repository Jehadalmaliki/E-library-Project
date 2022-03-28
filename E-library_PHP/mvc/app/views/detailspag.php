<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
     <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="app/assets/css/styleAR.css">
    <link rel="stylesheet" href="app/assets/css/homestyle.css">
    
    <link rel="stylesheet" href="app/assets/css/detailscss.css">
    
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
                    <li><a href="library.php"><img src="app/assets/img/svg/svgexport-2.svg">الرئيسيه</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-3.svg">من نحن</a></li>
                    <li><a ><img src="app/assets/img/svg/svgexport-4.svg">اتصل بنا</a></li>
                    <li><a ><img src="app/assets/img/svg/vgexport-5.svg">المساعدة</a></li>
                    <li><a ><img src="app/assets/img/svg/vgexport-24.svg">صحيفة الاسبوعية</a></li>
                    <li><a ><img src="app/assets/img/svg/vgexport-28.svg">اليمن</a></li>
                    <li><a  ><img src="app/assets/img/svg/vgexport-14.svg" onclick="togglestyle()">English</a></li>    
                </ul>
            </div>
             
             <div class="search" id="search">
                <div class ="icon1"> <img src="img\svg\img.png" ></div>
                 <div class="form"><form><input type="search"  placeholder="البحث">
                  <i class="fa fa-search"></i>
                    
                </form></div>
                
                 <div class ="icon"> <a href="cart.html"><div class="span">0</div><img src="img\svg\svgexport-50.svg"></a></div>
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
            <img src="app/assets/img/sliderapp/assets/s/slider_img2.webp" style="width:100%">
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
          <!-- catagory section start -->
          <section class="item4">
            <div class="services" id="services">
                
                <h2>القائمة الرئيسة</h2>
            <ul class="breadcrumb">
            <li><a href="#">الرئيسة</a></li>
           <li><a href="#">الكتب العربية</a></li>
           <li><a href="#"> كتب الكترونية</a></li>
           <li>كتاب الالكتروني)لانك الله)</li>
            </ul> 
            <div class="packages" id="packages">

             
          
              <div class="box-container">
                     
                    <div class="box " id="border">
                    
                        <img src="app/assets/img/b4.jpg">
                      <div class="content">
                        <div class="row">
                          <div class="column">
                            <img src="app/assets/img/b4.jpg"  style="width:100% ; border: 1px solid blue;border-radius: 4px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                          </div>
                          
                        
                        </div>
                        
                        <div id="myModal3" class="modal3">
                          <span class="close3 cursor" onclick="closeModal()">&times;</span>
                          <div class="modal-content3">
                        
                            <div class="mySlides1">
                              <div class="numbertext">1 / 4</div>
                              <img src="app/assets/img/b4.jpg" style="width:100%">
                            </div>
                        
                            <div class="mySlides1">
                              <div class="numbertext">2 / 4</div>
                              <img src="app/assets/img/b3.jpg" style="width:100%">
                            </div>
                        
                            <div class="mySlides1">
                              <div class="numbertext">3 / 4</div>
                              <img src="app/assets/img/b2.jpg" style="width:100%">
                            </div>
                            
                            <div class="mySlides1">
                              <div class="numbertext">4 / 4</div>
                              <img src="app/assets/img/b4.jpg" style="width:100%">
                            </div>
                            
                            <a class="prev6" onclick="plusSlides_im(-1)">&#10094;</a>
                            <a class="next6" onclick="plusSlides_im(1)">&#10095;</a>
                        
                            <div class="caption-container">
                              <p id="caption"></p>
                            </div>
                        
                        
                            <div class="column">
                              <img class="demo cursor" src="img/b4.jpg" style="width:100%" onclick="currentSlide1(1)" alt="الصفحة الرئيسية">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="img/b3.jpg" style="width:100%" onclick="currentSlide1(2)" alt="من الخلف">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="img/b2.jpg" style="width:100%" onclick="currentSlide1(3)" alt="المؤلف  ">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="img/b4.jpg" style="width:100%" onclick="currentSlide1(4)" alt=" المحتوى">
                            </div>
                          </div>
                        </div>
                   </div>    
                  </div>
                      
                  <div class="box b">
                      
                      <div class="content">
                        <div class="right1">
                          <h3> (كتاب الالكتروني)لانك  الله </h3>
                          <p>عرض المزيد</p>
                          <div class="price"> 23.00 ر.س </div>
                        </div>
                        <div class="left1">
                          <p>Ecoh وحدة البيع</p>
                          <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                              <h4>(15 مراجعات)</h4>
                              <p> رقم الصنف TRHII86J رقم المنتج 4</p>
                          </div>
                        </div>
                        <div class="h">   الصيغ المتوفرة </div>
                        <div class="bottom">
                          <div class="right1">
                            <div class="text"><input type="radio" id="radio" placeholder="checkbox" >كتاب الالكتروني</div> 
                            <div class="text">  <input type="radio" id="radio" placeholder="checkbox" >  كتاب مطبوع</div> 
                          </div>
                          
                          <div class="left1">
                            <div class="price"> 23.00 ر.س </div><p>شامل الضريبة</p>
                            <div class="price"> 23.00 ر.س </div><p>شامل الضريبة</p>
                          </div>
                        </div>
                        </div>
                         
                      
                  </div>
          
                  <div class="box c">
                    <div class="continer">
                    <div class="top">
                      <p>ملاحظة:<span> اضافة هدا الكتاب الالكتروني الى مكتبتك في قارئ جرير عما قريب</span></p>
                      <h1>اقرا المزيد</h1>
                    </div>
                    <div class="form" >
                      
                          <select>
                              <option value="books">1</option>
                              <option value="html">2</option>
                              <option value="css">+3</option>
                              <option value="php">+4</option>
                              <option value="js">+5</option>
                            </select> 
                            <input type="submit" id="number" value=" اضف الى السلة" ><img src="img\svg\svgexport-21.svg">
                    </div> 
                    <div class ="inside" >
                      <div class="lefty">
                       <div class="a"> <img src="app/assets/img/svg/svgexport-3.svg"> تسوق امن <img src="app/assets/img/svg/svgexport-2.svg"></div>
                        <div class="a"><img src="app/assets/img/svg/svgexport-4.svg"> تسوق امن <img src="app/assets/img/svg/svgexport-5.svg"></div>

                      </div>
                      <div class="righty">
                        <img src="app/assets/img/svg/svgexport-3.svg"> تسوق امن <img src="app/assets/img/svg/svgexport-3.svg">
                      </div>
                    </div>  
                    <div class="end" >
                      <input type="submit" value="مشاركة">
                      <input type="submit" value="المفضلة">
                      <input type="submit" value="مقارنة">
                    </div>
                    <div class="end" >
                      <input type="submit" value="مشاركة">
                      <input type="submit" value="المفضلة">
                      <input type="submit" value="مقارنة">
                    </div>                  
                  </div>
                  </div>
                  </div>
          
              </div>
          <div class="description"><p>كتاب يتحدث عن علم النفس وكيف يمكن للانسان تعزيز ثقته بنفسه وعدم الانجرار للعدم الثقة</p></div>
            </div>
           
         
          </section>

          <!-- catagory section end -->
          <!-- packages section start -->
        <section class="item2">
          <div class="parent">
            <p>المواصفات</p>
            <div class="cell">
              <div class="lefta">رقم الصنف </div>
              <div class="righta">JRTEDB546</div>
            </div>
            <div class="cell">
              <div class="lefta">رقم المنتج </div>
              <div class="righta">4</div>
            </div>
            <div class="cell">
              <div class="lefta">المولف </div>
              <div class="righta">جهاد المليكي</div>
            </div>
            <div class="cell">
              <div class="lefta">الناشر </div>
              <div class="righta">دار الخير للنشر والطباعه</div>
            </div>
            <div class="cell">
              <div class="lefta"> تاريخ النشر </div>
              <div class="righta">2022</div>
            </div>
            <div class="cell">
              <div class="lefta">صيغة المتاب </div>
              <div class="righta">مطبوع</div>
            </div>
            <div class="cell">
              <div class="lefta">عدد الصفحات </div>
              <div class="righta">220</div>
            </div>
            <div class="cell">
              <div class="lefta"> وزن الشحن </div>
              <div class="righta">1</div>
            </div>
            <div class="cell">
              <div class="lefta">صيغة الملف   </div>
              <div class="righta">eRTG</div>
            </div>
            <div class="cell">
              <div class="lefta"> اللغة   </div>
              <div class="righta">عربي</div>
            </div>
            <p>المراجعات العملاء<input type="submit" value="+اضف مراجعتك"></p>
            <div class="cell">
              <div class="lefta d"> <p>Good </p><h1>من قبل جهاد</h1><h1>جميل جدا</h1></div>
              <div class="righta s">2020/1/3</div>
            </div>
            <div class="cell">
              <div class="lefta d"> <p>Good </p><h1>من قبل جهاد</h1><h1>جميل جدا</h1></div>
              <div class="righta s">2020/1/3</div>
            </div>
            <div class="cell">
              <div class="lefta d"><p>Good </p><h1>من قبل جهاد</h1><h1>جميل جدا</h1></div>
              <div class="righta  s">2020/1/3</div>
            </div>
          </div>
          <p>منتجات مشابهة</p>
          <div class="product">
            
            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>

            <div class="boxproduct">
              <img src="img/b4.jpg">
              <div class="contentproduct">
                <div class="up">الله الرحيم</div>
                <div class="down">14 ر.س </div>
              </div>
            </div>
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

</html>