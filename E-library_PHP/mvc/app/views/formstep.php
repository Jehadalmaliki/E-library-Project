<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
     <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="assets1/css/styleAR.css">
    <!-- <link rel="stylesheet" href="css/homestyle.css"> -->
    <link rel="stylesheet" href="assets1/css/formstepcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
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
    
       <?php include_once('include/login.php')?>
         <!--  log in end-->
         <!-- section home start homestyle.css -->
         
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



  
    <script src="script/script.js"></script>
    <script src="script/login.js"></script>
    <script src="script/slider.js"></script>
    <script src="script/ChangLan.js"></script> 
    <script src="script/formstepscript.js"></script>
    <script src="script/cartcount.js"></script>

</body>

</html>