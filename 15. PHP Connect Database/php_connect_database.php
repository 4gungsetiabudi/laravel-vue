
<?php
    $servername = "localhost";
    $database = "perpustakaan";
    $username = "root";
    $password = "";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Check cnnection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // echo "Connected successfully";
    // mysqli_close($conn);

    $sql = "SELECT * FROM buku WHERE harga_pinjam <= 10000";
    $result = $conn->query($sql);
    ?>
    <table>
        <tr>
            <th>Isbn</th>
            <th>Judul Buku</th>
            <th>Quantity</th>
            <th>ID Pengarang</th>
        </tr>
        <?php
        foreach ($result as $r) :
        ?>
            <tr>
                <td><?= $r['isbn']; ?></td>
                <td><?= $r['judul']; ?></td>
                <td><?= $r['qty_stok']; ?></td>
                <td><?= $r['id_pengarang']; ?></td>

            </tr>
<?php endforeach; ?>
  