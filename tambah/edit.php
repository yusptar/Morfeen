<?php
require '../fungsi.php';
// cek apakah button submit sudah di tekan atau belum
// menggunakan mehtod get untuk mengambil id yg telah
// terseleksi oleh user dan dimasukkan ke dalam variabel 
// baru yaitu $id
$id=$_GET["id"];
$query = ("SELECT * FROM barang WHERE idbarang=$id");
    
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1)
{
    $queryid = mysqli_fetch_assoc($result);
}

// cek apakah button submit sudah ditekan atau belum
if(isset($_POST["submit"]))
{
    // cek sukses data dirubah menggunakan function edit pada fungsi.php
    if($_POST>0)
    {
        edit($_POST);
        echo "
        <script>
        
        document.location.href='../admin/production/crud.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        
        history.back(self);
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
}

if(isset($_POST["back"]))
{
    header("location:../admin/production/crud.php");
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
			<form class="" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="id" value="<?php echo $id?>">
				<span class="contact100-form-title"> <div title>Update Data Barang</div>
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nama harus diisi">
					<span class="label-input100">Jenis</span>
					<input class="input100" type="text" name="jenis" id="jenis" required value="<?php echo $queryid["jenis"]; ?>">
				</div>
				

				<div class="wrap-input100 validate-input" data-validate = "Alamat harus diisi">
					<span class="label-input100">Warna</span>
					<input class="input100" type="text" name="warna" id="warna" required value="<?php echo $queryid["warna"]; ?>">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Telepon harus diisi">
					<span class="label-input100">Size</span>
					<input class="input100" type="text" name="size" id="size" required value="<?php echo $queryid["size"]; ?>">
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Nomor Telepon harus diisi">
					<span class="label-input100">Stok Barang</span>
					<input class="input100" type="number" name="stok" id="stok" required value="<?php echo $queryid["stok"]; ?>">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Kamar harus diisi">
					<span class="label-input100">Harga</span>
					<input class="input100" type="text" name="harga" id="harga" required value="<?php echo $queryid["harga"]; ?>">
                </div>
                <!-- <div class="wrap-input100 validate-input" data-validate = "Nomor Kamar harus diisi">
					<span class="label-input100">Gambar</span>
                    <input type="file" name="g_bj" id="g_bj" value="../images/<?= $queryid["gambar"]; ?>">
                </div> -->
                
				<div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit"><span class="icon-edit"> Update <br>
						</span>
                        </button>
					</div>
                </div>
            </form>
            
</body>
</html>