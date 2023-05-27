<?php

include('koneksi.php');

$sql = "SELECT * FROM review";
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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align:center" class="mt-5">Review Pelanggan</h3>
        <table class="table table-bordered mt-3">
            <tr>
                <th>id_produk</th>
                <th>id_review</th>
                <th>nama_pelanggan</th>
                <th>komentar</th>


            </tr>

            <?php foreach ($result as $data) : ?>
                <tr>
                    <td><?php echo $data['id_produk'] ?></td>
                    <td><?php echo $data['id_review'] ?></td>
                    <td><?php echo $data['nama_pelanggan'] ?></td>
                    <td><?php echo $data['komentar'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>