<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
        <form action="" method="post">
            Jumlah Peserta : <input type = "number" name="jumlah" value="<?=isset($_POST['jumlah']) ? $_POST['jumlah'] : ''?>">
            <br>
            <input type="submit" name="submit" value="Cetak">
        </form>
        <?php
        if(isset($_POST['submit']))    
        {
            $jumlah = $_POST ['jumlah'];
            $n = 1;
            while ($n <= $jumlah) {
                //ganjil
                if ($n%2==1) {
                    echo "<font style='color:#F53939'><h2>Peserta Ke-$n</h2></font>";
                }
                //genap
                elseif ($n%2==0) {
                    echo "<font style='color:#34A547'><h2>Peserta Ke-$n</h2></font>";
                }
            $n++;
            }  
        }
        ?>
</body>
</html>