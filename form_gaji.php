<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Gaji & Umur</title>
</head>
<body>
    <h2>Form Data Pribadi</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Fotografer">Fotografer</option>
            <option value="Guru">Guru</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        $tanggal_sekarang = new DateTime();
        $lahir = new DateTime($tanggal_lahir);
        $umur = $tanggal_sekarang->diff($lahir)->y;

        // Gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer": $gaji = 7000000; break;
            case "Desainer": $gaji = 6000000; break;
            case "Fotografer": $gaji = 5500000; break;
            case "Guru": $gaji = 5000000; break;
            default: $gaji = 0; break;
        }

        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tanggal_lahir <br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>
