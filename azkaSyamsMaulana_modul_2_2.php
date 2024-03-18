<?php
    // membuat array homogen
    $baris = ['satu', 'dua', 'tiga', 'empat'];

    // membuat array heterogen
    $data = [5, 'enam', 7.5, 'delapan'];

    // membuat array asosiatif sebagai struktur data
    $person1 = [
        'name' => 'John',
        'age' => 30,
        'gender' => 'Male',
        'contact' => [
        'phone' => '0812221110',
        'email' => 'person1@gmail.com',
        ]
    ];

    // menampilkan data array homogen
    echo "<p><b>Array Homogen</b><hr>";
    echo "<pre>";
    print_r($baris);
    echo "</pre>";
    echo "</p>";

    // menampilkan data array heterogen
    echo "<p><b>Array Heterogen</b><hr>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "</p>";

    // menampilkan data array asosiatif
    echo "<p><b>Array Asosiatif</b><hr>";
    echo "Person 1: {$person1['name']}, {$person1['age']}, {$person1['gender']}, {$person1['contact']['email']},
    {$person1['contact']['phone']}<br>";
    echo "</p>";
?>