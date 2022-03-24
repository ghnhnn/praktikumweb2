<?php
    //variabel yang dibutuhkan
    $celcius = 37.841;
    $reamur = (4/5)*$celcius;
    $fahrenheit = (9/5)*$celcius+32;
    $kelvin = $celcius+273.15;
    //cetak
    /*round digunakakan untuk membulatkan hasil dari perhitungan. 
    contoh : round(var, 4) 4 itu merupakan skala pembulatan (parameter).
    di contoh itu menggunakan 4 maka artinya pembulatannya 4 angka dibelakang koma*/
    echo "Fahrenheit(F) = " . round($fahrenheit,4);
    echo "<br/>";
    echo "Reamur(R) = " . round($reamur,4);
    echo "<br/>";
    echo "Kelvin(K) = " . round($kelvin,4);

?>