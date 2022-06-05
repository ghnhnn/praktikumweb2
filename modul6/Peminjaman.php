<?php 
require('./Model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman Perpustakaan</title>
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
    <h2 style ="text-align:center;"> DATA PEMINJAMAN PERPUSTAKAAN</h2>
    <break>
    <table>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formpeminjaman.php"><center><button>Tambah Data Peminjaman</button></center></a> <br></br>
    
</body>
</html>