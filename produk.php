<?php
class Produk{
  public $jenis;
  public $merek;
  public $stock;

  public function pesanProduk(){
    $this->stock = $this->stock - 1;
    echo "Pesan "."1";
  }
  public function cekStock(){
   return $this->jenis.$this->merek." ".$this->stock;
  }

}

$produk01 = new Produk();
$produk01->jenis = "Elektronik ";
$produk01->merek = "Sharp ";
$produk01->stock = "100";

$produk02 = new Produk();
$produk02->jenis = "Elektronik ";
$produk02->merek = "LG ";
$produk02->stock = "100";



echo $produk01->cekStock().PHP_EOL;
// echo "<br>";

echo $produk01->jenis;
echo $produk01->merek;
$produk01->pesanProduk();
echo "<br>";

echo $produk01->cekStock();
echo "<br>";
echo $produk01->jenis;
echo $produk01->merek;
$produk01->pesanProduk();
echo "<br>";
echo $produk01->cekStock();
echo "<br>";

// produk 2
echo "<br>";
echo $produk02->cekStock();
echo "<br>";
echo $produk02->jenis;
echo $produk02->merek;
$produk02->pesanProduk();
echo "<br>";

echo $produk02->cekStock();
echo "<br>";
echo $produk02->jenis;
echo $produk02->merek;
$produk02->pesanProduk();
echo "<br>";
echo $produk02->cekStock();
?>