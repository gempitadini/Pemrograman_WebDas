<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79,70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
} 
echo "Daftar nilai siswa yang lulus: " . implode (', ', $nilaiLulus);

echo "<br><br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar Karyawan";
foreach ($daftarKaryawan as $karyawan) {
    echo "<li>Nama: {$karyawan[0]}, Pengalaman: {$karyawan[1]} tahun</li>";
}

echo "Karyawan dengan pengalaman kerja lebih dari 5 tahun:";
echo implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';
echo "Daftar Nilai Mahasiswa";
echo "<p>Mata kuliah: <b>{$mataKuliah}</b></p>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "<li>Nama: {$nilai[0]}, Nilai: {$nilai[1]}</li>";
}

echo "<br><br>";
$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1];
}
$rataRata = $totalNilai / count($daftarSiswa);

echo "Daftar Nilai Siswa";
echo "Rata-rata kelas: {$rataRata}<br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}
?>