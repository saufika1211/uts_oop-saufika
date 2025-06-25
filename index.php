<?php
// Class Parent
class Kendaraan {
    protected $merk;
    
    public function __construct($merk) {
        $this->merk = $merk;
    }
    
    public function getInfo() {
        return "Merk: ".$this->merk;
    }
}

// Child Class 1
class Mobil extends Kendaraan {
    private $jumlahPintu;
    
    public function __construct($merk, $jumlahPintu) {
        parent::__construct($merk);
        $this->jumlahPintu = $jumlahPintu;
    }
    
    public function getInfo() {
        return parent::getInfo().", Pintu: ".$this->jumlahPintu;
    }
}

// Child Class 2 
class Motor extends Kendaraan {
    private $cc;
    
    public function __construct($merk, $cc) {
        parent::__construct($merk);
        $this->cc = $cc;
    }
    
    public function getInfo() {
        return parent::getInfo().", CC: ".$this->cc;
    }
}

// Penggunaan
$mobil = new Mobil("Toyota", 4);
$motor = new Motor("Honda", 150);

echo $mobil->getInfo()."<br>";  // Output: Merk: Toyota, Pintu: 4
echo $motor->getInfo();         // Output: Merk: Honda, CC: 150
?>
