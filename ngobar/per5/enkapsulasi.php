<?php

class Mobil{
  private $warna;
  private $merk;
  private $tahun;
  public function setWarna($warna){
    $this->warna=$warna;
  }  public function setMerk($merk){
    $this->merk=$merk;
  }  public function setTahun($tahun){
    $this->tahun=$tahun;
  }
  public function getWarna(){
    return $this->warna;
  }  public function getMerk(){
    return $this->merk;
  }  public function getTahun(){
    return $this->tahun;
  }
}

$mobil = new Mobil();

$mobil->setWarna(warna: "Merah");
$mobil->setMerk(merk: "Toyota");
$mobil->setTahun(tahun: "2020");

echo $mobil->getWarna();
echo $mobil->getMerk();
echo $mobil->getTahun();