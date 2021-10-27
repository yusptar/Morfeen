<?php
session_start();
require 'fungsi.php';

//Menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
//kedalam variabel baru yaitu $id
$id=$_GET["id"];

if(hapuscart ($id)>0)
{
    // echo "
    // <script>
    //     alert ('data berhasil dihapus');
    //     history.back(self);
    // </script>";
    header("location:cart.php");
}
else
{
    // echo "
    // <script>
    //     alert ('data gagal dihapus');
    //     history.back(self);
    // </script>";    
    // echo "<br>";
    echo mysqli_error($conn);
}
?>