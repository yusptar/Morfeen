<?php
    //membuat koneksi
    $conn=mysqli_connect("localhost","root","","morfeen");

    //Cek koneksi
    if(!$conn)
    {
        die('Connection Failed : '.mysqli_connect_errno()
        .' - '.mysqli_connect_error());
    }

    //ambil data dari tabel 
    $result=mysqli_query($conn,"SELECT * FROM barang");
    $rescart=mysqli_query($conn,"SELECT * FROM addcart");
    
    //function query
    function query($query_kedua)
    {
        global $conn;
        $result = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[]=$row;
        }
        return $rows;
    }

    function querycart($query_kedua)
    {
        global $conn;
        $rescart = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($rescart))
        {
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;
        $jenis=htmlspecialchars($data["jenis"]);
        $warna=htmlspecialchars($data["warna"]);
        $size=htmlspecialchars($data["size"]);
        $harga=htmlspecialchars($data["harga"]);
        $gambar=htmlspecialchars($data["gambar"]);

    //    var_dump($dat);

        $query= "INSERT INTO barang VALUES
                ('','$jenis','$warna','$size','$harga','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    
    function confirm($id)
    {
        global $conn;
        mysqli_query($conn,"UPDATE cekout SET status = 'Pembayaran Anda Telah Kami Terima. Mohon Tunggu 2-3 Hari Pengiriman Barang. 
        Terimakasih Telah Berbelanja di Morfeen Thirteen' WHERE idcek ='$id'");
        return mysqli_affected_rows($conn);
    }

    function batalkan($id)
    {
        global $conn;
        mysqli_query($conn,"UPDATE cekout SET status = 'Pesanan Dibatalkan' WHERE idbarang = '$id'");
        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM barang WHERE idbarang=$id");
        return mysqli_affected_rows($conn);
    }

    function hapuscart($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM addcart WHERE idadd=$id");
        return mysqli_affected_rows($conn);
    }

    function hapuscek($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM cekout WHERE idcek='$id'");
        return mysqli_affected_rows($conn);
    }

    function hapuscus($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM customer WHERE idcus=$id");
        return mysqli_affected_rows($conn);
    }

    function edit($data)
    {
        global $conn;

        $id                                 =$data ["id"];
        $jenis                          	=$data["jenis"];
        $warna                           	=$data["warna"];
        $size            					=$data["size"];
        $stok            					=$data["stok"];
        $harga               				=$data["harga"];
        // $gambar                         	=$data["g_bj"];

        $query="UPDATE barang SET
            jenis ='$jenis',
            warna = '$warna',
            size = '$size',
            stok = '$stok',
            harga = '$harga'
            WHERE idbarang = '$id' ";
            // die($query);
        mysqli_query($conn,$query);
        // return mysqli_affected_rows($conn);
    }

    function editcart($data)
    {
        global $conn;
        session_start();

        $id_barang = $_GET["id"];
        $cart = mysqli_query($conn,"SELECT * FROM addcart where idadd = '$id_barang'");

        $jumlah            					= $data ["jumlah"];
        
        foreach ($cart as $c) 
        {
           $satuan = $c["hargasatuan"];
            // die($hargatot);
        }

        if($jumlah <=0)
        {
            echo "<script>
            alert('Jumlah Barang dalam Keranjang 0 atau Kurang dari 0. Cart Akan Terhapus.');
            </script>";

            $query = "DELETE from addcart WHERE idadd = '$id_barang'";
            mysqli_query($conn,$query);
            
        }
        else
        {
            $harga_baru = $satuan * $jumlah;

            $query = "UPDATE addcart SET jumlah = '$jumlah', harga = '$harga_baru' WHERE idadd = '$id_barang'";
            mysqli_query($conn,$query);
        }
        

    }

    function caricart($keyword)
    {
        $sql = " SELECT * FROM addcart
                WHERE stok >= 0 AND  
                jenis LIKE '%$keyword%' ";
        // kembalian ke function query dengan parameter $sql
        return query($sql);
        //pastikan $keyword pada line 77 terdapat petik satu karena nilai berupa String
    }

    function cari($keyword)
    {
        $sql = " SELECT * FROM barang
                WHERE
                stok >= 0 AND  
                jenis LIKE '%$keyword%'";
        // kembalian ke function query dengan parameter $sql
        return query($sql);
        //pastikan $keyword pada line 77 terdapat petik satu karena nilai berupa String
    }

    function cart($id)
    {
        
    }

    function registrasi($data)
    {
        global $conn;

        //stripcslashes digunakan untuk menghilangkan blackslashes
        $username                           =strtolower(stripcslashes($data["username"]));
        $daerah                          	=($data["daerah"]);
        $nama                           	=($data["nama"]);
        $alamat 							=($data["alamat"]);
        $kodepos               			    =($data["kodepos"]);
        $email                          	=($data["email"]);
        $notelp                         	=($data["notelp"]);

        //mysqli_real_escape_string untuk memberikan perlindungan terhadap karakter2 unik (sql_injection)
        //pada mysqli_real_escape_string terdapat 2 parameter
        $password=mysqli_real_escape_string($conn,$data["password"]);
        $password2=mysqli_real_escape_string($conn,$data["password2"]);

        //cek username sudah ada atau belum
        $result=mysqli_query($conn,"SELECT username FROM customer WHERE username='$username'");

        //cek kondisi jika bernilai true maka cetak echo
        if(mysqli_fetch_assoc($result))
        {
            echo 
            "
                <script type='text/javascript'>
                    alert('Username Sudah Ada');
                    history.back(self);
                </script>
            ";
            //agar proses insertnya gagal
            return false;
        }

        //cek konfirmasi password
        if($password!=$password2)
        {
            echo "
            <script type='text/javascript'>
                    alert('Password Anda Tidak Sama');
                    history.back(self);
                </script>
                ";
            //agar proses insertnya gagal
            return false;
        }

        //enkripsi password
        //$password=md5($password);

        // $password=password_hash($password,PASSWORD_DEFAULT);

        //var_dump($password);

        //tambahkan user baru ke database
        mysqli_query($conn,"INSERT INTO customer VALUES('','$nama','$alamat','$daerah','$username','$password','$password2','$kodepos','$email','$notelp')");
        return mysqli_affected_rows($conn);
    }

    function upload()
    {
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpfile = $_FILES['gambar']['tmp_name'];

        if($error===4)
        {
            //pastikan pada inputan gambar tidak terdapat attribute required
            echo "
                <script>
                    alert('Tidak ada gambar yang di upload');
                </script>
                ";
            return false;
        }

        $jenis_gambar=['jpg', 'jpeg', 'gif', 'png'];
        $pecah_gambar=explode('.', $nama_file);
        $pecah_gambar=strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar,$jenis_gambar))
        {
            echo "
            <script>
                alert('yang Anda upload bukan file gambar');
            </script>
            ";
            return false;
        }

        // cek kapasitas gambar dalam byte. jika 1000000 byte = 1 Megabyte
        if($ukuran_file > 10000000)
        {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar');
                </script>
            ";
            return false;
        }

        move_uploaded_file($tmpfile, 'image/'. $nama_file);

        // kita return nama filenya agar dapat masuk ke $gambar=$upload() pada function tambah
        return $nama_file;
    }
?>    