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
              <li><a href="#">??????????????</a></li>
             <li><a href="#">?????????? ??????????????</a></li>
             <li><a href="#"> ?????? ??????????????????</a></li>
              </ul> 
              </div>
              <div class="heading">
                <p>?????? ??????????????????????</p>
              </div>
              <div class="down">
                <div class="cell a">
                  ?????????? ??????????????
                </div>
                <div class="cell b">
                   <p>?????????? ????????????</p>
                </div>
                <div class="cell b">
                  <p> ??????????</p>
               </div>
               <div class="cell b">
                <p> ?????? ????????????</p>
             </div>
              </div>
              </div>
              <div class="left-catogry">
                <div class="packages" id="packages">
          
                  <!-- input tag -->
                
    <div class="forminput">
      <input id="searchbar" onkeyup="search_animal()" type="text"
    name="search" placeholder="???????? ???? ????????">
  </div>

                <div class="box-container">
              
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/b2.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                              <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                              <div class="price"> 90.00 <span>???????? ??????????</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                             
                          </div>
                      </div>
              
                      <div class="box">
                        <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                              <p>???????? ??????????????</p>
                              <div class="price"> 80.00 <span>???????? ??????????</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                            
                            </div>
                      </div>
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                              <p>???? ????????</p>
                              <div class="price"> 70.00 <span>???????? ??????????</span> </div>
                             <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                             
                            </div>
                      </div>
    
                      <div class="box">
                        <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                          <div class="content">
                              <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                              <p> ???????? ????????????</p>
                              <div class="price"> 90.00 <span>???????? ??????????</span> </div>
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
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                            <p>    ????????????</p>
                            <div class="price"> 90.00 <span>???????? ??????????</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                          
                        </div>
                    </div>
            
                    <div class="box">
                      <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                            <p>    ???????? ???????????? ????????????</p>
                            <div class="price"> 80.00 <span>???????? ??????????</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                           
                          </div>
                    </div>
                    <div class="box">
                      <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                            <p>?????? ??????????</p>
                            <div class="price"> 70.00 <span>???????? ??????????</span> </div>
                           <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         
                          </div>
                    </div>
  
                    <div class="box">
                      <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                        <div class="content">
                            <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                            <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                            <div class="price"> 90.00 <span>???????? ??????????</span> </div>
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
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                          <p>???? ?????????? ????????</p>
                          <div class="price"> 90.00 <span>???????? ??????????</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
          
                      </div>
                  </div>
          
                  <div class="box">
                    <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                          <p>????????????</p>
                          <div class="price"> 80.00 <span>???????? ??????????</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                       
                        </div>
                  </div>
                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                          <p> ???? ???????? ?????? ???????? ??????????</p>
                          <div class="price"> 70.00 <span>???????? ??????????</span> </div>
                         <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                         
                        </div>
                  </div>

                  <div class="box">
                    <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                      <div class="content">
                          <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                          <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                          <div class="price"> 90.00 <span>???????? ??????????</span> </div>
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
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                        <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                        <div class="price"> 90.00 <span>???????? ??????????</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    </div>
                </div>
        
                <div class="box">
                  <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                        <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                        <div class="price"> 80.00 <span>???????? ??????????</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    
                      </div>
                </div>
                <div class="box">
                  <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                        <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                        <div class="price"> 70.00 <span>???????? ??????????</span> </div>
                       <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                      
                      </div>
                </div>

                <div class="box">
                  <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                    <div class="content">
                        <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                        <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                        <div class="price"> 90.00 <span>???????? ??????????</span> </div>
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
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                      <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                      <div class="price"> 90.00 <span>???????? ??????????</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                   
                  </div>
              </div>
      
              <div class="box">
                <a href="/detailspag"> <img src="assets1/img/b3.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                      <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                      <div class="price"> 80.00 <span>???????? ??????????</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                   
                    </div>
              </div>
              <div class="box">
                <a href="/detailspag"><img src="assets1/img/book.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                      <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                      <div class="price"> 70.00 <span>???????? ??????????</span> </div>
                     <div class="btn"><a href="/cart" class="btn"><img src="assets1/img/svg/svgexport-56.svg"><img src="assets1/img/svg/svgexport-21.svg"><img src="assets1/img/svg/svgexport-55.svg"></a></div> 
                    
                    </div>
              </div>

              <div class="box">
                <a href="/detailspag"><img src="assets1/img/b5.jpg"></a>
                  <div class="content">
                      <h3> <img src="assets1/img/svg/svgexport-57.svg">???????? ???????????????????? </h3>
                      <p>?????????????? ???????????? ?????????? ?????????? ??????????</p>
                      <div class="price"> 90.00 <span>???????? ??????????</span> </div>
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
                    <h3> ???????? ?????? ???????????? ????????????????</h3>
                    
                    <div class="form">
                      <form><i class='fa fa-lock'></i><input type="email" placeholder="???????? ?????????? ??????????????????"><button type="submit">????????????</button></form>
                    </div>

                     
                  </div>
                  <div class="box">
                    <h3>???????? ??????????????</h3>
                    <h1></h1>
                    <a href="#">???????????? ??????????????</a>
                    <a href="#">?????????????? ????????????????</a>
                    <a href="#">???????? ????????????</a>
                    <a href="#"> ?????????? ??????????????</a>
                    <a href="#"> ?????????? ????????????</a>
                    <a href="#">?????????? ?????????????????? ???????????????????? </a>
                    <a href="#"> <???????? ??????</a>
                    <a href="#"><b style="color: aliceblue;">920000089</b> </a>
                    
                </div>
                <div class="box">
                    <h3>?????????? ????????</h3>
                    <h1></h1>
                    <a href="#">???????? ?????????? ??????????????????</a>
                    <a href="#">?????????? ?????????? ??????????</a>
                    <a href="#">???????? ?????????????? ??????????????</a>
                    <a href="#">?????????? ?????????? ??????</a>
                    <a href="#">?????????? ?????? ????????</a>
                    <a href="#">?????????? ???????? ??????????????</a>

                </div>
                 
              
                <div class="box">
                    <h3>?????????? ??????????</h3>
                    <h1></h1>
                    <a href="#">?????????????? ????????</a>
                    <a href="#">???????? ????????</a>
                    <a href="#">???????? ????????</a>
                    <a href="#">???????? ????????</a>
                </div>
                  <div class="box">
                      <h3>???? ????????</h3>
                      <h1></h1>
                      <a href="#">???? ??????</a>
                      <a href="#">??????????????</a>
                      <a href="#">???????????? ???????????????????? ??????????????????</a>
                      <a href="#">  ??????????????????</a>
                      <a href="#">  ??????????????</a>
                      <h3> ?????? ??????????</h3>
                      <h1></h1>

                     
                  </div>
                 
                  
          
              </div>
              <div class="box-container1">
                
                <div class="box">
                    <h3>?????????? ??????????</h3>
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
                        <h3>?????????? ????????????????|???????? ????????????</h3>
                        <p>???????? ???????????? ???????????? ???????????? ???????? ?? 2015. ??.??. 1010032264. ?????????????? ??.??. 1010654213</p>
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