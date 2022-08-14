<?php
class car{
  public $name;
  public $brand;

  public function CarName(){
    return $car;
  }
}

$mobil1 = new Car();
$mobil1->name = "mobilio";
$mobil1->brand = "honda";

$mobil2 = new Car();
$mobil2->name = "brio";
$mobil2->brand = "honda";

$mobil3 = new Car();
$mobil3->name = "jazz";
$mobil3->brand = "honda";

// view

echo $mobil1->name;
echo " ";
echo $mobil1->brand;
echo " ";
// echo "<br>";
echo $mobil2->name;
echo " ";
echo $mobil2->brand;
echo " ";
// echo "<br>";
echo $mobil3->name;
echo " ";
echo $mobil3->brand;

print_r($mobil1);
print_r($mobil2);
print_r($mobil3);
?>