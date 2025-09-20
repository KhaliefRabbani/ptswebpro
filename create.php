<?php
include 'db.php';
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$sql = "INSERT INTO students (name, gender, dob) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $gender, $dob);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    echo "Data siswa berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data siswa.";
}
$stmt->close();
$conn->close();
?>