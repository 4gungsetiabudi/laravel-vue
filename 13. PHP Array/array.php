<?php
$file = "uyeh.json";
$api = file_get_contents($file);
$data = json_decode($api, true);
?>

<header> Daftar Nilai </header>
<table>
    <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
    </tr>
    <?php
    $i = 1;
    foreach ($data as $row) :
    ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td><?= 2023 - substr($row['tanggal_lahir'], 0, 4); ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['nilai']; ?></td>
            <?php if ($row['nilai'] > 85) : ?>
                <td>A</td>
            <?php elseif ($row['nilai'] > 70  && $row['nilai'] <= 85) : ?>
                <td>B</td>
            <?php elseif ($row['nilai'] > 65  && $row['nilai'] <= 70) : ?>
                <td>C</td>
            <?php else : ?>
                <td>D</td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>
