<?php

include_once "../konek.php";

if( isset($_GET['id']) ){

    // ambil id dari query
    $id = $_GET['id'];

    // buat query hapus
    $data = "DELETE FROM data_perusahaan WHERE id=$id";
    $query = mysqli_query($conn, $data);

    if($query){
        header('Location: ../daftarpajakperusahaan.php');
    } 
    
    else {
        die("Gagal delete data");
    }
}
?>