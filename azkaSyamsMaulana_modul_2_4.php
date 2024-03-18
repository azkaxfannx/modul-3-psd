<?php
    $negara = 
    [
        'nama' => 'Indonesia',
        'presiden' => 'Joko Widodo',
        'provinsi' => 
        [
            [
                'nama' => 'Jawa Barat',
                'gubernur' => 'Ridwan Kamil',
                'foto' => 'ridwan.png',
                'kota' => 
                [
                    [
                        'nama' => 'Bandung',
                        'bupati' => 'Hendra Satria',
                    ],
                    [
                        'nama' => 'Majalengka',
                        'bupati' => 'Satria Hendra',
                    ],
                    [
                        'nama' => 'Cicalengka',
                        'bupati' => 'Nugraha'
                    ]
                ]
            ],
            [
                'nama' => 'Jawa Tengah',
                'gubernur' => 'Ganjar Pranowo',
                'foto' => 'ganjar.jpg',
                'kota' =>
                [
                    [
                        'nama' => 'Cilacap',
                        'bupati' => 'Tatto S. Pamuji',
                    ],
                    [
                        'nama' => 'Semarang',
                        'bupati' => 'Ade Bhakti',
                    ],
                    [
                        'nama' => 'Batang',
                        'bupati' => 'Satrio Jinggo'
                    ]
                ]
            ],
            [
                'nama' => 'Jawa Timur',
                'gubernur' => 'Khofifah',
                'foto' => 'khofifah.jpg',
                'kota' => 
                [
                    [
                        'nama' => 'Surabaya',
                        'bupati' => 'Adi Satria',
                    ],
                    [
                        'nama' => 'Malang',
                        'bupati' => 'Joko Susilo',
                    ],
                    [
                        'nama' => 'Nganjuk',
                        'bupati' => 'Kinou mo Mata Ashita',
                    ]
                ]
            ],
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Negara</title>
    <style>
        html {
            background-color: black;
            color: white;
        }

        .indented-text {
            margin-left: 100px;
        }

        .center {
            text-align: center;
        }

        .image {
            height: 10%;
            width: 10%;
        }
    </style>
</head>
<body>
    <h3 class="center">Negara <?= $negara['nama']; ?></h3>
    <div style="text-align: center;">
        <img class="image" src="bendera.png" alt="bendera indonesia">
    </div>
    <hr>
    <h3 class="center">Presiden: <?= $negara['presiden']; ?></h3>
    <div style="text-align: center;">
        <img class="image" src="jokowi.jpg" alt="jokowi">
    </div>
    <hr>
    <?php foreach ($negara['provinsi'] as $provinsi): ?>
        <h3 class="center">Provinsi <?= $provinsi['nama']; ?></h3>
        <h3 class="center">Gubernur: <?= $provinsi['gubernur']; ?></h3>
        <div style="text-align: center;">
            <img class="image" src="<?= $provinsi['foto']; ?>" alt="gubernur">
        </div>
        <br>
        <h3>Kota di <?= $provinsi['nama']; ?>:</h3>

        <?php foreach ($provinsi['kota'] as $kota): ?>
            <h3 class="indented-text">Kota <?= $kota['nama']; ?></h3>
            <h3 class="indented-text">Bupati: <?= $kota['bupati']; ?></h3>
            <br>
        <?php endforeach; ?>

        <hr>
    <?php endforeach; ?>
</body>
</html>