<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Outputnya</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $barang1 = $_POST['barang1'];
        $barang2 = $_POST['barang2'];
        $barang3 = $_POST['barang3'];
        $barang4 = $_POST['barang4'];

        $totalBelanja = $barang1 + $barang2 + $barang3 + $barang4;

        // Hitung diskon (misal 10% jika total lebih dari Rp. 100000)
        $diskon = ($totalBelanja > 100000) ? 0.1 * $totalBelanja : 0;
        $totalAkhir = $totalBelanja - $diskon;

        echo "<h2>Output</h2>";
        echo "Nama Pembeli: " . htmlspecialchars($nama) . "<br>";
        echo "Barang 1: Rp. " . number_format($barang1, 2, ',', '.') . "<br>";
        echo "Barang 2: Rp. " . number_format($barang2, 2, ',', '.') . "<br>";
        echo "Barang 3: Rp. " . number_format($barang3, 2, ',', '.') . "<br>";
        echo "Barang 4: Rp. " . number_format($barang4, 2, ',', '.') . "<br>";
        echo "Total Belanja: Rp. " . number_format($totalBelanja, 2, ',', '.') . "<br>";
        echo "Diskon: Rp. " . number_format($diskon, 2, ',', '.') . "<br>";
        echo "Total Akhir: Rp. " . number_format($totalAkhir, 2, ',', '.') . "<br>";
    } else {
        echo "Tidak ada data yang diterima.";
    }
    ?>
</body>
</html>
