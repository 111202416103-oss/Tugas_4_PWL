<?php
include "koneksi.php";

$sql = "SELECT * FROM barang";
$hasil = $conn->query($sql);

if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
        echo $row["id"] . " | " . $row["nama"] . " | " . $row["hrg"] . " | " . $row["jml"] . " | " . $row["keterangan"] . " | " . $row["foto"] . "<br>";
    }
} else {
    echo "jml rec: 0";
}

$conn->close();
?>
