<?php
$mahasiswa = [
  [
    "nama" => "palguna",
    "nim" => "12345",
    "jurusan" => "Teknik Informatika",
    "email" => "email1@gmail.com",
    "gambar" => "1.jpg"
  ],
  [
    "nama" => "alguna",
    "nim" => "12346",
    "jurusan" => "Teknik Informatika",
    "email" => "email2@gmail.com",
    "gambar" => "2.jpg"
  ],
  [
    "nama" => "guna",
    "nim" => "12347",
    "jurusan" => "Teknik Informatika",
    "email" => "email3@gmail.com",
    "gambar" => "3.jpg"
  ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img width="300" src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
