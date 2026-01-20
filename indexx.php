<?php
$nama = "MUHAMMAD AZRIEL";
$nomatrik = "18DIT24F1011";
$kelas = "DIT4B/SWG1";
?>

<!DOCTYPE html>
<html>
<head>
    <h1>Biodata Saya</h1>

    <table>
        <tr>
            <td>
                <p><b>Nama:</b> <?= $nama ?></p>
                <p><b>No Matrik:</b> <?= $nomatrik ?></p>
                <p><b>Kelas:</b> <?= $kelas ?></p>
            </td>
            <td>
                <img src="gambar.jpeg" width="200">
            </td>
        </tr>
    </table>

</body>
</html>