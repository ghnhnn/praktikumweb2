<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>

    <style> 
        img{
            width: 15px;
        }
    </style> 
</head>
<body>
    <form action="" method="post">
        Batas Bawah : <input type = "number" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>"/>
        <br>
        Batas Atas : <input type = "number" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>"/>
        <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
        if(isset($_POST['submit']))    
        {
            $atas = $_POST ['atas'];
            $bawah = $_POST ['bawah'];
            $foto = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
            do {
                if (($bawah +7) %5 == 0 ) {
                    echo "<img src='$foto'>";
                } else {
                    echo "$bawah";
                } 
                $bawah++;           
            } while ($bawah <= $atas); 
        }
    ?>
</body>
</html>