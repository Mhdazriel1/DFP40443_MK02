<?php
include "biodata.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Biodata Saya</h1>

<table>
    <tr>
        <td>
            <p><b>Nama:</b> <?= $nama ?></p>
            <p><b>No Matrik:</b> <?= $nomatrik ?></p>
            <p><b>Kelas:</b> <?= $kelas ?></p>
        </td>
        <td>
            <img src="gambar.jpeg" width="200" alt="Gambar Pelajar">
        </td>
    </tr>
</table>

</body>
</html>
