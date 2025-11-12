<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Kondisi PHP</title>
</head>
<body>
    <h2>Latihan Struktur Kondisi (if, else if, else)</h2>

    <?php
    $gaji = 5000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);

    echo "Gaji Sebelum Pajak = Rp. $gaji <br>";
    echo "Gaji Bersih = Rp. $thp <br><br>";

    // Struktur kondisi menggunakan IF
    $nama_hari = date("l");

    if ($nama_hari == "Sunday") {
        echo "Hari ini adalah Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Hari ini adalah Senin";
    } elseif ($nama_hari == "Tuesday") {
        echo "Hari ini adalah Selasa";
    } elseif ($nama_hari == "Wednesday") {
        echo "Hari ini adalah Rabu";
    } elseif ($nama_hari == "Thursday") {
        echo "Hari ini adalah Kamis";
    } elseif ($nama_hari == "Friday") {
        echo "Hari ini adalah Jumat";
    } else {
        echo "Hari ini adalah Sabtu";
    }
    ?>
</body>
</html>
