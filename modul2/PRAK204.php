<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Nilai : <input type = "text" name="nilai">
            <br>
            <input type="submit" name="ubah" value="Konversi">
        </form>

        <?php 
        if (isset($_POST['ubah'])){
            $input = $_POST ['nilai'];
            if ($input == 0) {
                echo "<h2> Hasil: Nol </h2>";
            } 
            elseif ($input<=9 && $input>=1) {
                echo "<h2> Hasil: Satuan </h2>";
            }
            elseif ($input<=999 && $input>=100) {
                echo "<h2> Hasil: Ratusan </h2>";
            }
            elseif ($input<=19 && $input>=11) {
                echo "<h2> Hasil: Belasan </h2>";
            }
            elseif ($input>=1000) {
                echo "<h2> Hasil: Anda Menginput Melebihi Limit Bilangan </h2>";
            }
            elseif ($input>=10 && $input<=99) {
                echo "<h2> Hasil: Puluhan </h2>";
            }
            else {
                echo "<h2> No Prosess </h2>";
            }

        }            
        ?>
    </body>
</html>