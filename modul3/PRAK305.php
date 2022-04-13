<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nomor 5</title>
</head>
<body>
    <form action="" method="post">
        <input type = "text" name="input">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        $input = isset($_POST['input']) ? $_POST['input'] : null;
        $panjang = strlen($input); 
        $a = strtoupper($input);
        $array = str_split($a);

        if ($input!=0) {
            echo "<h4>Input: </h4>".$input."<br>";
            echo "<h4>Output: </h4>";
        }


        for ($i=0; $i<$panjang; $i++){
            for ($j=0; $j<$panjang; $j++){
                if($i==0){
                    echo $array[$j];
                    for ($k=0; $k<$panjang-1; $k++){
                        echo strtolower($array[$j]);
        }}}}
    ?>
</body>
</html>