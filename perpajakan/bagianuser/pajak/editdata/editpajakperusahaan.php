<?php
    include_once "../konek.php";

    if(isset($_POST['update'])){
        $namapt = $_POST['namapt'];
        $bruto = $_POST['bruto'];
        $pkp = $_POST['pkp'];
        $pph = $_POST['pph'];
        $id = $_POST['id'];
        $username = $_POST['username'];
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
        
        $result = "UPDATE data_perusahaan SET namapt='$namapt', bruto='$bruto', pkp='$pkp', pph='$pph' WHERE id='$id' AND username='$username'";
        $sql = mysqli_query($conn, $result);

        if($sql) {
            header('Location: ../daftarpajakperusahaan.php?status=sukses');
        } else {
            header('Location: ../daftarpajakperusahaan.php?status=gagal');
        }
    
        } else {
            die("Akses dilarang...");
    
    }
?>