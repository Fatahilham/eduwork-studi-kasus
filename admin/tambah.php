<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>TAMBAH DATA</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="insert.php" enctype="multipart/form-data" method="POST" class="mt-5">
                <h3 style="text-align:center">TAMBAH PRODUK</h3>
                <div class="input-form">
                    <label for="nama" class="form-label">Nama Produk : </label>
                    <input type="text" name="nama_produk" class="form-control" required>
                    <br>
                    <label for="harga" class="form-label">Harga : </label>
                    <input type="number" name="harga" class="form-control" required>
                    <br>
                    <label for="stok" class="form-label">Stok : </label>
                    <input type="number" name="stok" class="form-control" required>
                    <br>
                    <label for="id_kategori" class="form-label">Kategori : </label>
                    <input type="number" name="id_kategori" class="form-control" required>
                    <br>
                    <label for="gambar" class="form-label">Gambar : </label>
                    <input type="file" name="gambar" class="form-control" required>
                    <br>
                    <label for="keterangan" class="form-label">Keterangan : </label>
                    <input type="text" name="keterangan" class="form-control" required>
                    <br>
                    <div style="display:flex;">
                        <button type="submit" class="btn btn-success" style="margin-right: 10px;">Simpan</button>
                        <button type="button" class="btn btn-danger" onclick="window.open('index.php', '_self')">Batal</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>