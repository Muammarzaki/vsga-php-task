<?php

$mysqlConnect = mysqli_connect("db", "root", "", "belajar_db");

if (!$mysqlConnect) {
    echo "Koneksi Gagal";
    exit();
}
