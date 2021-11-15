<?php
    $id_pelajar = $_GET['id_pelajar'];
    $sql = "SELECT * FROM tbl_pelajar WHERE id_pelajar = '$id_pelajar'";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id_pelajar);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    ?>
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="id_pelajar" value="<?php echo $row->id_pelajar; ?>"/>
        <table>
            <tr>
                <td><label for="nama_pelajar">Nama Makanan</label></td>
                <td>
                    <input id="nama_pelajar" type="text" name="nama_pelajar"
                           value="<?php echo $row->nama_pelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="kp_pelajar">Harga</label></td>
                <td>
                    <input id="kp_pelajar" type="number" step="any" name="kp_pelajar"
                           value="<?php echo $row->kp_pelajar; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>