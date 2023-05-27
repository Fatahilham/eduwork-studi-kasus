<?php

include('koneksi.php');

$id_produk = $_GET['id_produk'];

$sql = "DELETE FROM produk WHERE id_produk='$id_produk'";
$delete = mysqli_query($connect, $sql);

if ($delete) {
    header('location: index.php');
} else {
    echo "gagal";
}
