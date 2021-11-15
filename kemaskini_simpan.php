<?php
require 'conn.php';

$id_pelajar = $_POST['id_pelajar'];
$nama_pelajar = $_POST['nama_pelajar'];
$kp_pelajar = $_POST['kp_pelajar'];

$sql = "UPDATE makanan SET nama = ?, harga = ? WHERE idmakanan = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sdi', $nama, $harga, $idmakanan);
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