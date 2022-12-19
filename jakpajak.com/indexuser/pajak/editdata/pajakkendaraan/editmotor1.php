<?php
    include_once "../../konek.php";

    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $hjm = $_POST['hjm'];
        $njkb = $_POST['njkb'];
        $pajak = $_POST['pajak'];
        $id = $_POST['id'];
        
        $bkb = (10/100) * $hjm;
        $pkb = (2/100) * $njkb;
        $swd= 35000;
        $tnkb= 100000;
        $admin= 150000;
        
        $pajak = $bkb + $pkb + $swd + $tnkb + $admin;
        
        $result = "UPDATE data_kendaraan_motor1 SET nama='$nama', hjm='$hjm', njkb='$njkb', pajak='$pajak' WHERE id='$id'";
        $sql = mysqli_query($conn, $result);

        if($sql) {
            header('Location: ../../daftarpajakkendaraan.php?status=sukses');
        } else {
            header('Location: ../../daftarpajakkendaraan.php?status=gagal');
        }
    
        } else {
            die("Akses dilarang...");
    
    }
?>