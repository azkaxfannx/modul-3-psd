<?php
    $a = 10;
    $b = &$a;

    echo "Nilai Awal A = 10<br>";
    echo "A = " . $a;
    echo "<br>";
    echo "B = " . $b;
    echo "<br>";

    $b = 20;

    echo "<br>";
    echo "Mengubah nilai A melalui B = 20<br>";
    echo "A = " . $a;
    echo "<br>";
    echo "B = " . $b;
?>