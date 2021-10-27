<?php
session_start();
require 'fungsi.php';

if(isset($_POST['register']))
{
  if(registrasi($_POST)>0)
	{
		echo "
			<script type='text/javascript'>
			alert('Register Berhasil. Silahkan login untuk masuk.');
			document.location.href='auth/login.php';
      </script>";
	}
	else
	{
		echo mysqli_error($conn);
	}
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
              <a class="js-logo-clone">Morfeen Thirteen</a>
            </div>
          </div>

        </div>
      </div>
    </div>

<form action="" method="post">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black"></h2>
            <div class="p-3 p-lg-5 border">
            <h3>Register Form</h3>
            <br><br>
              <div class="form-group ">
                <label for="c_country" class="text-black">Daerah : <span class="text-danger">*</span></label>
                <select name="daerah" class="form-control">
                  <h2>Pilih Daerah :  </h2>
                  <option value="Kota Malang">Kota Malang</option>    
                  <option value="Kab. Malang">Kab. Malang</option>    
                </select>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Username <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="username" placeholder="Username" required="required">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Password (8 characters minimum)<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="password" placeholder="Password" minlength="8" required="required">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Confirm Password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="password2" minlength="8" placeholder="Confirm Password" required="required">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Nama <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="nama" placeholder="Nama" required="required">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Alamat <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="alamat" placeholder="Alamat" required="required">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Kode Pos <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="c_postal_zip" name="kodepos"  placeholder="Kode Pos" required="required">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">E-Mail <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email_address" name="email" placeholder="E-Mail" required="required">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <span class="text-black">( +62 )</span> <input type="number" class="form-control" id="c_phone" name="notelp" placeholder="Phone Number" required="required">
                </div>
              </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Register</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </form>


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
              <p>Build on &mdash; Agustus, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Deny Pratama | All rights reserved
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
    
  </body>
</html>