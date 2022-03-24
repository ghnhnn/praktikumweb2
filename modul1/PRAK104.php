
<!-- membuat struktur html-->
<!DOCTYPE html>
<head>
    <title>Praktikum no 4</title>
    <!-- pengaturan style tabel
         th untuk tabel td untuk kolom-->
    <style>
            table, th, td {
            border: 1px solid black; 
            }
    </style>
</head>
<body>
    <table>
        <tr>
        <!-- th untuk table head-->
        <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
        //indexed array
        $samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung A03", "Samsung Galaxy Xcover 5"];
        ?>
        <!-- tr untuk table row-->
        <tr>
            <!-- td table data -->
            <td><?php echo $samsung[0];?></td>
        </tr>
        <tr>
            <td><?php echo $samsung[1];?></td>
        </tr>
        <tr>
            <td><?php echo $samsung[2];?></td>
        </tr>
        <tr>
            <td><?php echo $samsung[3];?></td>
        </tr>
    </table>
</body>
</html>