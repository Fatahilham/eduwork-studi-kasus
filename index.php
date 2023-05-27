<?php

include('./admin/koneksi.php');

$sql = "SELECT * FROM produk";
$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>IKAE Furniture Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <!-- navbar -->
    <nav class="sticky-top d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom variant-dark bg-dark navbar-dark">
        <div class="container">
            <div class="row">

                <div class="nav-brand text-white d-flex align-items-center col-1">
                    <h3 class="pt-3 fw-bold">IKAE</h3>
                </div>

                <ul class="nav col-11 justify-content-center mx-auto">
                    <li><a href="#" class="nav-link pt-3">
                            <h4 class="text-white ">Home</h4>
                        </a> </li>
                    <li><a href="/furniture_store/aboutus.php" class="nav-link pt-3">
                            <h4 class="text-white">About</h4>
                        </a> </li>
                    <li><a href="/furniture_store/contactus.php" class="nav-link pt-3">
                            <h4 class="text-white">Kontak</h4>
                        </a> </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <main>
        <!-- banner -->
        <div id="carouselExampleCaptions" class="carousel slide mb-5">
            <div class="carousel-inner banner">
                <div class="carousel-item active">
                    <img src="assets/banner/pexels-eric-mufasa-1350789.jpg" class="w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black mb-4">
                        <h2>Temukan Jati Dirimu</h2>
                        <h5>Pilihan furniture eklektik yang mencerminkan dirimu yang luar biasa.</h5>
                    </div>
                </div>
                <div class="carousel-item h-50">
                    <img src="assets/banner/pexels-donald-tong-189333.jpg" class="d-block w-100 h-50" alt="...">
                    <div class="carousel-caption d-none d-md-block mb-4">
                        <h2>Warnai Duniamu</h2>
                        <h5>Ekspresikan dirimu dengan berbagai pilihan penuh warna.</h5>
                    </div>
                </div>
                <div class="carousel-item h-50">
                    <img src="assets/banner/pexels-pixabay-509922.jpg" class="d-block w-100 h-50" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black mb-4">
                        <h2>Temukan Ketenangan</h2>
                        <h5>Kesederhanaan dalam minimalisme yang mengagumkan.</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- banner -->

        <!-- content -->
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <h1 class="fw-light">Our Product</h1>
                    <p class="lead">Selamat datang di toko furniture kami, di mana gaya kekinian seperti industrialis dan minimalis menjadi fokus utama. Temukan furnitur modern dengan karakter kuat dan desain yang bersih, menciptakan ruang yang terinspirasi dan trendi. Dari furnitur industrial yang autentik hingga furnitur minimalis yang elegan, setiap produk kami dirancang dengan teliti untuk memenuhi gaya hidup masa kini. Hadirkan sentuhan gaya yang tak terlupakan ke dalam ruang Anda dengan koleksi furnitur kami.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($result as $data) : ?>
                        <?php
                        $teks = $data['keterangan'];
                        $batasan = 75;
                        if (strlen($teks) > $batasan) {
                            $teks = substr($teks, 0, $batasan) . "...";
                        }
                        ?>
                        <div class="col">
                            <div class="card shadow-sm h-50">
                                <img src="./admin/foto/<?php echo $data['gambar']; ?>" alt="">
                                <div class="card-body">
                                    <h5><?php echo $data['nama_produk'] ?></h5>
                                    <p class="card-text"><?php echo $teks ?></p>
                                    <div class="d-flex">
                                        <div>
                                            <span class="badge text-bg-warning me-2">Harga : Rp.<?php echo $data['harga'] ?> </span>
                                            <span class="badge text-bg-success me-2">Stock : <?php echo $data['stok'] ?></span>
                                            <span class="badge text-bg-primary">Id : <?php echo $data['id_produk'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!--end content -->
    </main>

    <!-- form -->
    <form action="review.php?id_produk=id_produk" method="POST">
        <div class="container">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_pelanggan" name="nama_pelanggan">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_produk" name="nama_produk">
            </div>
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Komentar</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="komentar" name="komentar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- end form -->


    <!-- Footer -->
    <footer class="footer bg-dark ">
        <div class="container bg-dark text-light pt-5 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h4>IKAE</h4>
                    <p>Atur Kembali Ruang Anda dengan Koleksi Retro yang Menakjubkan.</p>
                    <P>Gaya Retro yang Menawan, Sentuhan Vintage yang Tidak Terlupakan.</P>
                </div>

                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>Jalan lurus 23, Purwokerto, Indonesia</p>
                    <p>Email: Ikae.official@gmail.com</p>
                    <p>Phone: +123456789</p>
                </div>
            </div>
            <div class="row col-md-12 pt-3   justify-content-md-between justify-content-center">
                <p class="text-center text-warning">dibuat dengan sepenuh ❤ oleh fatah</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>