<?php

include('koneksi.php');

$sql = "SELECT * FROM produk";
$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ADMIN</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align:center" class="mt-5">DATA PRODUK</h3>
        <a href="review.php">Review</a>
        <form action="search.php" method="GET" class="mb-4 search">
            <input type="text" name="keyword" placeholder="keyword ..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>" />
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        <table class="table table-bordered mt-3">
            <tr>
                <th>id_produk</th>
                <th>nama_produk</th>
                <th>id_kategori</th>
                <th>gambar</th>
                <th>keterangan</th>
                <th>harga</th>
                <th>stok</th>
                <th>Aksi</th>

            </tr>

            <?php foreach ($result as $data) : ?>
                <tr>
                    <td><?php echo $data['id_produk'] ?></td>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['id_kategori'] ?></td>
                    <td><img src="foto/<?php echo $data['gambar']; ?>" width="300px" /></td>
                    <td><?php echo $data['keterangan'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                    <td>
                        <a href="edit.php?id_produk=<?php echo $data['id_produk'] ?>"><button class="btn btn-outline-warning">Edit</button></a>
                        <a href="delete.php?id_produk=<?php echo $data['id_produk'] ?>"><button class="btn btn-outline-danger">Delete</button></a>

                    </td>
                </tr>
            <?php endforeach ?>
        </table>
        <a href="tambah.php" class="tambah"><button class="btn btn-primary">Tambah</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>