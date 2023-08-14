<?php

function volumeKubus($sisi) {
    echo "Sisi yang dimasukkan: " . $sisi . "\n";
    echo "volumenya adalah $sisi x $sisi x $sisi = " . $sisi * $sisi * $sisi;
    echo "\n";
}
volumeKubus(8);
volumeKubus(10);

function volumeBalok($panjang, $lebar, $tinggi) {
    echo "Panjang yang dimasukkan: " . $panjang . "\n";
    echo "Lebar yang dimasukkan: "  . $lebar . "\n";
    echo "Tinggi yang dimasukkan: " . $tinggi . "\n";
    echo "Volume adalah $panjang x $lebar x $tinggi = " . $panjang * $lebar * $tinggi;
    echo "\n";
}
volumeBalok(18, 7, 5);
volumeBalok(10, 5, 3);

function volumeTabung($pi, $jari_jari1, $jari_jari2, $tinggi_tabung) {
    echo "pi yang dimasukkan: " . 3.14 . "\n";
    echo "jari_jari1 dimasukkan: " . $jari_jari1 . "\n";
    echo "jari_jari2 dimasukkan: " . $jari_jari2 . "\n";
    echo "tinggi yang dimasukkan" . $tinggi_tabung . "\n";
    echo "Volume Tabungnya adalah 3,14 x $jari_jari1 x $jari_jari2 x $tinggi_tabung = " . 3.14 * $jari_jari1 * $jari_jari2 * $tinggi_tabung;
    echo "\n";
}
volumeTabung(3.14, 6, 6, 10);
volumeTabung(3.14, 8, 8, 12);



?>