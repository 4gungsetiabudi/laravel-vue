
<table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
        $uyeh = 10;
        while ($uyeh > 0) {
            for ($uhuy = 1; $uhuy <= 10; $uhuy++) {
        ?>
                <tr>
                    <td><?= $uhuy; ?></td>
                    <td>Nama ke <?= $uhuy; ?></td>
                    <td>Kelas <?= $uyeh--; ?></td>
                </tr>
        <?php
            }
        }
        ?>
</table>






