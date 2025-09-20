<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$sql = "UPDATE students SET nama=?, jekel=?, tanggalLahir=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $gender, $dob, $id);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    echo "Data siswa berhasil diupdate.";
} else {
    echo "Gagal mengupdate data siswa.";
}
$stmt->close();
$conn->close();
?>