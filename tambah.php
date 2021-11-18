<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td><label for="nama_pelajar">Nama Pelajar</label></td>
                <td>
                    <input id="nama_pelajar" type="text" name="nama_pelajar" required />
                </td>
            </tr>
            <tr>
                <td><label for="kp_pelajar">Kad Pengenalan</label></td>
                <td>
                    <input id="kp_pelajar" type="text" step="any" name="kp_pelajar" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>