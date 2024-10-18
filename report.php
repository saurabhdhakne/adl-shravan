<?php 

include './admin/check_con.php';
 
  $sql = "SELECT * FROM reports WHERE reporttype='agm-notice' ORDER BY dateTime DESC  " ;

  $agmn = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='annual-report' ORDER BY dateTime DESC  " ;

  $ar = mysqli_query($conn,$sql);
  
  $sql = "SELECT * FROM reports WHERE reporttype='annual-returns' ORDER BY dateTime DESC  " ;

  $anr = mysqli_query($conn,$sql);
  
  $sql = "SELECT * FROM reports WHERE reporttype='agm-notice' ORDER BY dateTime DESC  " ;

  $agmn = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='board-meeting-notice' ORDER BY dateTime DESC  " ;

  $bmn = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='financial-result' ORDER BY dateTime DESC  " ;

  $fr = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='share-holding-pattern' ORDER BY dateTime DESC  " ;

  $shp = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='adl-postal' ORDER BY dateTime DESC  " ;

  $adlp = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='half-year-notice' ORDER BY dateTime DESC  " ;

  $hyn = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='voting-result' ORDER BY dateTime DESC  " ;

  $vr = mysqli_query($conn,$sql);

  $sql = "SELECT * FROM reports WHERE reporttype='policies-and-codes' ORDER BY dateTime DESC  " ;

  $pac = mysqli_query($conn,$sql);

