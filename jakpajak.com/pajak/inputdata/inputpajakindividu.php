<?php

    include_once("../konek.php");

    if(isset($_POST['inputpajakindividu'])){
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $persenpjk = $_POST['persenpjk'];
        $pajak = $_POST['pajak'];

        if($gaji < 50000000){
            $pajak = $gaji * (5/100);
            $persenpjk = "5";
        }elseif($gaji >= 50000000 && $gaji <= 250000000){
            $pajak = $gaji * (15/100);
            $persenpjk = "15";
        }elseif($gaji > 250000000 && $gaji <= 500000000){
            $pajak = $gaji * (25/100);
            $persenpjk = "25";
        }elseif($gaji > 500000000){
            $pajak = $gaji * (30/100);
            $persenpjk = "30";
        }
        
        
        $result = "INSERT INTO pjkpenghasilan(nama, gaji, persenpjk, pajak) 
                VALUES('$nama', '$gaji', '$persenpjk', '$pajak')";
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