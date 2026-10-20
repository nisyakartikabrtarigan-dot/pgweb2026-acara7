<?php
    //$pesan = "Selamat belajar";
    //echo"Selamat Datang ".$pesan;

    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[1];

    $x = 100;
    $y = 50;

    if ($x == 100 || $y == 80) {
    echo "masuk blok 1 <br>";
    } elseif ($x == 100) {
        echo "masuk blok 2 <br>";
    } else {
        echo "masuk keranjang <br>";
    }
    echo "program selesai";
?>