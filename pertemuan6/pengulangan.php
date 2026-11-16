<?php
// pengulangan.php — menerima data dari form di index.html, menjalankan perulangan,
// lalu menampilkan hasilnya.

// Ambil nilai tombol yang ditekan (name="soal"); kosong jika halaman dibuka langsung
$soal = $_POST['soal'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($soal == "1") { ?>

    <h3>1) Pengulangan 1 sampai 10, tampilkan hanya bilangan genap</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>

<?php } elseif ($soal == "2") { ?>

    <h3>2) Tabel perkalian matriks</h3>
    <table>
        <!-- Baris header: sel "bilangan" + angka 1..10 -->
        <tr>
            <td class="putih kolom-label">bilangan</td>
            <?php for ($kolom = 1; $kolom <= 10; $kolom++) { ?>
                <td class="hijau"><?= $kolom ?></td>
            <?php } ?>
        </tr>

        <!-- Baris isi: label baris + hasil perkalian -->
        <?php for ($baris = 1; $baris <= 10; $baris++) { ?>
            <tr>
                <td class="hijau"><?= $baris ?></td>
                <?php
                for ($kolom = 1; $kolom <= 10; $kolom++) {
                    $hasil = $baris * $kolom;
                    // ganjil = kuning, genap = cyan
                    $warna = ($hasil % 2 == 1) ? "kuning" : "cyan";
                    echo "<td class='$warna'>$hasil</td>";
                }
                ?>
            </tr>
        <?php } ?>
    </table>

<?php } else { ?>

    <p>Tidak ada soal yang dipilih.</p>

<?php } ?>

    <p><a href="index.html">&laquo; Kembali</a></p>

</body>
</html>
