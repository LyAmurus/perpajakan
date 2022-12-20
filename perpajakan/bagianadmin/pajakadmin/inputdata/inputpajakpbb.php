<?php

    include_once("../connectdata/conn.php");

    if(isset($_POST['inputpajakpbb'])){
        $nama = $_POST['nama'];
        $tanah = $_POST['tanah'];
        $bangunan = $_POST['bangunan'];
        $harga_tanah = $_POST['harga_tanah'];
        $harga_bangunan = $_POST['harga_bangunan'];
        $njop = $_POST['njop'];
        $njkp = $_POST['njkp'];
        $pbb = $_POST['pbb'];

        $hasil_tanah = $tanah * $harga_tanah;
        $hasil_bangunan = $bangunan * $harga_bangunan;
        $njop = $hasil_tanah + $hasil_bangunan;
        $njkp = $njop * (20/100);
        $pbb = $njkp * (0.5/100);

        $result = "INSERT INTO data_pbb(nama, tanah, bangunan, harga_tanah, harga_bangunan, njop, njkp, pbb) 
                VALUES('$nama', '$tanah', '$bangunan', '$harga_tanah', '$harga_bangunan', '$njop', '$njkp', '$pbb')";
        $sql = mysqli_query($conn, $result);

        if($sql){
            header('Location: ../daftarpajakpbb.php?status=sukses');
        }else {
            header('Location: ../daftarpajakpbb.php?status=gagal');
        }
        
    }else {
        die("Akses dilarang...");

    }

?>
