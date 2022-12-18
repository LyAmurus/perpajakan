<?php

    include_once("../konek.php");

    if(isset($_POST['inputpajakindividu'])){
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $persentase = $_POST['persentase'];
        $pajak = $_POST['pajak'];

        if($gaji < 50000000){
            $pajak = $gaji * (5/100);
            $persentase = "5";
        }elseif($gaji >= 50000000 && $gaji <= 250000000){
            $pajak = $gaji * (15/100);
            $persentase = "15";
        }elseif($gaji > 250000000 && $gaji <= 500000000){
            $pajak = $gaji * (25/100);
            $persentase = "25";
        }elseif($gaji > 500000000){
            $pajak = $gaji * (30/100);
            $persentase = "30";
        }
        
        
        $result = "INSERT INTO data_pajak(nama, gaji, persentase, pajak) 
                VALUES('$nama', '$gaji', '$persentase', '$pajak')";
        $sql = mysqli_query($conn, $result);

        if($sql){
            header('Location: ../daftarpajakindividu.php?status=sukses');
        }else {
            header('Location: ../daftarpajakindividu.php?status=gagal');
        }
        
    }else {
        die("Akses dilarang...");

    }

?>