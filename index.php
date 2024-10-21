<?php
class BangunDatar {

    // Fungsi untuk menghitung luas dan keliling persegi panjang
    public function persegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
        echo "PERSEGI PANJANG <br>Panjang: {$panjang}<br>Lebar: {$lebar}<br>";
        echo "Luas: {$luas} <br>";
        echo "Keliling: {$keliling}<br><br>";
    }

    // Fungsi untuk menghitung luas dan keliling persegi
    public function persegi($sisi) {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;
        echo "PERSEGI<br>Sisi: {$sisi}<br>";
        echo "Luas: {$luas} <br>";
        echo "Keliling: {$keliling}<br><br>";
    }

    // Fungsi untuk menghitung luas segitiga
    public function segitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        echo "SEGITIGA<br>Alas: {$alas}<br>Tinggi: {$tinggi}<br>";
        echo "Luas: {$luas} <br><br>";
    }

    // Fungsi untuk menghitung luas dan keliling lingkaran
    public function lingkaran($jariJari) {
        $pi = 22/7;
        $luas = $pi * $jariJari * $jariJari;
        $keliling = 2 * $pi * $jariJari;
        echo "LINGKARAN<br>Jari-jari: {$jariJari}<br>";
        echo "Luas: {$luas} <br>";
        echo "Keliling: {$keliling}<br><br>";
    }
}

$calc = new BangunDatar();

$calc->persegiPanjang(5, 10);
$calc->persegi(4);
$calc->segitiga(6, 8);
$calc->lingkaran(7);

