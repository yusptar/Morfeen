<?php
session_start();
require 'fungsi.php';

//Menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
//kedalam variabel baru yaitu $id
$id=$_GET["id"];

if(batalkan ($id)>0)
{
    echo "
    <script>
       
        history.back(self);
    </script>";
}
else
{
    // echo "
    // <script>
    //     alert ('data gagal Konfirmasi');
    //     history.back(self);
    // </script>";    
    echo "<br>";
    echo mysqli_error($conn);
}
?>