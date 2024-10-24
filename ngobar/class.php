<?php
class Rumus_persegi
{
    function rumus_persegi($sisi)
    {
        $jawaban = $sisi * $sisi;
        return $jawaban;
    }
}

$persegi = new Rumus_persegi;
echo "Hasil dari class diatas adalah ", $persegi->rumus_persegi(7);
?>