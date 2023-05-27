<?php

include('koneksi.php');

$keyword = $_GET['keyword'];
$sql = "SELECT * FROM produk WHERE nama_produk='$keyword'";
$query = mysqli_query($connect, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <a href="tambah.php">Tambah Data</a>
        <br>
        <br>
        <form action="search.php" method="GET">
            <input type="text" name="keyword" placeholder="keyword ..." value="<?php isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>" />
            <button type="submit">Search</button>
        </form>
        <br>
        <table border="1">
            <tr>
                <th>id_produk</th>
                <th>nama_produk</th>
                <th>nama_kategori</th>
                <th>gambar</th>
                <th>keterangan</th>
                <th>harga</th>
                <th>stok</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($results as $data) : ?>
                <tr>
                    <td><?php echo $data['id_produk'] ?></td>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                    <td><?php echo $data['id_kategori'] ?></td>
                    <td><?php echo $data['gambar'] ?></td>
                    <td><?php echo $data['keterangan'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>


</body>

</html>