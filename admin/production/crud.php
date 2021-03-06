<?php
session_start();
require '../../fungsi.php';

$barang = query("SELECT * FROM barang");

$count = query("SELECT COUNT(*) as jumlah FROM cekout WHERE status LIKE '%Menunggu Konfirmasi Pembayaran%'");

foreach ($count as $k ) 
{
  $pop = $k["jumlah"];
}

   //tombol cari ditekan
   // cari pada line 7 adalah name dari button
if (isset($_POST["cari"]))
{
   //cari adalah function cari dari keyword adalah name dari inputan text
   $barang = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../images/logo.png" type="image/ico" />

    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <br>
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Morfeen Thirteen</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <br><br>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin Morfeen Thirteen</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <br><br>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="admin.php"><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a href="crud.php"><i class="fa fa-edit"></i> CRUD Data Barang </span></a>
                    
                  </li>
                  
                  <li><a href="konfirmasi.php"><i class="fa fa-bar-chart-o"></i> Konfirmasi Pesanan </span></a>
                    
                  </li>

                  <li><a href="customer.php"><i class="fa fa-list"></i> Database Customer </span></a>
                    
                  </li>

                  <li><a href="addadmin.php"><i class="fa fa-plus-square"></i> Tambah Admin Baru </span></a>
                    
                  </li>
                </ul>  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../logoutadmin.php "onclick="return confirm('Apakah yakin akan log out ?')">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../images/logo.png" alt="">Admin Morfeen Thirteen
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item"  href="../../logoutadmin.php "onclick="return confirm('Apakah yakin akan log out ?')"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="konfirmasi.php" class="dropdown-toggle info-number">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?php echo $pop?></span>
                  </a>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Create, Read, Update and Delete Data Barang</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <!-- <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Create Barang <small>Add Barang</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                       
                      </li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      </p>
                      <span class="section">Create Data :</span>
                      
                  <form action="tambah_barang.php" method="post">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deskripsi Jenis Produk</label>
                        <div class="col-md-6 col-sm-6">
                          <input  class="form-control" name="jenis" placeholder="jenis . . ." required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Warna 
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="text"  name="warna" required="required" class="form-control" placeholder="warna . . .">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Size 
                        </label>
                        <div class="col-md-6 col-sm-6">
                        <select name="size" class="form-control" required="required">
                            
                            <option value="S">S</option>    
                            <option value="M">M</option> 
                            <option value="L">L</option>   
                            <option value="XL">XL</option>   
                            <option value="XXL">XXL</option>   
                            <option value="XXXL">XXXL</option>      
                        </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Stock 
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="number"  name="stok" required="required"  class="form-control" placeholder="stock . . .">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="website">Harga 
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="text"  name="harga" required="required" placeholder="harga . . ." class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="occupation">Gambar 
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input  type="file" name="gambar" placeholder="Input Gambar" class="optional form-control" required="required">
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <a href="crud.php" type="busubmittton" class="btn btn-danger">Cancel</a>
                          
                          <button type="submit" class="btn btn-success" name="save">Submit</button>
                          
                        </div>
                      </div>
                    </div>
                    </form>
            
                    <br>
            <br><br>
			<div class ="icons">
            <!-- <form action="cari.php" method="post">
                <input type="text" name="keyword" size="40" class="form-control"
                placeholder="Cari Daftar Barang" autocomplete="off" required="required">
                <button type="submit" class="btn btn-success" name="cari"><span class="fa fa-search"> Search </span></button>
            </form> -->
			<br><br>
			
			<!-- <div class="alert alert-info" role="alert">
				 <a href="crud.php" class="alert-link">Show All</a>
			</div> -->
			
			</div>
        <br><br>
        <div class="table-responsive">
	    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3>Daftar Barang Tersedia <span class="fa fa-check"></span></h3>
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Jenis</th>
					<th>Warna</th>
					<th>Size</th>
					<th>Stok</th>
					<th>Harga</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php $i=1 ?>
			<?php foreach($barang as $row):?>
      <!-- <?php if($row["stok"] <=0) 
      {
        echo "
        <script>
        alert('Stok Barang Habis. Silahkan Update Stok');
        </script>";
      }
      ?> -->
			<tbody>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["jenis"]; ?></td>
					<td><?= $row["warna"]; ?></td>
					<td><?= $row["size"]; ?></td>
					<td><?= $row["stok"]; ?></td>
					<td>Rp. <?= $row["harga"]; ?></td>
					<td> <img src ="../../images/<?= $row["gambar"]; ?>" height="200px" width="200px" alt="Image" class="img-fluid" ></td>
					<td>
						<div class="p-t-10 icons">
							<a button class="btn btn--pill btn--green btn-primary" 
							name="back" type="submit" href="../../tambah/edit.php ?id=<?php echo $row["idbarang"];?>">
							<span class="fa fa-edit"> Edit</span>
							</button></a>
							
							<a button class="btn btn--pill btn--green btn-danger"
							name="back" type="submit" href="../../hapus.php ?id=<?php echo $row["idbarang"];?>"onclick="return confirm('Apakah data ini akan dihapus?')">
							<span class="fa fa-trash"> Delete</span>
							</button></a>
							
						</div>
					</td>
				</tr>
				<?php $i++ ?>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
	</div>
	</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
        <div class="pull-center">
             <p>
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> by MI 3B | All rights reserved
              </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>