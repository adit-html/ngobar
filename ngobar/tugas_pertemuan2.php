<?php

class rumus_persegi_panjang
{
  function luas_persegi_panjang($panjang, $lebar){
    $luas = $lebar * $panjang;
    return $luas;
  }
  function keliling_persegi_panjang($panjang, $lebar){
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
  }
}

$luas_persegi_panjang = new rumus_persegi_panjang;
echo "Hasil dari luas persegi panjang diatas adalah ", $luas_persegi_panjang->luas_persegi_panjang(4, 5);
$keliling_persegi_panjang = new rumus_persegi_panjang;
echo "<br> Hasil dari keliling persegi panjang diatas adalah ", $keliling_persegi_panjang->keliling_persegi_panjang(4, 5);

?>