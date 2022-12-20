<?php

    include_once("../../konek.php");

    if(isset($_POST['inputpajakmobil5'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $njkb = $_POST['njkb'];
        $pajak = $_POST['pajak'];
        
        $pkb = (2/100) * $njkb;
        $swd= 143000;
        $tnkb= 100000;
        $admin= 50000;
        $stnk = 250000; 
        
        $pajak = $pkb + $swd + $tnkb + $admin + $stnk;

        $result = "INSERT INTO data_kendaraan_mobil5(username, nama,njkb, pajak) 
                VALUES('$username', '$nama', '$njkb', '$pajak')";
        $sql = mysqli_query($conn, $result);

        if($sql){
            header('Location: ../../daftarpajakkendaraan.php?status=sukses');
        }else {
            header('Location: ../../daftarpajakkendaraan.php?status=gagal');
        }
        
    }else {
        die("Akses dilarang...");

    }

?>