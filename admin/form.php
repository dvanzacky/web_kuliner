<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja kiw</title>
</head>
<body>
    <h1>Form Belanja</h1>
    <form method="post" action="progresdata.php">
        <label>Nama Pembeli:</label>
        <input type="text" name="nama" required><br><br>

        <label>Barang 1:</label>
        <input type="number" name="barang1" required><br>

        <label>Barang 2:</label>
        <input type="number" name="barang2" required><br>

        <label>Barang 3:</label>
        <input type="number" name="barang3" required><br>

        <label>Barang 4:</label>
        <input type="number" name="barang4" required><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
