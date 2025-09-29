<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "<br>";
echo "Target jarak: {$jarakTarget} km<br>";
echo "Peningkatan harian: {$peningkatanHarian} km<br><br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-{$hari}: Jarak yang ditempuh = {$jarakSaatIni} km<br>";
}

echo "<br>Kesimpulan: Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak {$jarakTarget} kilometer.";

echo "<br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Simulasi Panen Buah<br>";
echo "Jumlah lahan: {$jumlahLahan}<br>";
echo "Tanaman per lahan: {$tanamanPerLahan}<br>";
echo "Buah per tanaman: {$buahPerTanaman}<br><br>";

for ($i = 1; $i <= $jumlahLahan; $i++) { 
    $panenPerLahan = $tanamanPerLahan * $buahPerTanaman;
    $jumlahBuah += $panenPerLahan;
    echo "Lahan ke-{$i}: Hasil panen = {$panenPerLahan} buah<br>";
}

echo "<br>Jumlah buah yang akan dipanen adalah: {$jumlahBuah} buah";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br><br>";

sort($nilaiSiswa);
echo "Nilai setelah diurutkan: " . implode(", ", $nilaiSiswa) . "<br><br>";

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai (setelah mengabaikan 2 nilai tertinggi & 2 terendah): {$totalNilai}<br>";
echo "Rata-rata nilai: {$rataRata}";

// soal 4.7
echo "<br><br>";
$hargaProduk = 120000;

$diskon = 0.20; 

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Syarat diskon: Pembelian di atas Rp 100.000 mendapatkan diskon 20%<br>";

if ($hargaProduk > 100000) {
    $potongan = $hargaProduk * $diskon;
    $hargaAkhir = $hargaProduk - $potongan;
    echo "Diskon: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
    echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.');
} else {
    echo "Tidak ada diskon.<br>";
    echo "Harga yang harus dibayar: Rp " . number_format($hargaProduk, 0, ',', '.');
}
echo "<br><br>";
$poin = 620;  

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: {$poin}<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah}";
?>
