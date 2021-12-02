<?php
session_start();
require '../../fungsi.php';
$barang = query("SELECT * FROM barang");
$cekout = query("SELECT * FROM cekout ");
$count = query("SELECT COUNT(*) as jumlah FROM cekout WHERE status LIKE '%Menunggu Konfirmasi Pembayaran%'");
$countcek = query("SELECT COUNT(*) as jumlahcek FROM cekout");
$cus = query("SELECT * FROM customer  ");

foreach ($count as $k ) 
{
  $pop = $k["jumlah"];
}

//count cek
foreach ($cus as $cd)
{
  $cd;
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

    <title>Admin Dashboard </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
              
              <a  class="site_title"><i class="fa fa-paw"></i> <span>Morfeen Thirteen</span></a>
            </div>

            <div class="clearfix"></div>
<br><br>
            <!-- menu profile quick info -->
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
                <h3>Confirm Order</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
            
              <div class="col-md-12 col-sm-12 ">
              
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Database Customer <small>Data List</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                       
                      </li>
                      <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                      </li>
                    </ul>
                    <div class="clearfix">
                    
                    </div>
                  </div>

                  <?php if($cd == 0)
                  {?>
                    <h2 class="text-black text-center">Total Customer Kosong</h2>
                    <br>
                    <h5 class="text-black text-center">Belum Ada Customer yang Melakukan Register</h5>
                    <?php
                  }
                  else
                  {?>
                  <div class="x_content">
                  
                      <!-- start of user-activity-graph -->
                      <div id="graph_bar" style="width:100%; height:280px;">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID_Customer</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Daerah</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Confirm Password</th>
                                <th>Kode_Pos</th>th
                                <th>E-Mail</th>
                                <th>No. Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $i=1 ?>
                        <?php foreach($cus as $row):?>
                        <tbody>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $row["idcus"]; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["alamat"]; ?></td>
                                <td><?= $row["daerah"]; ?></td>
                                <td><?= $row["username"]; ?></td>
                                <td><?= $row["password"]; ?></td>
                                <td><?= $row["password2"]; ?></td>
                                <td><?= $row["kodepos"]; ?></td>
                                <td><?= $row["email"]; ?></td>
                                <td><?= $row["notelp"]; ?></td>
                                <td><a button class="btn btn--pill btn--green btn-danger"
                                name="back" type="submit" href="../../hapuscus.php ?id=<?php echo $row["idcus"];?>"onclick="return confirm('Apakah customer ini akan dihapus?')">
                                <span class="fa fa-trash"> Delete</span>
                                </button></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php $i++ ?>
                        <?php endforeach;?>
                    </table>
               
                <?php
                  }
                  ?>
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <!-- <div id="crop-avatar">
                          Current avatar -->
                          <!-- <img class="img-responsive avatar-view" src="../../images/logo.png" alt="Avatar" title="Change the avatar"> -->
                        </div>
                      </div>

                    </div>
                    <div class="col-md-9 col-sm-9 ">

                      </div>
                      
                    </div>
                      <!-- end of user-activity-graph -->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            
                          </div>
                          
                        </div>
                        
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
                </script> by MI 3B| All rights reserved
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
