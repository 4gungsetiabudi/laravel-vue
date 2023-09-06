<?php
    include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang ORDER BY nama_pengarang ASC");
?>
 
<html>
<head>    
    <title>Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
◾
    <a href="index.php">Buku</a> ◾
    <a href="penerbit.php">Penerbit</a> ∬
    <a href="pengarang.php">PENGARANG</a> ∬
    <a href="katalog.php">Katalog</a> ◾
    <hr>
</center>
💨
<a href="pengarang_add.php" class="btn btn-primary" role="button">Tambahkan Pengarang</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Pengarang</th> 
        <th>Nama Pengarang</th> 
        <th>Email</th> 
        <th>No. Telepon</th> 
        <th>Alamat</th>
        <th>Mengubah</th>
    </tr>
    <?php  
        while($pengarang_data = mysqli_fetch_array($pengarang)) {         
            echo "<tr>";
            echo "<td>".$pengarang_data['id_pengarang']."</td>";
            echo "<td>".$pengarang_data['nama_pengarang']."</td>";
            echo "<td>".$pengarang_data['email']."</td>";
            echo "<td>".$pengarang_data['telp']."</td>";    
            echo "<td>".$pengarang_data['alamat']."</td>";           
            echo "<td><a class='btn btn-primary' href='pengarang_edit.php?nama_pengarang=$pengarang_data[nama_pengarang]'>Edit</a> | <a class='btn btn-danger' href='pengarang_delete.php?nama_pengarang=$pengarang_data[nama_pengarang]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>