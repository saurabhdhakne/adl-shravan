
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
    <link rel="stylesheet" href="./css/lightbox.css">
    <link rel="stylesheet" href="./css/style-mobile.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p class="mr-4"> <a href="/" > Home </a> </p>
    <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
    <p class="mr-4"> <a href="products.html"> Products </a> </p>
    <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
    <p class="mr-4"> <a href="report.php"> Annual Report </a> </p>
    <p class="mr-4"> <a href="contact.html"> Contact US </a> </p>
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
    <div class="row ">

      <div class="col-md-12 text-center pt-4" id="navup">
        <div class="row">

          <div class="col-md-6 offset-md-3 text-left text-light text-center">
            <a href="index.html"> <h2> <img src="./images/logo.png" width="100px" alt=""> </h2> </a>
            <h3 class="text-dark">Aurangabad Distillery Limited</h3>
          </div>
          <div class="col-md-2 text-right desktop-only d-flex justify-content-end">
            <div class="button-o d-flex ">
              <button class="btn btn-0 d-flex justify-content-center align-items-center"  onclick="window.location='enquire.html'"> ENQUIRE NOW</button>
              <button class="btn btn-1"> </button>
              <button class="btn btn-2"> </button>
            </div>
          </div>
          
        </div>

      </div>

      <div class="col-md-12 nav pt-2 pb-2 classinitial d-flex align-items-center" id="nav">
        
        <div class="col-md-8 offset-md-2 text-center d-flex justify-content-center mt-3 mid">
          <p class="mr-4"> <a href="/" > Home </a> </p>
          <p class="mr-4"> <a href="gallery.php"  class="active"> Gallery </a> </p>
          <p class="mr-4"> <a href="products.html"> Products </a> </p>
          <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
          <p class="mr-4"> <a href="report.php"> Annual Report </a> </p>
          <p class="mr-4"> <a href="contact.html"> Contact US </a> </p>
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

    </div>
</div>

<div class="container-fluid">
    <div class="row about-m-margin">
        <div class="col-md-12 about-m-head d-flex justify-content-center align-items-center">
                <h1 class=display-3> Aurangabad <span>  Distillery</span>   Limited </h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 about-m-base card d-flex justify-content-center align-items-center">
                <h1> Our <span> Gallery </span> </h1>
        </div>
    </div>
</div>

    <!-- Gallery Section Begin -->
    <div class="container-fluid gallery-section gallery-page p-4 mt-5">
            <div class="gallery2 row " id="gdata">
            
            </div>
        <div class="col-md-4 offset-md-4 mt-5 mb-5 text-center d-flex justify-content-center">
            <div class="button-o d-flex ">
                <button class="btn btn-0 d-flex justify-content-center align-items-center" onClick="pagination()"> Show More</button>
                <button class="btn btn-1"> </button>
                <button class="btn btn-2"> </button>
            </div>
        </div>
    </div>

    <div class="modal fade gallery-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="" id="lightImg"  alt="">
            </div>
        </div>
    </div>

    <?php
        $directory = "images";
        $images = glob($directory . "/*.jpg");
    ?>
    <script>
          var js_data = '<?php echo json_encode($images); ?>';
        var data = JSON.parse(js_data );
        console.log(data);

        total = data.length - 1;
        current = 11;
        limit = 10;
        prev = 0;
        
        function pagination(){
          prev = current+1;
          current += limit; 
          if(current > total){ 
            current = total;
            document.getElementById('showMore').style.display = "none";
          }
          for(let i=prev ;i <= current; i++){
              document.getElementById('gdata').innerHTML += '<div data-toggle="modal" data-target=".gallery-modal-lg" onclick="openImg(" id'+ data[i] +'")" class="col-md-2" id=" id'+ data[i] +'" ><a class="thumb-icon image-popup">  <img src="'+ data[i] +'" width="100%" alt="" "><i class="fa fa-picture-o fa-style"> </i></a></div>' 
          }
          
        }

        function paginationOnLoad(){
            
          for(let i=prev ;i <= current; i++){
            document.getElementById('gdata').innerHTML += '<div data-toggle="modal" data-target=".gallery-modal-lg" onclick="openImg('+ i +')" class="col-md-2" id=" id'+ data[i] +'"><a class="thumb-icon image-popup">  <img src="'+ data[i] +'" width="100%" alt="" ><i class="fa fa-picture-o fa-style"> </i></a></div>' 
          }
          
        }paginationOnLoad();
        
    </script>

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
              <p> <a class="text-light" href="report.php"> <i class="fa fa-pie-chart font-weight-bold mr-1" aria-hidden="true"></i> Annual Report </a> </p>
              <p> <a class="text-light" href="about.html"> <i class="fa fa-info-circle h5 font-weight-bold mr-1" aria-hidden="true"></i> About us</a> </p>
              <p> <a class="text-light" href="contact.html"> <i class="fa fa-phone font-weight-bold mr-1" aria-hidden="true"></i> Contact Us </a> </p>
          </div>

          <div class="col-md-1 col-lg-1 col-xl-1">
          </div>

          <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mb-md-0 mb-4 text-left">

              <h6 class="text-uppercase font-weight-bold">CONTACT US</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
              <i class="fa fa-home mr-3"></i> Aurangabad Distillery Limited, <br> &nbsp;&nbsp;&nbsp;&nbsp; Walchandnagar, Maharashtra - 413114</p>
              <p>
              <i class="fa fa-envelope mr-3"></i> <a href="#" class="text-light"> adplwnr@gmail.com <a> </p>
              <p>
              <i class="fa fa-phone mr-3"></i> 
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

<script>
    function openImg(id){
        console.log(data[id])
        document.getElementById('lightImg').src = data[id];
        // document.getElementById('myLightbox').style = "display:block";
    }
</script>

<script src="./scripts/nav.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>