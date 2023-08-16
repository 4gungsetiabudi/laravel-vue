<?php

$nama = "Agung";
$tinggi_badan = 1.71; //tingi badan ditulis dalam satuan meter.
$berat_badan = 58;    //bb ditulis dalam satuan Kilogram
$bmi = $berat_badan/pow($tinggi_badan,2);

if($bmi < 16){
    $status = "Gizi Buruk";
}elseif($bmi >= 16 && $bmi < 17){
    $status = "Kurang Gizi";
}elseif($bmi >= 17 && $bmi < 18.5){
    $status = "Cukup";
}elseif($bmi >= 18.5 && $bmi < 25){
    $status = "Normal";
}elseif($bmi >= 25 && $bmi < 30){
    $status = "Gemuk";
}elseif($bmi >= 30 && $bmi < 35){
    $status = "Kegemukan";  
}elseif($bmi >= 35 && $bmi < 40){
    $status = "Obesitas";
}elseif($bmi >= 40){
    $status = "Obesitas Akut";
}

echo "Halo, $nama Tampan. Nilai BMI kamu adalah $bmi, kamu termasuk dalam kategori $status";

?>