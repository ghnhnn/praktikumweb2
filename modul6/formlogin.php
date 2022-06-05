<?php
session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: Index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
<h2 style ="text-align:center;">LOGIN</h2>
<form action = "Login.php" method = "post">
    <br></br>
    <table >
    <tr>
        <td>
            Nomor Member <input type = "text" name = "nomor_member" required>
        </td>
    </tr>
    <tr>
        <td>
            Password <input type = "password" name = "password" required>
        </td>
    </tr>
    <tr>
        <td>
        <center><button type = "submit" name = "login"> LOGIN </button></center>
        </td>
    </tr>
</table>
</form>
</body>
</html>