<?php
    include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit ORDER BY nama_penerbit ASC");
?>
 
<html>
<head>    
    <title>Penerbit</title>
</head>
 
<body>

<center>
    <a href="index.php">Buku</a> |
    <a href="penerbit.php">Penerbit</a> |
    <a href="pengarang.php">Pengarang</a> |
    <a href="katalog.php">Katalog</a>
    <hr>
</center>

<a href="penerbit_add.php">Tambahkan Penerbit</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Penerbit</th>
        <th>Nama Penerbit</th> 
        <th>Email</th> 
        <th>No. Telepon</th> 
        <th>Alamat</th>
        <th>Mengubah</th>
    </tr>
    <?php  
        while($penerbit_data = mysqli_fetch_array($penerbit)) {         
            echo "<tr>";
            echo "<td>".$penerbit_data['id_penerbit']."</td>";
            echo "<td>".$penerbit_data['nama_penerbit']."</td>";
            echo "<td>".$penerbit_data['email']."</td>";
            echo "<td>".$penerbit_data['telp']."</td>";    
            echo "<td>".$penerbit_data['alamat']."</td>";           
            echo "<td><a class='btn btn-primary' href='penerbit_edit.php?nama_penerbit=$penerbit_data[nama_penerbit]'>Edit</a> | <a class='btn btn-danger' href='penerbit_delete.php?nama_penerbit=$penerbit_data[nama_penerbit]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>