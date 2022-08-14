<?php
class shape{
  public $nama;
  public $jenis;
  public $jumlah;

  public function jumlah(){
    return "Jumlah ".$this->jenis." ".$this->jumlah;
  }

  public function hapus($hapus){
    return $this->jumlah = $this->jumlah - $hapus;
  }
}

class circle extends shape{
  public function __construct($nama,$jenis,$jumlah){
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->jumlah = $jumlah;
  }
}

class polygon extends shape{
  public function __construct($nama,$jenis,$jumlah){
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->jumlah = $jumlah;
  }
}

class triangle extends polygon{
  public function __construct($nama,$jenis,$jumlah){
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->jumlah = $jumlah;
  }
}

class ractangle extends polygon{
  public function __construct($nama,$jenis,$jumlah){
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->jumlah = $jumlah;
  }
}

$ractangle01 = new ractangle("ractangle A", "ractangle", 15);
$ractangle02 = new ractangle("ractangle B", "ractangle", 11);

$triangle01 = new triangle("triangle A", "triangle", 2);
$triangle02 = new triangle("triangle B", "triangle", 5);

$circle01 = new circle("circle A", "circle", 12);

print_r($ractangle01);
print_r($ractangle01->jumlah());
echo PHP_EOL;
$ractangle01->hapus(3);
echo PHP_EOL;
print_r($ractangle01->jumlah());
echo PHP_EOL;

print_r($ractangle02);
print_r($ractangle02->jumlah());
echo PHP_EOL;
$ractangle02->hapus(3);
echo PHP_EOL;
print_r($ractangle02->jumlah());
echo PHP_EOL;

print_r($triangle01);
print_r($triangle01->jumlah());
echo PHP_EOL;
$triangle01->hapus(3);
echo PHP_EOL;
print_r($triangle01->jumlah());
echo PHP_EOL;

print_r($triangle02);
print_r($triangle02->jumlah());
echo PHP_EOL;
$triangle02->hapus(3);
echo PHP_EOL;
print_r($triangle02->jumlah());
echo PHP_EOL;

print_r($circle01);
print_r($circle01->jumlah());
echo PHP_EOL;
$circle01->hapus(3);
echo PHP_EOL;
print_r($circle01->jumlah());

print_r($circle01);
print_r($circle01->jumlah());
echo PHP_EOL;
$circle01->hapus(3);
echo PHP_EOL;
print_r($circle01->jumlah());
?>