?>

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
    <style>
      .shadowme{
          box-shadow:3px 3px 6px rgba(0,0,0,.4);
      }
      .data-head-table h1{
        border-bottom:5px solid #ec6041;
      }
      tr:hover{
        color: #ec6041;
        cursor:pointer;
      }
      .rpcard{
        padding:20px;
      }
      .rounded{
        border-radius:20px;
      }
      .main-report{
        padding-right:5%;
        padding-left:5%;
      }
    </style>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p class="mr-4"> <a href="/" > Home </a> </p>
    <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
    <p class="mr-4"> <a href="products.html"> Products </a> </p>
    <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
    <p class="mr-4" > <a href="report.php"> Investors </a> </p>
    <p class="mr-4"> <a href="contact.html"> Contact us </a> </p>
    <p class="mr-4"> <a href="enquire.html"> Enquire Now </a> </p>
    <p class="mr-2"> 
      <div class="dropdown text-light">
        <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About us
        </a>
        <div class="dropdown-menu bg-black" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Overiew</a>
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
            <div class="button-o d-flex " onclick=" window.location.href='contact.html'">
              <button class="btn btn-0 d-flex justify-content-center align-items-center" onclick="window.location='enquire.html'"> ENQUIRE NOW</button>
              <button class="btn btn-1"> </button>
              <button class="btn btn-2"> </button>
            </div>
          </div>
          
        </div>

      </div>

      <div class="col-md-12 nav pt-2 pb-2 classinitial d-flex align-items-center" id="nav">
        
        <div class="col-md-8 offset-md-2 text-center d-flex justify-content-center mt-3 mid">
          <p class="mr-4"> <a href="/" > Home </a> </p>
          <p class="mr-4"> <a href="gallery.php"> Gallery </a> </p>
          <p class="mr-4"> <a href="products.html"> Products </a> </p>
          <p class="mr-4"> <a href="certification.html"> Certification </a> </p>
          <p class="mr-4 active"> <a href="report.php"> Investors </a> </p>
          <p class="mr-4"> <a href="contact.html"> Contact us </a> </p>
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
                <h1 class=display-3> Aurangabad <span>  Distillery </span> Limited </h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 about-m-base card d-flex justify-content-center align-items-center">
                <h1> Our <span> Investors </span> </h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row main-report mb-5 mt-5 ">

        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (1).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> Financial Report </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table text-light" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>

                            <?php 
                             $lengths = 0;
                              if ($fr->num_rows > 0) {
                                while ($row = $fr->fetch_assoc()) {
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $report = $row['report'];
                                    $lengths++;
                            ?>

                                <tr>
                                    <th scope="row"> <?php echo $lengths;  ?> </th>
                                    <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                    <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                </tr>

                            <?php  } }  ?>
                                  
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>

       
        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (6).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> Annual Report </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                                  <?php 
                                     $lengths = 0;
                                      if ($ar->num_rows > 0) {
                                        while ($row = $ar->fetch_assoc()) {
                                              $id = $row['id'];
                                              $title = $row['title'];
                                              $report = $row['report'];

                                              $lengths++;
                                        ?>
  
                                            
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  } } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>
        
        
        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (6).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> Annual Returns </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                                  <?php 
                                     $lengths = 0;
                                      if ($anr->num_rows > 0) {
                                        while ($row = $anr->fetch_assoc()) {
                                              $id = $row['id'];
                                              $title = $row['title'];
                                              $report = $row['report'];

                                              $lengths++;
                                        ?>
  
                                            
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  } } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>
        
        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (11).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-10 m-0 p-0"> Share Holding Pattern </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
            
                                  <?php 
                                        
                                        $lengths = 0;

                                        if ($shp->num_rows > 0) {
                                          while ($row = $shp->fetch_assoc()) {
                                              $id = $row['id'];
                                              $title = $row['title'];
                                              $report = $row['report'];

                                              $lengths++;
                                        ?>
                                
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  }}  ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>

        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (5).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> Half Year Notice </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                              <?php 
                                 $lengths = 0;
                                  if ($hyn->num_rows > 0) {
                                    while ($row = $hyn->fetch_assoc()) {
                                          $id = $row['id'];
                                          $title = $row['title'];
                                          $report = $row['report'];
                                          $lengths++;
                                    ?>
  
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php } } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>

        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (8).webp" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-10 m-0 p-0"> Annual General Meeting </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                                      
                                  <?php 

                                      $lengths = 0;
                                      
                                       if ($agmn->num_rows > 0) {
                                        while ($row = $agmn->fetch_assoc()) {
                                          $id = $row['id'];
                                          $title = $row['title'];
                                          $report = $row['report'];

                                          $lengths++;
                                    ?>


  
                                  
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  }  } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>

        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (2).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> Board Meeting </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                          <?php 


                               $lengths = 0;
                                if ($bmn->num_rows > 0) {
                                  while ($row = $bmn->fetch_assoc()) {
                                      $id = $row['id'];
                                        $title = $row['title'];
                                        $report = $row['report'];

                                        $lengths++;
  
                                  ?>
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  } } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>
      
        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (7).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-4 m-0 p-0"> Voting </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
            
                      
                                  <?php 


                                      $lengths = 0;

                                      if ($vr->num_rows > 0) {
                                        while ($row = $vr->fetch_assoc()) {
                                        $id = $row['id'];
                                          $title = $row['title'];
                                        $report = $row['report'];
                                          $lengths++;
  
                                  ?>
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  } }  ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>

        <div class="col-md-12 offset-md col-15 bg-black text-light shadowme rounded rpcard mt-4" style="overflow-x:scroll">
            <div class="row data-head-table" >
              <div class="col-md-6">
                <img src="./images/rp (3).jpg" class="rounded" width="100%" alt="">
              </div>
              <div class="col-md-6 text-white" >
                <h1 class="col-md-8 m-0 p-0"> <small> Policy & Announcement </small> </h1>
                <div class="col-12  mt-4" style="height:250px; overflow-y:scroll">
                  <table class="table" >
                      <thead class="thead-dark">
                          <!-- <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Report</th>
                          </tr> -->
                      </thead>
                      <tbody>
                        
                                  <?php 

                                  $lengths = 0;
                                  if ($pac->num_rows > 0) {
                                    while ($row = $pac->fetch_assoc()) {
                                      $id = $row['id'];
                                        $title = $row['title'];
                                        $report = $row['report'];
                                        $lengths++;
                                  ?>
  
                                  <tr>
                                      <th scope="row"> <?php echo $lengths;  ?> </th>
                                      <td class="ml-0 pl-0" onclick="openReport('<?php echo $report ?>')"> <?php echo $title;  ?> </td>
                                      <!-- <td> <input type="button" value="Open" class="btn btn-primary" onClick="openReport('<?php echo $report ?>')"> </td> -->
                                  </tr>
  
                                  <?php  } } ?>
                                  
                          </tbody>
                  </table>
                </div>
              </div>
              
            </div>
        </div>


        <!-- End here -->
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
<script src="./scripts/nav.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="modal fade ISO-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="height: 90vh;" id="reportObj">
            </div>
        </div>
</div>

<script>
        function openReport(report){
            document.getElementById('reportObj').innerHTML = ' <object data="./admin/'+ report +'" type="application/pdf" width="100%" height="100%"> <p>Unable to see PDF -  <a href="./admin/'+ report +'">Click here...</a> to download PDF</p> </object>' ;
            console.log(report);
            $('#myModal').modal('show')

        }
        
        function updateTotal(){
          document.getElementById("total").innerHTML = "<?php echo $lengths ; ?> " ; 
        }updateTotal();

</script>




</body>
</html>