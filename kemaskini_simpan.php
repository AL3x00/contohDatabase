<?php
require 'conn.php';

$id_pelajar = $_POST['id_pelajar'];
$nama_pelajar = $_POST['nama_pelajar'];
$kp_pelajar = $_POST['kp_pelajar'];

$sql = "UPDATE tbl_pelajar SET nama_pelajar = ?, kp_pelajar = ? WHERE id_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $nama_pelajar, $kp_pelajar, $id_pelajar);
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
