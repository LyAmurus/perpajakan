<?php

include_once "../connectdata/conn_individu.php";

if( isset($_GET['id']) ){

    // ambil id dari query
    $id = $_GET['id'];

    // buat query hapus
    $data = "DELETE FROM data_pajak WHERE id=$id";
    $query = mysqli_query($conn, $data);

    if($query){
        header('Location: ../daftarpajakindividu.php');
    } 
    
    else {
        die("Gagal delete data");
    }
}
?>