<?php
//invisible code
// $listmahasiswa = ["palguna", "wahyu", "atminsigma"];
// for ($i = 0; $i < count($listmahasiswa); $i++){
//   echo "nama: {$listmahasiswa[$i]} <br>";
// }

// $i = 0;
// while ($i < 5){
//   echo $i;
//   $i++;
// }

$mahasiswa = [
  ["palguna", "12345", "teknik informatika", "yaini1@gmail.com"],
  ["wahyu", "12346", "teknik informatika", "yaini2@gmail.com"],
  ["atminsigma", "12347", "teknik informatika", "yaini3@gmail.com"],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data mahasiswa</title>
</head>
<body>
  <h1>Daftar mahasiswa</h1>

  <?php foreach($mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM : <?= $mhs[1]; ?></li>
      <li>Jurusan : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>

</body>
</html>