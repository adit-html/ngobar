<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //menangkap data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyamakan dengan table database (users)
    $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    //mengeksekusi query dan mengecek apakah sukses atau tidak
    if ($stmt->execute()) {
        echo "berhasil menambahkan data";
    } else {
        echo "terjadi kesalahan dalam menambahkan data";
    }

    //menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
</body>

</html>