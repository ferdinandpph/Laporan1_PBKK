<?php
// Definisikan kelas "Mahasiswa"
class Mahasiswa {
    // Properti (Atribut)
    public $npm;
    public $nama;
    public $jurusan;
    public $angkatan;

    // Constructor (Metode khusus yang dipanggil saat objek dibuat)
    public function __construct($npm, $nama, $jurusan, $angkatan) {
        $this->npm = $npm;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->angkatan = $angkatan;
    }

    // Metode (Fungsi dalam kelas)
    public function tampilkanInfo() {
        echo "NPM: " . $this->npm . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Angkatan: " . $this->angkatan . "<br>";
    }
}

// Membuat objek dari kelas "Mahasiswa" dengan identitas mahasiswa
$mahasiswa1 = new Mahasiswa("G1A021040", "Ferdinand S. Pakpahan", "Teknik Informatika", "2021");
$mahasiswa2 = new Mahasiswa("G1A021036", "Ariq", "Teknik Informatika", "2016");

// Menampilkan informasi tentang mahasiswa-mahasiswa tersebut
$mahasiswa1->tampilkanInfo();
echo "<br><br>";
$mahasiswa2->tampilkanInfo();
?>
