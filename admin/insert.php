<?php

include("koneksi.php");

//menerima data
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];
$keterangan = $_POST['keterangan'];
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp, 'foto/' . $gambar);


//perintah sql
$sql =  "INSERT INTO produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok', id_kategori='$id_kategori', gambar='$gambar', keterangan='$keterangan'";

//memasukan data
$insert = mysqli_query($connect, $sql);

//kondisi 
if ($insert) {
    header('location:index.php');
} else {
    echo "data gagal di input";
}
