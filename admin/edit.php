<?php

include('koneksi.php');
$id_produk = $_GET['id_produk'];

$sql = "SELECT * FROM produk WHERE id_produk='$id_produk' LIMIT 1";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="update.php" enctype="multipart/form-data" method="post" class="mt-5">
            <h3 style="text-align:center">UBAH DATA</h3>
            <input type="hidden" name="id_produk" value="<?php echo $data[0]['id_produk'] ?>">
            <div>
                <label for="nama" class="form-label">Nama Produk : </label>
                <input type="text" name="nama_produk" value="<?php echo $data[0]['nama_produk'] ?>" class="form-control">
                <br>
                <label for="harga" class="form-label">Harga : </label>
                <input type="number" name="harga" value="<?php echo $data[0]['harga'] ?>" class="form-control">
                <br>
                <label for="stok" class="form-label">Stok : </label>
                <input type="number" name="stok" value="<?php echo $data[0]['stok'] ?>" class="form-control">
                <br>
                <label for="id_kategori" class="form-label">Kategori : </label>
                <input type="number" name="id_kategori" value="<?php echo $data[0]['id_kategori'] ?>" class="form-control">
                <br>
                <label for="gambar" class="form-label">Gambar : </label>
                <input type="file" name="gambar" class="form-control" required>
                <br>
                <label for="keterangan" class="form-label">Keterangan : </label>
                <input type="text" name="keterangan" value="<?php echo $data[0]['keterangan'] ?>" class="form-control">
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="window.open('index.php','_self')">Batal</button>
                </div>
            </div>
        </form>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>