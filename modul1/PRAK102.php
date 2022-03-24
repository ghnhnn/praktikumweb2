<?php
    //variabel yang dibutuhkan
    $jari_jari = 4.2;
    $tinggi = 5.4;
    $phi = 3.14;
    /*apabila ingin menggunakan define
    define("phi", 3.14)
    */
    //variabel yang digunakan untuk perhitungan luas alas dan volume
    $luas_alas = $phi*($jari_jari**2);
    // menggunakan define $luas_alas = phi($jari_jari**2);
    $volume = $luas_alas*$tinggi;
    //cetak output. 
    //round digunakan untuk melakukan pembulatan dari hasil perhitungan
    echo "Jadi, volume tabung adalah " . round($volume,3) . " m3";
    /*round($volume,3) maksudnya adalah bulatkan hasil dari variabel volume dengan hasil
    3 desimal dibelakang koma*/
?>