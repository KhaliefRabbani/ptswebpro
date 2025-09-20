<?php
include 'db.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - gender: " . $row["gender"] . " - dob: " . $row["dob"] . "<br>";
    }
} else {
    echo "Tidak ada data siswa.";
}
$conn->close();
?>
