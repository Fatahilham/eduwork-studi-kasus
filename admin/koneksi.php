<?php

$connect = mysqli_connect('localhost', 'root', '', 'furniture_store');

if (!$connect) {
    echo "gagal menyambungkan";
}
