<?php

$nama = "Nanda";
$jurusan = "Informatika";
$kampus = "ITB AAS Indonesia";

echo "Nama saya: " . $nama . "<br>";
echo "Jurusan: " . $jurusan . "<br>";
echo "Kampus: " . $kampus;

//pengunaan if else
$nilai = 85;

if ($nilai >= 75) {
    echo "Nama: " . $nama . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Status: LULUS";
} else {
    echo "Nama: " . $nama . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Status: BELUM LULUS";
}


?>