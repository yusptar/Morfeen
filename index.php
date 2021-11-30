<?php
session_start();
if(isset($_SESSION["login"]))
{
  header("location:all.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Morfeen Official</title>
    <link rel="icon" href="images/logo1.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
  </head>

  <body>
  
  <!-- SEARCH -->
  <div class="site-wrap">
    <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Masukkan Keyword Search . . .">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a class="js-logo-clone">Morfeen Official</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block icons"> 
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children ">
                  <a href="">Login <span class="icon-user"></span></a>
                  <ul class="dropdown">
                    <li><a href="auth/login.php">Login Customer<span class="icon-users"></span></a></li>
                    <li><a href="auth/loginadmin.php">Login Admin <span class="icon-wrench"></span></a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start title-section mb-5 col-12 title-section text-center mb-5 col-12">
            <div class="site-block-cover-content">
            <h1 class="site-navbar site-menu">Selamat Datang</h1>
            <h2>Morfeen Store Sukun</h2>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/storeindex1.JPG" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
        <h2>Event</h2>
        <br><br>
        <h5>Morfeen Thirteen Store :</h5>
        <br>

        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <a href="https://www.tokopedia.com/">
          <img src="images/tokped.jpg" style="width:100%"></a>
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <a href="https://www.zalora.co.id/">
          <img src="images/zalora.jpg" style="width:100%"></a>
          <div class="text"> </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <a href="https://shopee.co.id/">
          <img src="images/shopee.jpg" style="width:100%"></a>
          <div class="text"> </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <a href="https://www.lazada.co.id/">
          <img src="images/lazada.png" style="width:100%"></a>
          <div class="text"> </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <a href="https://www.vipplaza.co.id/">
          <img src="images/vip.jpg" style="width:100%"></a>
          <div class="text"> </div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span>  
        </div>
        <br><br>
          <h2 class="text-uppercase"><span class="d-block">Discover</span> Morfeen Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-4">
          <div class="product-item sm-height  bg-gray">
              <img src="images/g22.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/g1.jpeg" alt="Image" class="img-fluid">
            </div>
            </div>
            
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray">
              <img src="images/g7.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Sale Collection</h2>
            <h1>New Collections Product </h1>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/g20.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 icons">
            <h3 class="footer-heading mb-4">Hint</h3>
            <a class="block-6">
              <h3 class="font-weight-light  mb-0">Kunjungi Instagram Resmi Morfeen Thirteen</h3>
              <br>
              <span class="icon-instagram"></span>
              <a href="https://www.instagram.com/morfeenstore/">instagram.com/morfeenstore</a>
              <h6>dan Second Store Kami</h6>
              <a href="https://www.instagram.com/morfeenstore_2nd/">instagram.com/morfeenstore_2nd</a>
              <br><br><br>
              <p>Build on &mdash; November, 2021</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Tentang Kami :</h3>
                    <ul class="list-unstyled">
                      <li class="address"><a href="https://www.google.com/maps/place/Jl.+Suwari+Sel.+No.7,+Sukun,+Kec.+Sukun,+Kota+Malang,+Jawa+Timur+65147/@-7.9917522,112.6173845,18.51z/data=!4m5!3m4!1s0x2e7882a7c70f1017:0x40699a3246a09d7d!8m2!3d-7.9916457!4d112.6178513?hl=in">
                      Jl. Suwari Selatan No. 07, Sukun, Kota Malang, Jawa Timur</a></li>
                      <li class="phone"><a href="tel://">+62 81234519822</a></li>
                      <li class="email">morfeen@gmail.com</li>
                    </ul>
                  </div>
                </div>

        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by MI 3B | All rights reserved
            </p>
          </div>
          
        </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2500); // Change image every 2 seconds
  }
  </script>
    
  </body>
</html>