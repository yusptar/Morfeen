<?php
 session_start();
 require '../fungsi.php';
 $barang = query("SELECT * FROM barang");
 if(isset($_POST['submit']))
    {
        //ambil data dari tiap elemen dalam form yang disimpan di variable baru
        $jenis                          	=($_POST["jenis"]);
        $warna                           	=($_POST["warna"]);
		$size            					=($_POST["size"]);
		$stok 								=($_POST["stok"]);
		$harga               				=($_POST["harga"]);
        $gambar                         	=($_POST["gambar"]);

        //query inserrt data
        $query="INSERT INTO barang
                VALUES
                ('','$jenis','$warna','$size','$stok','$harga','$gambar')";
        mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn)>0)
        {
            echo "
                <script>
				
				history.back(self);
                </script>
            ";
        }
        else
        {
            // echo "
            //     <script>
			// 	alert('data gagal disimpan')
			// 	history.back(self);
            //     </script>
            // ";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }

    //tombol cari ditekan
    // cari pada line 7 adalah name dari button
if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}
if(isset($_POST["back"]))
{
    header("location:../all.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Morfeen &ndash; Distro & CLothing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <!-- JQuery Date -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="fonts/icomoon/style.css">

</head>
<body>
    	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="" method="POST">
			
			<button onclick="window.location.href='../konfirmasibayar.php'" type="button" class="btn btn-warning">Konfirmasi Pembayaran</button>
			<br><br><br>
			<button type="submit" class="btn btn-danger" onclick="window.location='../logoutadmin.php'">Log Out</button>
			<br><br>
			
				<br><br>
				<span class="contact100-form-title"> <div title>TAMBAH DATA BARANG</div>
				</span>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Nama harus diisi">
					<span class="label-input100">Jenis</span>
					<input class="input100" type="text" name="jenis" required="required" placeholder="Input Jenis">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Alamat harus diisi">
					<span class="label-input100">Warna</span>
					<input class="input100" type="text" name="warna" required="required" placeholder="Input Warna">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Telepon harus diisi">
					<span class="label-input100">Size</span>
					<input class="input100" type="text" name="size" required="required" placeholder="Input Size">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Kamar harus diisi">
					<span class="label-input100">Stok Barang</span>
					<input class="input100" type="text" name="stok" required="required" placeholder="Input Harga">
                </div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Kamar harus diisi">
					<span class="label-input100">Harga</span>
					<input class="input100" type="text" name="harga" required="required" placeholder="Input Harga">
                </div>

						<div class="wrap-input100 validate-input form-group" data-validate = "Nomor Kamar harus diisi">
							<span class="label-input100">Gambar</span>
							<input class="input100" type="file" name="gambar" required="required" placeholder="Input Gambar">
							<!-- <input type="submit" value="Upload Image" name="submit"> -->
						</div>
                
				<div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit">Tambah <br>
						<span class="icon-plus-square"></span>
                        </button>
					</div>
                </div>
            </form>
            <br>
            <br><br>
			<div class ="icons">
            <form action="" method="post">
                <input type="text" name="keyword" size="40" class="form-control"
                placeholder="Cari Daftar Barang" autocomplete="off" required="required">
                <button type="submit" class="btn btn-success" name="cari">Search <span class="icon-search"></span></button>
            </form>
			<br><br>
			
			<div class="alert alert-info" role="alert">
				 <a href="tambah.php" class="alert-link">Show All</a>
			</div>
			
			</div>
        <br><br>
        <div class="table-responsive">
	    <div class="col-md-12 col-sm-12 col-xs-12">
		<table class="table table-hover table-bordered table-striped" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Jenis</th>
					<th>Warna</th>
					<th>Size</th>
					<th>Stok</th>
					<th>Harga</th>
					<th>Gambar</th>
					<th>Opsi Aksi</th>
				</tr>
			</thead>
			<?php $i=1 ?>
			<?php foreach($barang as $row):?>
			<tbody>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["jenis"]; ?></td>
					<td><?= $row["warna"]; ?></td>
					<td><?= $row["size"]; ?></td>
					<td><?= $row["stok"]; ?></td>
					<td>Rp. <?= $row["harga"]; ?></td>
					<td> <img src ="../images/<?= $row["gambar"]; ?>" alt="Image" class="img-fluid" ></td>
					<td>
						<div class="p-t-10 icons">
							<a button class="btn btn--pill btn--green btn-primary" 
							name="back" type="submit" href="edit.php ?id=<?php echo $row["idbarang"];?>">
							<span class="icon-edit"></span>
							</button></a>
							<br><br>
							<a button class="btn btn--pill btn--green btn-danger"
							name="back" type="submit" href="../hapus.php ?id=<?php echo $row["idbarang"];?>"onclick="return confirm('Apakah data ini akan dihapus')">
							<span class="icon-trash"></span>
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

		<span class="contact100-more">
				Morfeen Thirteen
		</span>
	</div>
	<div id="dropDownSelect1"></div>
</body>
</html>