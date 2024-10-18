
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurangabad Distillery Limited</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/db006bf474.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-mobile.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p class="mr-4"> <a href="/" class="active"> Home </a> </p>
    <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
    <p class="mr-4"> <a href="products.html"> Products </a> </p>
    <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
    <p class="mr-4"> <a href="report.php"> Investors </a> </p>
    <p class="mr-4"> <a href="contact.html"> Contact us </a> </p>
    <p class="mr-4"> <a href="enquire.html"> Enquire Now </a> </p>
    <p class="mr-2"> 
      <div class="dropdown text-light">
        <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About us
        </a>
        <div class="dropdown-menu bg-black" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="about.html">Overview</a>
          <a class="dropdown-item" href="vision-mission.html">Vision & Mission</a>
          <a class="dropdown-item" href="chairman.html">Chairman Message</a>
          <a class="dropdown-item" href="awards.html">Awards</a>
        </div>
      </div> 
    </p>
</div>

    <div class="container-fluid">
        <div class="row main">

        <div class="col-md-12 text-center pt-4" id="navup">
            <div class="row">

              <div class="col-md-6 offset-md-3 text-left text-light text-center">
                <a href="index.html"> <h2> <img src="./images/logo.png" width="100px" alt=""> </h2> </a>
                <h3 class="text-dark">Aurangabad Distillery Limited</h3>
              </div>
              <div class="col-md-2 text-right desktop-only d-flex justify-content-end">
                <div class="button-o d-flex ">
                  <button class="btn btn-0 d-flex justify-content-center align-items-center" onclick="window.location='enquire.html'"> ENQUIRE NOW</button>
                  <button class="btn btn-1"> </button>
                  <button class="btn btn-2"> </button>
                </div>
              </div>
              
            </div>

        </div>

          <div class="col-md-12 nav pt-2 pb-2 classinitial d-flex align-items-center" id="nav">
            
            <div class="col-md-8 offset-md-2 text-center d-flex justify-content-center mt-3 mid">
              <p class="mr-4"> <a href="/" class="active"> Home </a> </p>
              <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
              <p class="mr-4"> <a href="products.html"> Products </a> </p>
              <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
              <p class="mr-4"> <a href="report.php"> Investors </a> </p>
              <p class="mr-4"> <a href="contact.html"> Contact us </a> </p>
              <p class="mr-2"> 
                <div class="dropdown text-light">
                  <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About us
                  </a>
                  <div class="dropdown-menu bg-black" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="about.html">Overiew</a>
                    <a class="dropdown-item" href="vision-mission.html">Vision & Mission</a>
                    <a class="dropdown-item" href="chairman.html">Chairman Message</a>
                    <a class="dropdown-item" href="awards.html">Awards</a>
                  </div>
                </div> 
              </p>
            </div>

          </div>
    
          <div class="col-md-12 navMob navMobHome position-fixed classinitial d-flex align-items-center " id="navMob">
            <div class="col-2 h3 p-0">
              <a href="index.html"> <img src="./images/logo.png" width="50px" alt=""> </a>
            </div>
            <div class="col-8 text-center" onclick="window.location='/'">
              <h1 data-aos-duration="5000" data-aos ="fade-up">
                <span>
                  Aurangabad
                  Distillery
                </span>  <br>
                Limited</h1>
            </div>
            <div class="col-2 ml-0 pl-1 h3 d-flex text-orange">
              <a onclick="openNav()"> <i class="fa fa-bars font-weight-bold " aria-hidden="true"></i> </a>
            </div>
          </div>

            <div id="carouselExampleControls" class="carousel slide col-md-12 p-0" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./images/product/main.jpg" class="cimg" id="cimg" alt="">
                    <div class="data">
                        <h1  data-aos-duration="5000" data-aos ="fade-down"> Our Products </h1>
                        <!-- <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a>  -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/rectified.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down">  Rectified Spirit (RS) </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/ExtraNeutralAlchol.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down"> Extra Neutral Alcohol </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/specialDenatured.jpg" class="cimg" id="cimg2" alt="">
                    <div class="data"> 
                        <h1  data-aos-duration="5000" data-aos ="fade-down">  Special denatured spirit </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/ethanol.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Ethanol </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/whitePotash.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Potash </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/bioPotash.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> Bio Potash </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./images/product/dePotashVinnase.jpg" class="cimg" id="cimg3" alt="">
                    <div class="data"> 
                        <h1 data-aos-duration="5000" data-aos ="fade-down"> De Potash Vinnase (DPV) </h1>
                        <a href="about.html"> <input type="button" onclick="window.location='' " class="btn btnE-reverse p-2 pr-4 pl-4" value="EXPLORE"> </a> 
                    </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-light">

