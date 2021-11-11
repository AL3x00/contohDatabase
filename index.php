<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Nama Pelajar</th>
            <th>Kad Pengenalan</th>
            <th>Tindakkan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM tbl_pelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama_pelajar; ?></td>
                    <td><?php echo $row->kp_pelajar; ?></td>
                    <td>
                        <a href="kemaskini.php?idmakanan=<?php echo $row->idmakanan; ?>">Edit</a>
                        |
                        <a href="padam.php?idmakanan=<?php echo $row->idmakanan; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>