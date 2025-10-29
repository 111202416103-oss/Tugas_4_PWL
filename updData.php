<?php
include "koneksi.php";

$sql = "UPDATE barang SET jml = 50 WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include "selectData.php";
?>
