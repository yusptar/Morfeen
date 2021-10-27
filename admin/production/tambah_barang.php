<?php

        include '../../fungsi.php';
        global $conn;

       //ambil data dari tiap elemen dalam form yang disimpan di variable baru
       $jenis                    =($_POST["jenis"]);
       $warna                    =($_POST["warna"]);
       $stok 							=($_POST["stok"]);
       $size            		   =($_POST["size"]);
       $harga               		=($_POST["harga"]);
       $gambar                   =($_POST["gambar"]);

    //    query inserrt data
       $query="INSERT INTO barang VALUES
        ('','$jenis','$warna','$size','$stok','$harga','$gambar')";
       mysqli_query($conn,$query);

       if(mysqli_affected_rows($conn)>0)
       {
        header('Location: crud.php');
       }
       else
       {
        header('Location: crud.php');
        echo "<br>";
        echo mysqli_error($conn);
       }

?>