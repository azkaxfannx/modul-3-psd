<?php
    $person = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'city' => $_POST['city'],
        'contacts' => [
            'email' => $_POST['contacts']['email'],
            'phone' => $_POST['contacts']['phone'],
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampil Data</title>
</head>
<body>
    <h3>Nama: <?= $person['name']; ?></h3>
    <h3>Umur: <?= $person['age']; ?></h3>
    <h3>Kota: <?= $person['city']; ?></h3>
    <h3>Email: <?= $person['contacts']['email']; ?></h3>
    <h3>No HP: <?= $person['contacts']['phone']; ?></h3>
</body>

<a href="azkaSyamsMaulana_modul_2_3_in.php">Kembali ke halaman input</a>

</html>