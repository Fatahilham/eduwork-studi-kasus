<?php

include('koneksi.php');

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp, 'foto/' . $gambar);


$keterangan = $_POST['keterangan'];

$sql = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok', id_kategori='$id_kategori', gambar='$gambar', keterangan='$keterangan' WHERE id_produk='$id_produk'";
$update = mysqli_query($connect, $sql);

if ($update) {
    header('location:index.php');
} else {
    echo "data gagal di update";
}