<div class="container">
  <div class="row products">
      <h1 class="text-center col-12 content-head mb-4" data-aos-duration="5000" data-aos ="fade-up">Our <span> Products </span></h1>
      <p class="col-md-10 text-center offset-md-1 mb-4 mt-3 subhead" data-aos-duration="5000" data-aos ="fade-down"> 
        Our Products are manufactured at our distillery situated at Walchandnagar, Maharashtra with total area of 
        approx 40 Acres which is a molasses based distillery. Our majority of the spirit which contains 95% alcohol
        by nature and also used to manufacture alcohol by the process of rectification is used by chemical and pharmaceutical industries.
      </p>

      <div class="col-md-4 offset-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/rectified2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-7 col-7 pl-0" data-aos-duration="1200"  data-aos="fade-up"> Rectified Spirit </h2>
              <p clas col-10 s="text-justify col-md-11 p-0 mt-4" data-aos-duration="1200"  data-aos="fade-up"> 
                <b> Applications - Pharma industry and industrial solvent. </b> <br>
                Rectified spirit is highly concentrated ethanol purified by means of repeated distillation.
                It contains 95% alcohol by volume. Rectified Spirit Alcohol is used in mixed drinks, in
                the production of liquors, for medicinal purposes and for chemical industry as solvent. Rectified
                Spirit is produced from molasses using yeast in fermentation tanks.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4"></div>

      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/ExtraNeutralAlchol2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-8 col-7 pl-0"  data-aos-duration="1500"  data-aos="fade-up"> Neutral Alcohol </h2>
              <p class="text-justify col-md-11 p-0 mt-4" data-aos-duration="12000" data-aos="fade-up"> 
                <b> Applications - Cosmetics and aromatic industry  </b> <br>
                (NA) - is a colorless alcohol with neutral smell and taste. It is
                distilled from sugarcane molasses. Neutral Alcohol that is produced by redistillation
                of rectified spirit, which helps in removing low volatile impurities and high
                volatile impurities present in it.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>

      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/specialDenatured2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-11 col-10 0 pl-0" data-aos-duration="12000" data-aos="fade-up"> Special Denatured Spirit </h2>
              <p class="text-justify mt-3 p-0 mt-4 col-md-11" data-aos-duration="12000" data-aos="fade-up"> 
                <b> Applications - Chemical industry </b> <br>
                Denatured Spirit is produced by mixing spirits with denaturants in order to render them
                potable, generally for use in various industrial applications. Denatured Spirit usually is
                colorless in appearance. Denatured spirit serves as a cleaning agent, fuel additive,
                sanding aid, exterminator and as a solvent.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>

      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/ethanol2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-4 col-4  pl-0" data-aos-duration="12000" data-aos="fade-up"> Ethanol </h2>
              <p class="text-justify mt-3 p-0 mt-4 col-md-11" data-aos-duration="12000" data-aos="fade-up"> 
                <b> Applications - Fuel Blending </b><br>
                Ethanol, also called alcohol, ethyl alcohol and grain alcohol, is a clear, colorless liquid and the principle ingredient
                in alcoholic beverages like beer, wine or brandy. Because it can readily dissolve in water and other organic compounds,
                ethanol also is an ingredient in a range of products, from personal care and beauty products to paints and varnishes to fuel Blending.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>
    
      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/whitePotash2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-4 col-4  pl-0" data-aos-duration="12000" data-aos="fade-up"> Potash </h2>
              <p class="text-justify col-md-11 p-0 mt-4" data-aos-duration="12000" data-aos="fade-up"> 
                  <b> Applications - Fertilizer </b> <br>
                  Potash contains soluble potassium, making it an excellent addition to agricultural fertilizer. 
                  It ensures proper maturation in a plant by improving overall health, root strength, disease resistance, and yield rates. 
                  In addition, potash creates a better final product, improving the color, texture, and taste of food.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>

      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/bioPotash2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-5 col-6  pl-0" data-aos-duration="12000" data-aos="fade-up"> Bio Potash </h2>
              <p class="text-justify mt-3 p-0 mt-4 col-md-11" data-aos-duration="12000" data-aos="fade-up"> 
                <b> Applications - Organic Fertilizer </b> <br>
                Potash contains soluble potassium, making it an excellent addition to agricultural fertilizer. 
                It ensures proper maturation in a plant by improving overall health, root strength, disease resistance, and yield rates. 
                In addition, potash creates a better final product, improving the color, texture, and taste of food.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>

      <div class="col-md-4 p-2 mt-5 pr-3">
        <div class="product">
          <div class="col-md-12 imgBlock" data-aos-duration="5000" data-aos="fade-up">
            <img src="./images/product/dePotashVinnase2.jpg" alt="">
            
            <div class="col-md-12 content-head">
              <h2 class="col-md-11 col-11 pl-0" data-aos-duration="12000" data-aos="fade-up"> De Potash Vinnase (DPV) </h2>
              <p class="text-justify mt-3 p-0 mt-4 col-md-11" data-aos-duration="12000" data-aos="fade-up"> 
                <b> Applications - Animal feed and soil neutrients. </b> <br>
                De potash vinasse is used in animal feed product and soil neutrients. It is used as an additive which has resulted in 
                better feed conversion and increased body weight and growth in rabbits, sheep and other large ruminants.
                Hence,De potash vinasses can be used up to 10% in ruminant diet for better performance with least cost.
              </p>
        
            </div>
          
          </div>
        </div>
      </div>
          
  </div>
