<?php

class rumus_bangun_ruang
{
  function luas_persegi_panjang($panjang, $lebar){
    $luas = $lebar * $panjang;
    return $luas;
  }
  function keliling_persegi_panjang($panjang, $lebar){
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
  }
  function luas_persegi($sisi){
    $luas = $sisi * $sisi;
    return $luas;
  }
  function keliling_persegi($sisi){
    $keliling = 4 * $sisi;
    return $keliling;
  }
  function luas_segitiga($alas, $tinggi){
    $luas = ($alas * $tinggi)/2;
    return $luas;
    }
  function luas_lingkaran($jari_jari, $phi){
    $luas = $phi * ($jari_jari **2);
    return $luas;
      }
    
  function keliling_lingkaran($jari_jari, $phi){
    $keliling = 2 * $phi * $jari_jari;
    return $keliling;
      }
    
  }

$luas_persegi_panjang = new rumus_bangun_ruang;
echo "1. Hasil dari luas persegi panjang adalah ", $luas_persegi_panjang->luas_persegi_panjang(4, 5);

$keliling_persegi_panjang = new rumus_bangun_ruang;
echo "<br> 2. Hasil dari keliling persegi panjang adalah ", $keliling_persegi_panjang->keliling_persegi_panjang(4, 5);

$luas_persegi = new rumus_bangun_ruang;
echo "<br> 3. Hasil dari luas persegi adalah ", $luas_persegi->luas_persegi(5);

$keliling_persegi = new rumus_bangun_ruang;
echo "<br> 4. Hasil dari keliling persegi adalah ", $keliling_persegi->keliling_persegi(5);

$luas_segitiga = new rumus_bangun_ruang;
echo "<br> 5. Hasil dari luas segitiga adalah ", $luas_segitiga->luas_segitiga(8,6);

$luas_lingkaran = new rumus_bangun_ruang;
echo "<br> 6. Hasil dari luas lingkaran adalah ", $luas_lingkaran->luas_lingkaran(7,22/7);

$keliling_lingkaran = new rumus_bangun_ruang;
echo "<br> 7. Hasil dari keliling lingkaran adalah ", $keliling_lingkaran->keliling_lingkaran(7,22/7);

