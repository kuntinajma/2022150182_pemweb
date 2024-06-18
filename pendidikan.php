<h1>Riwayat Pendidikan</h1>
<a href="?parameter=pendidikan_tambah" class="btn btn-primary">Tambah Pendidikan</a>
    <table class="table">
    <tr class="warna-orange">
        <th>NO</th>
        <th>JENJANG</th>
        <th>NAMA SEKOLAH/PT</th>
        <th>TAHUN LULUS</th>
    </tr>
    <?php
    //1. Membuat koneksi
    include "koneksi.php";
    //2. Membuat Query
    $data = mysqli_query($koneksi, "SELECT * FROM pendidikan");
    $no = 1;
    //3. Membuat Looping // perulangan dari array (while, for, do while)
    while($row=mysqli_fetch_array($data)){
    //4. Tampilkan atau eksekusi data
    echo "
        <tr>
        <td>".$no++."</td>
        <td>".$row['jenjang']."</td>
        <td>".$row['nama_sekolah']."</td>
        <td>".$row['tahun_lulus']."</td>
        </tr>
    ";
    }
    ?>
    </tr>
    </table>