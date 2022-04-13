<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
    <style> 
        img{
            width: 30px;
        }
    </style> 
</head>
<body>
    <form action="" method="post">
            Tinggi : <input type = "number" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
            <br>
            Alamat Gambar : <input type = "text" name="url" value="<?=isset($_POST['url']) ? $_POST['url'] : ''?>">
            <br>
            <Input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset ($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $link = $_POST['url'];
        $i = 0;
        while($i < $tinggi)
            {
                $j = 0;
                while($j <= $i)
                {
                    echo "<img>";
                    $j++;
                }
                $j = $i;
                while($j < $tinggi)
                {
                    $image = $link;  
                    echo "<img src = ' $link'>";
                    $j++;
                }
                $i++;
                echo "<br>";
            }
    }
    ?>
</body>
</html>