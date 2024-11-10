<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tangkep data
    $id = $_POST['id'];
    $name = $_POST['username'];
    $password = $_POST['password'];

    //prepare query update
    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $password, $id);

    //eksekusi
    if ($stmt->execute()) {
        echo "berhasil mengupdate data";
        return header("Location: read.php");
    } else {
        echo "terjadi kesalahan dalam mengupdate data";
        return header("Location: read.php");
    }

    //tutup koneksi
    // $stmt->close();
    // $conn->close();
} else {
    //mengambil data dari url
    $id = $_GET['id'];
    //prepre query
    $stmt = $conn->prepare("SELECT * FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);
    //eksekusi
    $stmt->execute();
    $result = $stmt->get_result();
    //ambil data jadi array asosiatif
    $row = $result->fetch_assoc();
    //penamaan data yang didapat
    $username = $row['username'];
    $password = $row['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Update</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="text" name="username" value="<?= $username ?>" required />
        <input type="password" name="password" value="<?= $password ?>" required />
        <button type="submit">Submit</button>
    </form>
</body>

</html>