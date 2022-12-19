<?php

    include_once("../konek.php");

    if(isset($_POST['inputpajakperusahaan'])){
        $namapt = $_POST['namapt'];
        $bruto = $_POST['bruto'];
        $pkp = $_POST['pkp'];
        $pph = $_POST['pph'];

        if($bruto < 4800000000){
            $pph = ((50/100)*(22/100)) * $pkp;
        }else if($bruto >= 4800000000 && $bruto <=50000000000){
            $pkpfasilitas = (4800000000/$bruto)* $pkp;
            $pkpnonfasilitas = $pkp - $pkpfasilitas;
            $pphfasilitas = ((50/100)*(22/100)) * $pkpfasilitas;
            $pphnonfasilitas = (22/100) * $pkpnonfasilitas;
            $pph = $pphfasilitas + $pphnonfasilitas;
        }else if($bruto > 50000000000) {
            $pph = (22/100) * $pkp;
        }

        $result = "INSERT INTO data_perusahaan(namapt, bruto, pkp, pph) 
                VALUES('$namapt', '$bruto', '$pkp', '$pph')";
        $sql = mysqli_query($conn, $result);

        if($sql){
            header('Location: ../daftarpajakperusahaan.php?status=sukses');
        }else {
            header('Location: ../daftarpajakperusahaan.php?status=gagal');
        }
        
    }else {
        die("Akses dilarang...");

    }

?>