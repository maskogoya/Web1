<?php
session_start();
ob_start();

include "library/konekDB.php";

if(empty($_SESSION['username']) or
empty($_SESSION['password'])){
    echo "<p alingn='center'> anda harus login terlebih dahulu!</p>";
    echo "<meta http-equiv='refresh' content='2; 
    url=login.php'>";
}else{
    define('INDEX', true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashborad.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/table.css">
    
</head>
<body>
    <header>
        Aplikai Manajemen Asrama Lanny jaya
    </header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="?hal=dashboard" class="aktif">Dashborad</a></li>
                <li><a href="?hal=anggota">Data Anggota</a></li>
                <li><a href="?hal=jabatan">Data Pengurus</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>
        <section class="main">
            <?= include 'konten.php'; ?>
        </section>
    </div>
    <footer> 
    &copy; Aslan Developer By Mas Kogoya 
    </footer>
</body>
</html>