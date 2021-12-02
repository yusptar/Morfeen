<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");

if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Morfeen &ndash; Distro & CLothing</title>
    <link rel="icon" href="images/logo.png">
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
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
        <form action="#" method="post">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <input  type="text" name="keyword" class="form-control" placeholder="Search . . ." autocomplete="off" required="required">
            <button class="btn btn-link" type="submit" name="cari"></button>
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone">Morfeen Thirteen</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="all.php">Catalog Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Tracking</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="auth/loginadmin.php" class="icons-btn d-inline-block"><span class="icon-user-o"></span></a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">Shop Now</h2>
            <h1>Morfeen Thirteen</h1>
            <p><a href="shop.php" class="btn btn-black rounded-0">Belanja Sekarang</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/g19.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>
            <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        <div class="row">
        <div class="row">
        <?php foreach($barang as $row):?>
        <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src ="images/<?= $row["gambar"]; ?>" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"> <?=$row["jenis"]; ?> <?=$row["warna"]; ?></a></h2>
            <h3 class="item-title"><a href="#">Size <?=$row["size"]; ?></a></h3> 
            <h3 class="item-title"><a href="#">Stok : <?=$row["stok"]; ?></a></h3>
            <strong class="item-price"> <?=$row["harga"]; ?> </strong>
            
            <br><br>
            <a button type="submit" class="btn btn-success" href="cart.php ?id = <?=$row["idbarang"];?>">Add to Cart <span class="icon-shopping-cart"></span> </button> </a> 
          </div>
        <?php endforeach;?>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/g11.jpeg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Blue T-Shirt</a></h2>
                  <strong class="item-price">Rp. 130.000</strong>
                  <br><br>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/g13.jpeg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Black Morf Jumper</a></h2>
                  <strong class="item-price"> Rp. 295.000</strong>
                  <br><br>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/g22.jpeg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">T-Shirt Strips</a></h2>
                  <strong class="item-price"> Rp. 135.000</strong>

                  <br><br>
                  <button type="button" class="btn btn-success">Add to Cart</button>

                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/g8.jpeg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Blue Morf Hats</a></h2>
                  <strong class="item-price"> Rp. 90.000</strong>
                  <br><br>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/g23.jpeg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Morf Raglan</a></h2>
                  <strong class="item-price">Rp. 130.000</strong>
                  <br><br>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Hint</h3>
            <a href="shop.php" class="block-6">
              <h3 class="font-weight-light  mb-0">Temukan clothing kesukaan mu di Morfeen</h3>
              <br>
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
                <li class="address"><a href="#">Jl. Swari Selatan No. 07, Sukun, Kota Malang, Jawa Timur</a></li>
                <li class="phone"><a href="tel://">+62 1011001110010</a></li>
                <li class="email">emailaddress@domain.com</li>
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
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>