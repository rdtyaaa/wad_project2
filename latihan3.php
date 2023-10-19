<?php
    $CtoF = 9/5 * $_GET["inputAngka"] + 32;
    $CtoR = 4/5 * $_GET["inputAngka"];
    $CtoK = $_GET["inputAngka"] + 273;

    if ($_GET["inputDropdown"] == "F") {
        echo $_GET["inputDropdown"]." jika dirubah ke Fahrenheit menjadi: <br>";
        echo $CtoF;
    } elseif ($_GET["inputDropdown"] == "K") {
        echo $_GET["inputDropdown"]." jika dirubah ke Kelvin menjadi: <br>";
        echo $CtoK;
    } elseif ($_GET["inputDropdown"] == "R") {
        echo $_GET["inputDropdown"]." jika dirubah ke Reamur menjadi: <br>";
        echo $CtoR;
    } else {
        echo"Masukkan yang benar";
    }
?>