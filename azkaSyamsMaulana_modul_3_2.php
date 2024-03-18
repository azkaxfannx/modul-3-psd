<?php
    // membuat array
    $array = [1,2,3,4,5];

    // membuat referensi ke array
    $referensi_array = &$array;

    // mengubah nilai melalui referensi
    $referensi_array[0] = 10;

    // menampilkan nilai array asli
    echo "Menampilkan nilai array asli<br>";
    print_r($array);
    echo "<br><br>";
    echo "Menampilkan isi array index ke-0 melalui pointer = " . $referensi_array[0];
    echo "<br><br>";
    for ($i = 0; $i < count($referensi_array); $i++) {
        echo $referensi_array[$i] . " ";
    }
?>