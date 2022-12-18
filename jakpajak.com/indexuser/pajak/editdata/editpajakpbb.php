<?php
    include_once "../konek.php";

    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $tanah = $_POST['tanah'];
        $bangunan = $_POST['bangunan'];
        $harga_tanah = $_POST['harga_tanah'];
        $harga_bangunan = $_POST['harga_bangunan'];
        $njop = $_POST['njop'];
        $njkp = $_POST['njkp'];
        $pbb = $_POST['pbb'];
        $id = $_POST['id'];
        
        $hasil_tanah = $tanah * $harga_tanah;
        $hasil_bangunan = $bangunan * $harga_bangunan;
        $njop = $hasil_tanah + $hasil_bangunan;
        $njkp = $njop * (20/100);
        $pbb = $njkp * (0.5/100);
        
        $result = "UPDATE data_pbb SET nama='$nama', tanah='$tanah', bangunan='$bangunan', harga_tanah='$harga_tanah', harga_bangunan='$harga_bangunan', njop='$njop', njkp='$njkp', pbb='$pbb' WHERE id='$id'";
        $sql = mysqli_query($conn, $result);

        if($sql) {
            header('Location: ../daftarpajakpbb.php?status=sukses');
        } else {
            header('Location: ../daftarpajakpbb.php?status=gagal');
        }
    
        } else {
            die("Akses dilarang...");
    
    }
?>