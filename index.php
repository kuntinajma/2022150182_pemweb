<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website | Najma</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <ul class="nav bg-primary">
        <li class="nav-item"><a class="nav-link text-white" href="?parameter=home">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="?parameter=tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="?parameter=pendidikan">Pendidikan</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="?parameter=login">Login</a></li>
    </ul>

    <?php
        $variable = $_GET['parameter'];
        if($variable=="home"){
           echo "Halaman Home";
           include "home.php";
        } else if ($variable=="tentang"){
            echo "Halaman Tentang";
            include "tentang.php";
        } else if ($variable=="pendidikan"){
            echo "Halaman Pendidikan";
            include "pendidikan.php";
        } else if ($variable=="login"){
            echo "Halaman Login";
            include "login.php";
        } else if ($variable=="register"){
            echo "Halaman Register";
            include "register.php";
        } else if ($variable=="pendidikan_tambah"){
            include "pendidikan_tambah.php";
        } 
    ?>

</body>
</html>