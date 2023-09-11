<?php
// Definisikan sebuah kelas bernama "Person"
class Person {
    // Properties (Atribut)
    public $nama;
    public $umur;

    // Constructor (Metode khusus yang dipanggil saat objek dibuat)
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Metode (Fungsi dalam kelas)
    public function greet() {
        echo "Halo, nama saya " . $this->nama . " dan saya berusia " . $this->umur . " tahun.";
    }
}

// Membuat objek dari kelas "Person"
$person1 = new Person("Ariq", 90);
$person2 = new Person("Amrul", 92);

// Memanggil metode "greet" pada objek-objek tersebut
$person1->greet();
echo "<br>";
$person2->greet();
?>
