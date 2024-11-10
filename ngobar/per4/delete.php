<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "berhasil menghapus data";
        return header("Location: read.php");
    } else {
        echo "terjadi kesalahan dalam menghapus data";
        return header("Location: read.php");
    }

    // $stmt->close();
    // $conn->close();
}