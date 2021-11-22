<?php
require 'conn.php';

$nama_pelajar = $_POST['nama_pelajar'];
$nama_pelajar = strtoupper($nama_pelajar);
$kp_pelajar = $_POST['kp_pelajar'];

$sql = "INSERT INTO tbl_pelajar (nama_pelajar, kp_pelajar) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $nama_pelajar, $kp_pelajar);
$stmt->execute();

if ($conn->error) {
?>
    <script>
        alert('Maaf! Nama pelajar tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
