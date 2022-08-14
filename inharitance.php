<?php
    class car {
        public $merk;
        public $jenis;
        public $stok;

        public function pesanCar(){
            $this->stok = $this->stok - 1;
        }
        public function borongCar($jumlah){
            $this->stok = $this->stok - $jumlah;
        }
        public function cekStok(){
            return "<br>"."Sisa Stok Mobil : ". $this->stok ."<br>";
        }
    }

    class kendaraan extends car {
        public function __construct($merk, $jenis, $stok){
            $this->merk = $merk;
            $this->jenis = $jenis;
            $this->stok = $stok;
        }
    }

    // $kendaraan01 = new kendaraan();
    // $kendaraan01->membeliCar("Honda","Brio",100);

    $kendaraan01 = new kendaraan("Honda","Brio",100);

    $kendaraan02 = new kendaraan("Honda","Mobilio",50);

    $kendaraan03 = new kendaraan("Toyota","Avanza",25);

    $kendaraan04 = new kendaraan("Toyota","Alphard",10);

    echo "<pre>";
    print_r ($kendaraan01);
    // $kendaraan01->borongCar(10);
    $kendaraan01->pesanCar();
    print_r ($kendaraan01->cekStok());

    echo PHP_EOL;

    // echo "<pre>";
    // print_r ($kendaraan02);
    // $kendaraan02->borongCar(1);
    // print_r ($kendaraan02->cekStok());
    // echo "</pre>";

    // echo "<pre>";
    // print_r ($kendaraan03);
    // $kendaraan03->borongCar(1);
    // print_r ($kendaraan03->cekStok());
    // echo "</pre>";

    // echo "<pre>";
    // print_r ($kendaraan04);
    // $kendaraan04->pesanCar(1);
    // print_r ($kendaraan04->cekStok());
    // echo "</pre>";
?>