</div>

</div>

<div class="container-fluid text-center pt-5 footer2 text-md-left">
  <div class="container">

      <div class="row">

          <div class="col-md-6 col-lg-6 col-xl-6 mb-4 text-left">

              <h6 class="text-uppercase font-weight-bold">Useful Links</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px;">
              <p> <a class="text-light" href="/"> <i class="fa fa-home font-weight-bold mr-1" aria-hidden="true"></i> Home </a> </p>
              <p> <a class="text-light" href="gallery.php"> <i class="fa fa-photo h5 font-weight-bold mr-1" aria-hidden="true"></i> Gallery </a> </p>
              <p> <a class="text-light" href="products.html"> <i class="fa fa-suitcase font-weight-bold mr-1" aria-hidden="true"></i> Our Products </a> </p>
              <p> <a class="text-light" href="certification.html"> <i class="fa fa-graduation-cap font-weight-bold mr-1" aria-hidden="true"></i> Certification </a> </p>
              <p> <a class="text-light" href="vision-mission.html"> <i class="fa fa-eye font-weight-bold mr-1" aria-hidden="true"></i> Vision & Mission </a> </p>
              <p> <a class="text-light" href="report.php"> <i class="fa fa-pie-chart font-weight-bold mr-1" aria-hidden="true"></i> Investors </a> </p>
              <p> <a class="text-light" href="about.html"> <i class="fa fa-info-circle h5 font-weight-bold mr-1" aria-hidden="true"></i> About us</a> </p>
              <p> <a class="text-light" href="contact.html"> <i class="fa fa-phone font-weight-bold mr-1" aria-hidden="true"></i> Contact us </a> </p>
          </div>

          <div class="col-md-1 col-lg-1 col-xl-1">
          </div>

          <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-md-0 mb-4 text-left">

              <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p><i class="fa fa-home mr-3"></i> Aurangabad Distillery Limited, <br> &nbsp;&nbsp;&nbsp;&nbsp; Walchandnagar, Maharashtra - 413114</p>
              <p><i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> info@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> cs@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> md@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> accounts@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> chairman@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> purchase@aurangabaddistillery.com <a> </p>
              <p> <i class="fa fa-phone mr-3"></i> 
                02118 252 407
              </p>                
          </div>

      </div>
  </div> 

    <div class="footer-copyright text-center text-white-50 py-3">
        © 2021 Copyright:
        <a class="text-white" href="">Aurangabad Distillery Limited</a>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script>
 function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  $(function () { 
      var header = $(".classinitial"); 
      $(window).scroll(function () { 
          var scroll = $(window).scrollTop(); 

          if (scroll >= 250) { 
              header.removeClass('classinitial') 
                      .addClass("classfinal"); 
                      
          } else { 
              header.removeClass("classfinal") 
                      .addClass('classinitial'); 
          } 

          base = -70;

          document.getElementById("cimg").style =  'margin-top:'+ (base + (scroll/2) )+'px';
          document.getElementById("cimg2").style = 'margin-top:'+ (base + (scroll/2) )+'px';
          document.getElementById("cimg3").style = 'margin-top:'+ (base + (scroll/2) )+'px';
          

      }); 
  });
  

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>