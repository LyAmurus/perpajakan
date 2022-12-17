<?php
    include_once "../connectdata/conn_individu.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $gaji = $_POST['gaji'];
        $persentase = $_POST['persentase'];
        $pajak = $_POST['pajak'];
        if($gaji >= 500000000){
            $pajak = $gaji * (30/100);
            //Identitas Persentase
            $persentase = "30"; 
        }
        elseif($gaji >= 50000000 && $gaji <= 250000000){
            $pajak = $gaji * (15/100);
            //Identitas Persentase
            $persentase = "15"; 
            
        }
        else{
            $pajak = $gaji * (5/100);
            //Identitas Persentase
            $persentase = "5";       
        }
        
        $data = "INSERT INTO data_pajak (nama, gaji, persentase, pajak) VALUES('$nama','$gaji','$persentase','$pajak')";
        $query = mysqli_query($conn, $data);

        if($query) {
            header('Location: ../daftarpajakindividu.php?status=sukses');
        } else {
            header('Location: ../daftarpajakindividu.php?status=gagal');
        }
    
        } else {
            die("Akses dilarang...");
    
    }
?>
