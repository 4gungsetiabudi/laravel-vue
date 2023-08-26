<?php

//Bangun Ruang

function volumeKubus($sisi) {
    echo "Nilai Sisi: " . $sisi . "\n";
    echo "Nilai Volume Kubus adalah $sisi x $sisi x $sisi = " . $sisi * $sisi * $sisi;
    echo "\n<br><br>";
}
volumeKubus(7);

function volumeBalok($panjang, $lebar, $tinggi) {
    echo "Nilai Panjang: " . $panjang . "\n";
    echo "Nilai Lebar: "  . $lebar . "\n";
    echo "Nilai Tinggi: " . $tinggi . "\n";
    echo "Nilai Volume Balok adalah $panjang x $lebar x $tinggi = " . $panjang * $lebar * $tinggi;
    echo "\n<br><br>";
}
volumeBalok(16, 7, 5);

function volumeTabung($pi, $jari_jari1, $jari_jari2, $tinggi_tabung) {
    echo "Nilai phi: " . 3.14 . "\n";
    echo "Nilai jari_jari1: " . $jari_jari1 . "\n";
    echo "Nilai jari_jari2: " . $jari_jari2 . "\n";
    echo "Nilai tinggi" . $tinggi_tabung . "\n";
    echo "Nilai Volume Tabung adalah 3,14 x $jari_jari1 x $jari_jari2 x $tinggi_tabung = " . 3.14 * $jari_jari1 * $jari_jari2 * $tinggi_tabung;
    echo "\n<br><br>";
}
volumeTabung(3.14, 8, 8, 12);



//Bangun Datar

function luasPersegi($sisi) {
    echo "Nilai Sisi: " . $sisi . "\n";
    echo "Nilai Luas Persergi adalah $sisi x $sisi = " . $sisi * $sisi;
    echo "\n<br><br>";
}
luasPersegi(6);

function luasJajarGenjang($alas, $tinggi) {
    echo "Nilai Alas: " . $alas . "\n";
    echo "Nilai Tinggi: "  . $tinggi . "\n";
    echo "Luas Jajar Genjang Tersebut adalah $alas x $tinggi = " . $alas * $tinggi;
    echo "\n<br><br>";
}
luasJajarGenjang(18, 9);

function luasLingkaran($pi, $jari_jari1, $jari_jari2) {
    echo "Nilai phi: " . 3.14 . "\n";
    echo "jari_jari1: " . $jari_jari1 . "\n";
    echo "jari_jari2: " . $jari_jari2 . "\n";
    echo "Luas Lingkarannya adalah 3,14 x $jari_jari1 x $jari_jari2 = " . 3.14 * $jari_jari1 * $jari_jari2;
    echo "\n<br><br>";
}    
luasLingkaran(3.14, 8, 8);


?>