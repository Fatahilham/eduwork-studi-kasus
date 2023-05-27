<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menjalankan pernyataan SQL pertama
$sql1 = "SELECT * FROM table1";
$result1 = $conn->query($sql1);

// Memeriksa apakah pernyataan SQL pertama berhasil dieksekusi
if ($result1 === false) {
    echo "Pernyataan SQL pertama gagal dieksekusi: " . $conn->error;
    // Tutup koneksi database
    $conn->close();
    exit;
}

// Menampilkan hasil pernyataan SQL pertama
while ($row = $result1->fetch_assoc()) {
    echo "Kolom1: " . $row["kolom1"] . " - Kolom2: " . $row["kolom2"] . "<br>";
}

// Menjalankan pernyataan SQL kedua
$sql2 = "SELECT * FROM table2";
$result2 = $conn->query($sql2);

// Memeriksa apakah pernyataan SQL kedua berhasil dieksekusi
if ($result2 === false) {
    echo "Pernyataan SQL kedua gagal dieksekusi: " . $conn->error;
    // Tutup koneksi database
    $conn->close();
    exit;
}

// Menampilkan hasil pernyataan SQL kedua
while ($row = $result2->fetch_assoc()) {
    echo "Kolom3: " . $row["kolom3"] . " - Kolom4: " . $row["kolom4"] . "<br>";
}

// Menutup koneksi database
$conn->close();
?>

//jgn lupa di bagian form ditambahkan :
enctype="multipart/form-data"