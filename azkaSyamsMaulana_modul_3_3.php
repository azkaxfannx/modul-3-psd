<?php
    session_start();

    if (!isset($_SESSION['rekening'])) {
        $_SESSION['rekening'] = [
            'tabungan1' => 0,
            'tabungan2' => 0,
            'tabungan3' => 0,
            'deposito' => 0,
        ];
    }    

    $rekening = $_SESSION['rekening'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Tabungan</title>
</head>
<body>
    <h3>Menu bank: </h3>
    <ol>
        <li>Tambah saldo tabungan 1</li>
        <li>Tambah saldo tabungan 2</li>
        <li>Tambah saldo tabungan 3</li>
        <li>Tambah saldo deposito</li>
        <li>Tampil saldo</li>
    </ol>

    <form method="post">
        <label for="pilih_menu">Pilih menu</label>
        <input type="number" name="pilih_menu" id="pilih_menu">
        <button type="submit">Submit</button>
    </form>
    <br><hr><br>
</body>
</html>

<?php
    function ValidateMenu()
    {
        if (!isset($_POST['pilih_menu'])) {
            $_SESSION['pilihan'] = "";
            $pilihan = $_SESSION['pilihan'];
        } else {
            $_SESSION['pilihan'] = $_POST['pilih_menu'];
            $pilihan = $_SESSION['pilihan'];
        }
        return $pilihan;
    }
    
    $pilihan = ValidateMenu();
    
    function TambahTabungan(&$rekening, $tambah, $pilihan)
    {
        if ($pilihan == 1 || $pilihan == 2 || $pilihan == 3) {
            if ($tambah != 0) {
                $rekening["tabungan$pilihan"] += $tambah;
                $_SESSION['rekening'] = $rekening;
                echo "Tambah saldo ke tabungan $pilihan berhasil!";
            } else {
                echo "Saldo harus berisi nilai, tidak boleh 0!";
            }
        } else if ($pilihan == 4) {
            if ($tambah != 0) {
                $rekening["deposito"] += $tambah;
                $_SESSION['rekening'] = $rekening;
                echo "Tambah saldo deposito berhasil!";
            } else {
                echo "Saldo harus berisi nilai, tidak boleh 0!";
            }
        }
    }
    
    if (isset($pilihan)) {
        switch ($pilihan) {
            case '1':
            case '2':
            case '3':
            case '4':
                echo "<form method='post'>";
                echo "<label for='tambah'>Tambah saldo ";
                if ($pilihan != 4) echo "tabungan $pilihan";
                else echo "deposito";
                echo "</label>";
                echo "<input type='number' name='tambah' id='tambah'>";
                echo "<input type='hidden' name='pilih_menu' value='$pilihan'>";
                echo "<button type='submit'>Tambah!</button>";
                echo "</form>";
                echo "<br>";
                echo "<hr>";
                if (isset($_POST['tambah'])) {
                    $tambah = $_POST['tambah'];
                    TambahTabungan($rekening, $tambah, $pilihan);
                }
                break;
            case '5':
                echo "Saldo tabungan 1: " . $rekening['tabungan1'];
                echo "<br>";
                echo "Saldo tabungan 2: " . $rekening['tabungan2'];
                echo "<br>";
                echo "Saldo tabungan 3: " . $rekening['tabungan3'];
                echo "<br>";
                echo "Saldo deposito: " . $rekening['deposito'];
                echo "<br><br>";
                echo "Total: " . ($rekening['tabungan1'] + $rekening['tabungan2'] + $rekening['tabungan3'] + $rekening['deposito']);
                echo "<br>";
                echo "<br>";
                echo "<hr>";
                break;
        }
    }
?>