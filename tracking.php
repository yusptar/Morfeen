<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");
$idcus = $_SESSION["idcus"];
$cekout = query("SELECT * FROM cekout WHERE idcus = '$idcus'");
$count = query("SELECT COUNT(*) as jumlah FROM addcart WHERE idcus = '$idcus'");
$cart = query("SELECT * FROM addcart where idcus = '$idcus'");
$cart1 = query("SELECT sum(harga) as tot_harga FROM cekout where idcus = '$idcus'");
$cus = query("SELECT * FROM customer WHERE idcus = '$idcus'");
$countcek = query("SELECT COUNT(*) as jumlahcek FROM cekout WHERE idcus = '$idcus'");

$arr_new =  array();
$arr_id =  array();

//count cek
foreach ($countcek as $cd)
{
  $cek = $cd["jumlahcek"];
}

if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}

///popup
foreach ($count as $c) 
{
  $popup = ($c["jumlah"]);
} 

//total harga
// foreach($query as $m)
// {
//   $totalcek = $m["hargatot"];
//   var_dump($totalcek);
// }

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
    <h3><font color="#000000"><span class="icon-user-circle-o"></span>  Selamat Datang : <?php echo $_SESSION["nama"]; ?></font></h3>
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
        
          <div class="main-nav d-none d-lg-block icons">
            <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="all.php">Catalog Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="tracking.php" class="icons-btn d-inline-block bag">Pesanan Saya <span class="number"><?php echo $cek?></span> </a></li>
                <li><a href="logout.php "onclick="return confirm('Apakah yakin akan log out ?')">Log Out</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo $popup?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

<?php if($cek == 0)
{?>
  <h2 class="text-black text-center">History Pesanan Anda Kosong</h2>
  <br>
  <h5 class="text-black text-center">Silahkan Lakukan Transaksi Terlebih Dahulu</h5>
  <?php
}
else
{?>
<font color="#000000">
<?php foreach ($cus as $m):?>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">INVOICE </h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group ">
                <label for="c_country" class="text-black">Daerah      </label> 
                <h5><?php echo $m["daerah"]; ?></h5>
                </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nama     </label>
                  <h5><?php echo $m["nama"]; ?></h5>
                </div>
                </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_address" class="text-black">Alamat      </label>
                  <h5><?php echo $m["alamat"]; ?></h5>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Kode Pos     </label>
                  <h5><?php echo $m["kodepos"]; ?></h5>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email     </label>
                  <h5><?php echo $m["email"]; ?></h5>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone    </label>
                  <h5><?php echo $m["notelp"]; ?></h5>
                </div>
              </div>
  <?php endforeach;?>
                  <h2 class="h3 mb-3 text-black">Nomor Rekening Pembayaran :</h2>
                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BNI</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <p><img src="images/bni.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                      <b>
                      <p class="mb-0">Rekening Bank BNI </p>
                      <p class="mb-0">Nomor Rekening : 108178191</p>
                      <p class="mb-0">Atas Nama : HALO </p>
                      </b>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BCA</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <p><img src="images/bca.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                      <b>
                      <p class="mb-0">Rekening Bank BCA </p>
                      <p class="mb-0">Nomor Rekening : 762973533</p>
                      <p class="mb-0">Atas Nama : HEHE </p>
                      </b>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Konfirmasi Pembayaran</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">
                        <a href ="https://api.whatsapp.com/send?phone=6282232629061&text=Halo%20Kak%20ini%20Bukti%20Transfer%20Saya" type="button" class="btn btn-success">Konfirmasi Pembayaran</a>
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          </div>
          
          <br><br>
          <button type="button" class="btn btn-success btn-lg" onclick="window.print()"><span class="icon-print"> Print Invoice</span></button>
          
          <br><br>
          
          <div class="form-group icons border-dark">
                <label for="c_order_notes" class="text-black text-bold"><h3>History Pesanan :</h3></label><br>
              </div>

              <?php foreach($cekout as $o):?>

              <table class="table table-hover">
                    <thead>
                      <th>ID_Checkout</th>
                      <th>Picture</th>
                      <th>Product</th>
                      <th>Harga_Satuan</th>
                      <th>Jumlah</th>
                      <th>Harga_Total</th>
                      <th>Status</th>
                      <th>Tanggal_Pembelian</th>
                      <?php if($o["status"] == "Pesanan Dibatalkan")
                      {  
                      } 
                      else 
                      { ?>
                        <th>Opsi Aksi</th>
                      <?php 
                      } ?>
                    </thead>
        
                    <tbody>                     
                      <tr>
                        <td><?php echo $o["idcek"];?></td>
                        <td><img height="200px" width="200px" src ="images/<?php echo $o["gambar"]; ?>"></td>
                        <td> <?php echo $o["jenis"];?> <?php echo $o["warna"];?></td>
                        <td>Rp. <?php echo $o["hargasatuan"];?></td>
                        <td><?php echo $o["jumlah"]; ?></td>
                        <td>Rp. <?php echo $o["harga"]; ?></td>
                        <td><b><?php echo $o["status"];?></b></td>
                        <td><?php echo $o["tanggal"];?></td>  
                        <td>
                        <?php if($o["status"] == "Pesanan Dibatalkan")
                        { 
                        } 
                        else 
                        { ?>
                            <a button class="btn btn-danger"
                            type="submit" href="batalkan.php ?id=<?php echo $o["idbarang"];?>"onclick="return confirm('Apakah pembelian dibatalkan?')">
                            <span class="fa fa-cancel"> Cancel Order</span>
                            </button></a>
                        <?php 
                        } ?>
                        </td>
                      </tr>      
                            
                    </tbody>
                    </table>
                <?php endforeach; ?>
                <?php 
                foreach ($cekout as $cektot):
                $idcek = $cektot["idcek"];
                $cektotal = query("SELECT sum(harga) as total FROM cekout where idcek = '$idcek'");
                if(!in_array($idcek, $arr_id)){
                  array_push($arr_id,$idcek);
                  }
                //total
                foreach($cektotal as $x)
                {
                  $sub = $x["total"];
                  $total = $sub;
                  if(!in_array($sub, $arr_new)){
                    array_push($arr_new,$total);
                    }

                }?>
               
                <?php endforeach; ?> 
                      <br><br>
                      <div class="form-group icons border-dark">
                        <label for="c_order_notes" class="text-black text-bold"><h3>Total Pembayaran</h3></label><br>
                      </div>
                      <table class="table table-hover">
                        <thead>
                          <th>ID Check Out</th>
                          <th>Total</th>
                        </thead>
                        <tbody>
                          <?php
                            for ($i=0; $i < count($arr_new); $i++) 
                            { 
                              echo "<tr>";
                              
                              echo "<td> 
                              " , $arr_id[$i];
                              echo "</td>";
                              echo "<td>
                              Rp. " , $arr_new[$i];
                              echo "</td>";
                              
                              echo "</tr>";
                            }?>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
          </font>
    <?php
  }?>
  
  

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
    
  </body>
</html>