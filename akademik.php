<?php

class SivitasAkademik {
    protected $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends SivitasAkademik {
    private $nidn;
    
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }
    
    public function getNidn() {
        return $this->nidn;
    }
}

class Mahasiswa extends SivitasAkademik {
    private $nim;
    
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
    
    public function getNim() {
        return $this->nim;
    }
}

echo "<h2>=== SISTEM AKADEMIK INFORMATIKA ===</h2>";


$dosen1 = new Dosen("Dosen Pembimbing Akademik", "198701012020");
$dosen2 = new Dosen("Dosen Pengampu Pemweb", "199005052022");


$mahasiswa1 = new Mahasiswa("Ayub Setya Whana", "2306700023");

echo "<h3>Data Dosen:</h3>";
echo "1. Nama: " . $dosen1->getNama() . " (NIDN: " . $dosen1->getNidn() . ")<br>";
echo "2. Nama: " . $dosen2->getNama() . " (NIDN: " . $dosen2->getNidn() . ")<br><hr>";

echo "<h3>Data Mahasiswa:</h3>";
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM/NPM: " . $mahasiswa1->getNim() . "<br><hr>";

echo "<h3>Status Tugas:</h3>";
echo "Mahasiswa Aktif: " . $mahasiswa1->getNama() . " [PRODI TEKNIK INFORMATIKA]";

?>