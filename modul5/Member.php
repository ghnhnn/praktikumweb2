<?php 
require('./Model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Member Perpustakaan</title>
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
    <h2 style ="text-align:center;"> DATA MEMBER PERPUSTAKAAN</h2>
    <break>
    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formbuku.php"><center><button>Tambah Buku</button></center></a> <br></br>
</body>
</html>