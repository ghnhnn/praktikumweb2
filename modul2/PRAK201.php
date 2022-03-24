<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nama: 1 <input type = "text" name="nama1"><br>
        Nama: 2 <input type = "text" name="nama2"><br>
        Nama: 3 <input type = "text" name="nama3"><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>
    <?php
        error_reporting(0);
        if(isset($_POST['submit']))    
        {
                $nama1 = $_POST['nama1'];
                $nama2 = $_POST['nama2'];
                $nama3 = $_POST['nama3'];

            if ($nama1<$nama2 && $nama1<$nama3) {
                if ($nama2<$nama3) {
                    echo $nama1.'<br>';
                    echo $nama2.'<br>';
                    echo $nama3;
                }
                else {
                    echo $nama1.'<br>';
                    echo $nama3.'<br>';
                    echo $nama2;
                }
            }
            elseif ($nama1>$nama2 && $nama2<$nama3) {
                if ($nama1<$nama3) {
                    echo $nama2.'<br>';
                    echo $nama1.'<br>';
                    echo $nama3;
                }
                else {
                    echo $nama2.'<br>';
                    echo $nama3.'<br>';
                    echo $nama1;
                }
            }
            elseif ($nama1>$nama3 && $nama2>$nama3) {
                if ($nama1>$nama2) {
                    echo $nama3.'<br>';
                    echo $nama2.'<br>';
                    echo $nama1;
                } 
                else {
                    echo $nama3.'<br>';
                    echo $nama1.'<br>';
                    echo $nama2;
                }

            }
        }
    ?>
</body>
</html>