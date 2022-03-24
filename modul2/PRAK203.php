<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Nilai: <input type = "text" name="nilai">
            <br>
            Dari: 
            <br>
            <input type = "radio" name="awal" value="°C">Celcius
            <br>
            <input type = "radio" name="awal" value="°F">Fahrenheit
            <br>
            <input type = "radio" name="awal" value="°R">Rheamur
            <br>
            <input type = "radio" name="awal" value="°K">Kelvin
            <br>
            Ke: 
            <br>
            <input type = "radio" name="akhir" value="°C">Celcius
            <br>
            <input type = "radio" name="akhir" value="°F">Fahrenheit
            <br>
            <input type = "radio" name="akhir" value="°R">Rheamur
            <br>
            <input type = "radio" name="akhir" value="°K">Kelvin
            <br>

            <input type="submit" name="ubah" value="Konversi">
        </form>

        <?php 
        error_reporting(0);
        if (isset($_POST['ubah'])){
            $suhu = $_POST ['nilai'];
            $awal = $_POST ['awal'];
            $akhir = $_POST ['akhir'];
            $hasil;

            if ($_POST['awal']=="°C") {
                switch ($_POST ['akhir']){
                    case '°C':
                        $hasil = $suhu;
                        break;
                    case '°F':
                        $hasil = $suhu * 1.8 + 32;
                        break;
                    case '°R':
                        $hasil = $suhu * 0.8;
                        break;
                    case '°K':
                        $hasil = $suhu + 273;
                        break;
                }
            }
            elseif ($_POST['awal']=='°F') {
                switch ($_POST['akhir']) {
                    case '°C':
                        $hasil = ($suhu - 32)/1.8;
                        break;
                    
                    case '°F':
                        $hasil = $suhu;
                        break;
                    case '°R':
                        $hasil = ($suhu - 32)/2.25;
                        break;
                    case '°K':
                        $hasil = (($suhu -32)/1.8)+273;
                        break;
                }
            }
            elseif ($_POST['awal']=='°R') {
                switch ($_POST['akhir']) {
                    case '°C':
                        $hasil = $suhu / 0.8;
                        break;
                    
                    case '°F':
                        $hasil = $suhu * 2.25 + 32;
                        break;
                    case '°R':
                        $hasil = $suhu;
                        break;
                    case '°K':
                        $hasil = $suhu / 0.8 + 273;
                        break;
                }
            }
            elseif ($_POST['awal']=='°K') {
                switch ($_POST['akhir']) {
                    case '°C':
                        $hasil = $suhu - 273;
                        break;
                    
                    case '°F':
                        $hasil = ($suhu - 273) * 1.8 + 32;
                        break;
                    case '°R':
                        $hasil = ($suhu - 273) * 0.8;
                        break;
                    case '°K':
                        $hasil = $suhu;
                        break;
                }
            }
            if (!empty($suhu)&&!empty($awal)&&!empty($akhir)) {
                echo "<h2> Hasil Konversi: $hasil".$_POST['akhir']."</h2>";
            }
            
        }            
        ?>
    </body>
</html>