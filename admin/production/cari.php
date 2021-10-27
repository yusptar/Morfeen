
<?php

require '../../fungsi.php';
global $conn;
$barang = query("SELECT * FROM barang");

//cari adalah function cari dari keyword adalah name dari inputan text
$barang = cari($_POST["keyword"]);
var_dump($barang);

   
header('location:crud.php');
?>