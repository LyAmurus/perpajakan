<?php

    include_once("../../konek.php");

    if(isset($_POST['inputpajakmotor5'])){
        $nama = $_POST['nama'];
        $njkb = $_POST['njkb'];
        $pajak = $_POST['pajak'];
        
        $pkb = (2/100) * $njkb;
        $swd= 35000;
        $tnkb= 100000;
        $admin= 50000;
        $stnk = 125000;
        
        $pajak = $pkb + $swd + $tnkb + $admin + $stnk;

        $result = "INSERT INTO data_kendaraan_motor5(nama,njkb, pajak) 
                VALUES('$nama', '$njkb', '$pajak')";
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