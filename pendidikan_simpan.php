<?php
//1. Buat koneksi
include "koneksi.php";

//2. Tangkap hasil POST dari pendidikan.php
$jenjang = $_POST['jenjang'];
$nama_sekolah = $_POST['nama_sekolah'];
$tahun_lulus = $_POST['tahun_lulus'];

//3. Insert kedalam tabel pendidikan
mysqli_query($koneksi, "INSERT INTO pendidikan 
VALUES (NULL, '$jenjang', '$nama_sekolah', '$tahun_lulus')");

//4. Mengalihkan ke Halaman Riwayat Pendidikan
header("location:index.php?parameter=pendidikan");
?>