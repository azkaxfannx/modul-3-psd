<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Biodata</title>
</head>
<body>
    <pre>
    <form action="azkaSyamsMaulana_modul_2_3_out.php" method="post">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="age">Umur</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="city">Kota</label>
        <input type="text" name="city" id="city" required>
        <br>
        <label for="email">Email</label>
        <input type="text" name="contacts[email]" id="email" required>
        <br>
        <label for="phone">Nomor HP</label>
        <input type="number" name="contacts[phone]" id="phone" required>
        <br><br>
        <button type="submit">Kirim</button>
    </form>
    </pre>
</body>
</html>