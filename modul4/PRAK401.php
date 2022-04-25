<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        table, th, td {
            padding: 5px;
            border: solid 0.1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang : <input type = "number" name="panjang" value="<?=isset($_POST['panjang']) ? $_POST['panjang'] : ''?>">
        <br>
        Lebar : <input type = "number" name="lebar" value="<?=isset($_POST['lebar']) ? $_POST['lebar'] : ''?>">
        <br>
        Nilai : <input type = "text" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>">
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $input = $_POST['nilai'];

        $matrix = $panjang * $lebar;
        //eksplode = mengubah teks atau kalimat untuk menjadi sebuah array berdasarkan tanda pemisah yang ada pada kalimat/teks tersebut
        $nilai = explode (" ", $input);

        if (count($nilai) == $matrix) {
            //array_chunk fungsinya untuk mengelompokkan array agar hasil output sesuai dengan size yang disetting
            $masuk = array_chunk($nilai, $lebar);

            //print_r($new);

            echo "<table>";
            echo "<br>";
            for ($i=0; $i < $panjang; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $lebar ; $j++) { 
                    echo "<td>".$masuk[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "<h2>Panjang nilai tidak sesuai dengan ukuran matriks</h2>";
        }
    }
    ?>
</body>
</html>