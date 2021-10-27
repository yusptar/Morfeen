<?php
session_start();
require 'fungsi.php';

//Menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
//kedalam variabel baru yaitu $id
$id=$_GET["id"];

if(hapuscus ($id)>0)
{
    header('Location: admin/production/customer.php');
    exit;
}
else
{
    header('Location:  admin/production/customer.php');
    exit;
    echo "<br>";
    echo mysqli_error($conn);
}
?>