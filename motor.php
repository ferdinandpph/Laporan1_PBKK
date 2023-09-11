<?php
// Definisikan kelas "Motor"
class Motor {
    // Properti (Atribut)
    public $merk;
    public $tipe;
    public $tahun;
    public $warna;

    // Constructor (Metode khusus yang dipanggil saat objek dibuat)
    public function __construct($merk, $tipe, $tahun, $warna) {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    // Metode (Fungsi dalam kelas)
    public function tampilkanInfo() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Tipe: " . $this->tipe . "<br>";
        echo "Tahun Produksi: " . $this->tahun . "<br>";
        echo "Warna: " . $this->warna . "<br>";
    }
}

// Membuat objek dari kelas "Motor" dengan identitas motor
$motor1 = new Motor("Honda", "CBR 150R", 2022, "Merah");
$motor2 = new Motor("Yamaha", "NMAX", 2021, "Hitam");

// Menampilkan informasi tentang motor-motor tersebut
$motor1->tampilkanInfo();
echo "<br><br>";
$motor2->tampilkanInfo();
?>
