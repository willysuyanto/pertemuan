<?php 

$nama = "asdasdasd";
$angka = 10;
$umur = 15;

if ($nama == "willy") {
    echo "benar sekali";
}

if ($nama != "willy") {
    echo "benar sekali";
}

if($angka<10){
    echo "benar";
}

if($angka>=10){
    echo "benar";
}

if($nama=="willy" && $angka >10 && $umur>10){
    echo "benar";
}

if($nama=="willy" || $angka >10){
    echo "benar";
}

if($nama == "willy"){
    echo "namamnya willy";
} else if($nama == "nama"){
    echo "namanya nama";
} else {
    echo "bukan willy dan bukan nama";
}

$warna = 80;

switch ($warna) {
    case 'Merah':
        echo "Warna merah dipilih";
        break;
    case 'Kuning': 
        echo "Warna kuning dipilih";
        break;
    case 'Biru': 
        echo "Warna biru dipilih";
        break;
    default:
        echo "Warna tidak dikenali";
        break;
}



?>