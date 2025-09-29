<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "</b><br>";
echo "Hasil Penjumlahan (a + b): {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b): {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b): {$hasilKali} <br>";
echo "Hasil Pembagian (a / b): {$hasilBagi} <br>";
echo "Hasil Sisa Bagi (a % b): {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b): {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "</b><br>";
echo "Apakah a sama dengan b? (a == b): "; var_dump($hasilSama); echo "<br>";
echo "Apakah a tidak sama dengan b? (a != b): "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a lebih kecil dari b? (a < b): "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a lebih besar dari b? (a > b): "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a lebih kecil atau sama dengan b? (a <= b): "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a lebih besar atau sama dengan b? (a >= b): "; var_dump($hasilLebihBesarSama); echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "</b><br>";
echo "Hasil AND (a && b): "; var_dump($hasilAnd); echo "<br>";
echo "Hasil OR (a || b): "; var_dump($hasilOr); echo "<br>";
echo "Hasil NOT (!a): "; var_dump($hasilNotA); echo "<br>";
echo "Hasil NOT (!b): "; var_dump($hasilNotB); echo "<br>";

echo "<br>";
$a = 10; // reset biar tidak berubah dari operasi sebelumnya
echo "Nilai awal a: {$a}, b: {$b}<br>";
$a += $b;
echo "Setelah a += b: {$a}<br>";

$a -= $b;
echo "Setelah a -= b: {$a}<br>";

$a *= $b;
echo "Setelah a *= b: {$a}<br>";

$a /= $b;
echo "Setelah a /= b: {$a}<br>";

$a %= $b;
echo "Setelah a %= b: {$a}<br>";

echo "<br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? (a === b): "; 
var_dump($hasilIdentik); 
echo "<br>";

echo "Apakah a tidak identik dengan b? (a !== b): "; 
var_dump($hasilTidakIdentik); 
echo "<br><br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi di restoran:</b> {$totalKursi} <br>";
echo "Kursi yang terisi:</b> {$kursiTerisi} <br>";
echo "Kursi yang kosong:</b> {$kursiKosong} <br>";
echo "Persentase kursi kosong:</b> {$persenKosong}% <br>";
?>
