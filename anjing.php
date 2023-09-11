<?php
// Definisikan kelas "Anjing"
class Anjing {
    // Properti (Atribut)
    public $nama;
    public $ras;
    public $usia;
    public $warna;

    // Constructor (Metode khusus yang dipanggil saat objek dibuat)
    public function __construct($nama, $ras, $usia, $warna) {
        $this->nama = $nama;
        $this->ras = $ras;
        $this->usia = $usia;
        $this->warna = $warna;
    }

    // Metode (Fungsi dalam kelas)
    public function gonggong() {
        echo $this->nama . " sedang menggonggong 'raaawrrrrrr'!";
    }

    public function tidur() {
        echo $this->nama . " sedang tidur.";
    }

    public function info() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Ras: " . $this->ras . "<br>";
        echo "Usia: " . $this->usia . " tahun<br>";
        echo "Warna: " . $this->warna . "<br>";
    }
}

// Membuat objek dari kelas "Anjing" dengan ciri-ciri khas
$anjing1 = new Anjing("Buddy", "Golden Retriever", 3, "Cokelat");
$anjing2 = new Anjing("Lucky", "Labrador", 2, "Hitam");

// Memanggil metode dan menampilkan informasi tentang anjing-anjing tersebut
$anjing1->gonggong();
echo "<br>";
$anjing1->tidur();
echo "<br>";
$anjing1->info();
echo "<br><br>";

$anjing2->gonggong();
echo "<br>";
$anjing2->tidur();
echo "<br>";
$anjing2->info();
?>
