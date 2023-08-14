<?php

function luasPersegi($sisi) {
    echo "Sisi yang dimasukkan: " . $sisi . "\n";
    echo "Luasnya adalah $sisi x $sisi = " . $sisi * $sisi;
    echo "\n";
}
luasPersegi(8);
luasPersegi(10);
luasPersegi(5);


function luasPersegiPanjang($panjang, $lebar) {
    echo "Panjang yang dimasukkan: " . $panjang . "\n";
    echo "Lebar yang dimasukkan: "  . $lebar . "\n";
    echo "Luasnya adalah $panjang x $lebar = " . $panjang * $lebar;
    echo "\n";
}
luasPersegiPanjang(18, 7);
luasPersegiPanjang(20, 9);



function luasJajarGenjang($alas, $tinggi) {
    echo "Alas yang dimasukkan: " . $alas . "\n";
    echo "Tinggi yang dimasukkan: "  . $tinggi . "\n";
    echo "Luasnya adalah $alas x $tinggi = " . $alas * $tinggi;
    echo "\n";
}
luasJajarGenjang(20, 10);
luasJajarGenjang(22, 11);


function luasLingkaran($pi, $jari_jari1, $jari_jari2) {
    echo "pi yang dimasukkan: " . 3.14 . "\n";
    echo "jari_jari1 dimasukkan: " . $jari_jari1 . "\n";
    echo "jari_jari2 dimasukkan: " . $jari_jari2 . "\n";
    echo "Luas Lingkarannya adalah 3,14 x $jari_jari1 x $jari_jari2 = " . 3.14 * $jari_jari1 * $jari_jari2;
    echo "\n";
}    
luasLingkaran(3.14, 6, 6);
luasLingkaran(3.14, 8, 8);



echo "Alas yang dimasukkan = 5";
echo "Tinggi yang dimasukkan = 10";
echo "Luas Segitiga  adalah = (Alas x Tinggi) / 2";
$alas = 5;
$tinggi = 10;
$luas_segitiga = ($alas * $tinggi)/2;
echo " ($alas x $tinggi)/2 = $luas_segitiga";
?>