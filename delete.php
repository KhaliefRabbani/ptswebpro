<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM students WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Data siswa berhasil dihapus.";
} else {
    echo "Gagal menghapus data siswa.";
}

$stmt->close();
$conn->close();
?>