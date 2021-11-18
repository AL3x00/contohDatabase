<?php
require 'conn.php';

$id_pelajar = $_GET['id_pelajar'];
$sql = "SELECT * FROM tbl_pelajar WHERE id_pelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_pelajar);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_object();
?>

<form action="kemaskini_simpan.php" method="post">
    <input type="hidden" name="id_pelajar" value="<?php echo $row->id_pelajar; ?>" />
    <table>
        <tr>
            <td><label for="nama_pelajar">Nama Pelajar</label></td>
            <td>
                <input id="nama_pelajar" type="text" name="nama_pelajar" value="<?php echo $row->nama_pelajar; ?>" required />
            </td>
        </tr>
        <tr>
            <td><label for="kp_pelajar">Kad Pengenalan</label></td>
            <td>
                <input id="kp_pelajar" type="text" step="any" name="kp_pelajar" value="<?php echo $row->kp_pelajar; ?>" required />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>