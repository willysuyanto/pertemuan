<?php 

// Array 1 Dimensi
$mobil = array("Toyota", "Honda", "Suzuki", "Daihatsu", "Wuling");
echo $mobil[1];
echo "<br>";

foreach ($mobil as $mbl) {
    echo $mbl;
    echo "<br>";
}

// Array 2 Dimensi
$kendaraan = array(
    array("Toyota", "Honda", "Suzuki", "Daihatsu", "Wuling"),
    array("Yamaha", "Honda", "Suzuki", "Kawasaki")
);

echo $kendaraan[1][3];
echo "<br>";

$motor = array(
    array("Yamaha", "Jupiter Mx", 250, "Biru"),
    array("Honda", "Beat", 125, "Merah"),
);

foreach ($motor as $value) {
    echo "Motor $value[0] $value[1] $value[2]cc warna $value[3]";
    echo "<br>";
}

$manusia = array("nama"=>"Willy", "umur"=>"26", "tinggi"=>168, "berat"=>80);

echo $manusia['nama'];

?>