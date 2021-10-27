<?php

        include '../../fungsi.php';
        global $conn;

       //ambil data dari tiap elemen dalam form yang disimpan di variable baru
       $username                    =($_POST["user"]);
       $pass                    =($_POST["pass"]);
       $passs 							=($_POST["passs"]);

       //cek username sudah ada atau belum
        $result=mysqli_query($conn,"SELECT username FROM admin WHERE username='$username'");

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
        if($pass!=$passs)
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

    //    query inserrt data
       $query="INSERT INTO admin VALUES
        ('','$username','$pass','$passs')";
       mysqli_query($conn,$query);

       if(mysqli_affected_rows($conn)>0)
       {
        echo "
        <script type='text/javascript'>
                alert('Tambah Admin Baru Berhasil');
                history.back(self);
            </script>
            ";
       }
       else
       {
        header('Location: addadmin.php');
        echo "<br>";
        echo mysqli_error($conn);
       }

?>