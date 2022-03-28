<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
     <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="app/assets/css/styleAR.css">
    <!-- <link rel="stylesheet" href="css/homestyle.css"> -->
    <link rel="stylesheet" href="app/assets/css/formstepcss.css">
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
                
                 <div class ="icon"> <a href="cart.html"><div class="span">0</div><img src="app/assets/img/svg/svgexport-50.svg"></a></div>
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
    
         
          <!--home end  -->
          <section class="item2">
    <form action="#" class="form">
      <h1 class="text-center"> طريقة الدفع</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>

        <div
          class="progress-step progress-step-active"
          data-title="بيانات المستخدم"
        ></div>
        <div class="progress-step" data-title="بيانات الدفع"></div>
        <div class="progress-step" data-title="تاكيد العملية"></div>
        <div class="progress-step" data-title="التحقق"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">اسم المستخدم</label>
          <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
          <label for="email"> البريد الالكتروني</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="input-group">
          <label for="ID">رقم الجواز</label>
          <input type="number" name="ID" id="ID" />
        </div>
        <div class="input-group">
          <label for="dob"> تاريخ الميلاد </label>
          <input type="date" name="dob" id="dob" />
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">التالي</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="cardCVC">  نوع البطاقة </label>
          <select name="card" id="card" form="cardform">
            <option value="paypal">paypal</option>
            <option value="zeen">zeen</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
        </div>
        <div class="input-group">
          <label for="cardNum">رقم البطاقة</label>
          <input type="text" name="cardNum" id="cardNum" />
        </div>
        <div class="input-group">
          <label for="cardCVC"> صلاحية البطاقة </label>
          <input type="date" name="cardCVC" id="cardCVC" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="password">كلمة المرور</label>
          <input type="password" name="password" id="password" />
        </div>
        <div class="input-group">
          <label for="confirmPassword"> تاكيد كلمة المرور</label>
          <input
            type="password"
            name="confirmPassword"
            id="confirmPassword"
          />
        </div>
        
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <a href="index.html" class="btn ">تمت العملية بنجاح</a>
        </div>
       
      </div>
    </form>
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



  
    <script src="script/script.js"></script>
    <script src="script/login.js"></script>
    <script src="script/slider.js"></script>
    <script src="script/ChangLan.js"></script> 
    <script src="script/formstepscript.js"></script>
    <script src="script/cartcount.js"></script>

</body>

</html>