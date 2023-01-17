<?php 

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $id_barang =$_POST["id_barang"]; 
    $nama_barang = $_POST["nama_barang"]; 
    $harga_barang = $_POST["harga_barang"]; 
    $jumlah = $_POST["jumlah"]; 
    $gambar = $_POST("gambar");

    $query = "INSERT INTO barang (id_barang, nama_barang, harga_barang, jumlah, gambar) VALUES ('$id_barang', '$nama_barang', '$harga_barang', '$jumlah', '$gambar')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>