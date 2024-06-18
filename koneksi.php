<?php
//1. Membuat koneksi -> NamaServer, Username, Password, NamaDataBase
$koneksi = mysqli_connect("localhost", "root", "", "najma-pemweb");

//2. Melakukan cek koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terkoneksi dengan database" . mysqli_connect_errno();
}
?>