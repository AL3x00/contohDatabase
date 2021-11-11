<?php
require 'conn.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];

$sql = "INSERT INTO makanan (nama, harga) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sd', $nama, $harga);
$stmt->execute();

if ($mysqli->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}