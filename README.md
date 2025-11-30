# Pertemuan 11
Halo, sebelumnya nama saya Ahmad Rizky Pramudia Pratama dengan NIM 312410272 kelas TI.24.A4
Disini saya akan melakukan Modularisasi untuk program sederhana dengan menggunakan PHP
Pertama pastikan xampp kalian sudah dibuka dan start Apache dan MySQL
Lalu buat folder baru dengan nama lab9_php_modular pada folder htdocs

<img src="Lab9/Langkah 1.png" alt="Tutorial" width="400">

Selanjutnya disini kalian membuat file php baru dengan nama 
``` header.php, footer.php, home.php, about.php```

<img src="Lab9/Langkah 2.png" alt="Tutorial" width="400">

Lalu untuk kode php ``` header.php ```, kalian isi berikut

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
<link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
```

untuk ``` footer.php ```, kalian isi berikut

```
<footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
```

untuk ``` home.php ```, kalian isi berikut

```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```

untuk ``` about.php ```, kalian isi berikut

```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman About</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```

Disini ada tugas, yang dimana perlu implementasi konsep modularisasi pada kode program praktikum 8 tentang database
Sekaligus menerapkan penggunaan routing supaya projek jadi lebih modular

Disini saya harus gunakan struktur direktory ini

<img src="Lab9/Langkah 4.png" alt="Tutorial" width="400">

Jadi disini saya akan membuat folder baru dengan nama project

<img src="Lab9/Langkah 1.png" alt="Tutorial" width="400">

Kemudian sesuaikan isinya dengan direktori diatas, pastikan kalau ada tanda slash / itu adalah folder karena merujuk ke tujuan filenya

<img src="Lab9/Langkah 3.png" alt="Tutorial" width="400">

Kemudian buka di file ``` index.php ```, Lalu kita buat routing didalamnya dengan kode ini

```
<?php

include 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$parts = explode('/', $page);
$module = $parts[0] ?? '';
$file   = $parts[1] ?? '';
$path = "modules/$module/$file.php";

if ($module && $file && file_exists($path)) {
    include $path;
} else {
    include 'views/dashboard.php'; 
}

include 'views/footer.php';
?>
```

Nah, jika sudah kalian akses filenya melalui link ini
``` http://localhost:8080/project/index.php?page=auth/list ```

Maka tampilannya jadi seperti ini

<img src="Lab9/Langkah 5.png" alt="Tutorial" width="400">

Kalian bisa isi databasenya sesuai yang kalian inginkan di ``` database.php ```
Lalu kalian sesuaikan di phpmyadmin dan bisa connect database baru ke project ini
Jadi tampilannya seperti ini

<img src="Lab9/Langkah 6.png" alt="Tutorial" width="400">

Jadi seperti itu untuk melakukan Modularisasi Program menggunakan PHP
Sekian terima kasih
