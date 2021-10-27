<?php

require '../fungsi.php';

// cek apakah button submit sudah di tekan atau belum
// menggunakan mehtod get untuk mengambil id yg telah
// terseleksi oleh user dan dimasukkan ke dalam variabel 
// baru yaitu $id
$id=$_GET["id"];
$query = ("SELECT * FROM addcart WHERE idadd=$id");
    
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
        editcart($_POST);
        echo "
        <script>
        
        document.location.href='../cart.php';
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
    header("location:../cart.php");
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
				<span class="contact100-form-title"> <div title>Update Jumlah</div>
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Jumlah harus diisi">
					<span class="label-input100">Jumlah </span>
					<input class="input100 text-center" type="number" name="jumlah"  required value="<?php echo $queryid["jumlah"]; ?>">
                </div>
                
				<div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit"><span class="icon-edit"> Update<br>
						</span>
                        </button>
					</div>
                </div>
            </form>
            <!-- <form action="" method="post">
        <div class="container-contact100-form-btn icons">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="back">
							<span class="icon-settings_backup_restore"></span>
                        </button>
					</div>
                </div>
                </form> -->
</body>
</html>