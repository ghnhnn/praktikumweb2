<?php 
require('./Model.php');
if (isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Buku Perpustakaan</title>
    <style>
        table, th, td {
            margin-left:auto;
            margin-right:auto;
            padding: 5px;
            border: solid 0.1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2 style ="text-align:center;"> DATA BUKU PERPUSTAKAAN</h2>
    <break>
    <table>
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formbuku.php"><center><button>Tambah Buku</button></center></a>
</body>
</html>