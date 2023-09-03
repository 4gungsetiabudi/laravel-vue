<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog ORDER BY nama ASC");
?>
 
<html>
<head>    
    <title>Katalog</title>
</head>
 
<body>

<center>
    <a href="index.php">Buku</a> |
    <a href="penerbit.php">Penerbit</a> |
    <a href="pengarang.php">Pengarang</a> |
    <a href="katalog.php">Katalog</a>
    <hr>
</center>

<a href="katalog_add.php">Tambahkan Katalog</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Katalog</th> 
        <th>Nama Katalog</th> 
        <th>Mengubah</th>
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>".$katalog_data['id_katalog']."</td>";
            echo "<td>".$katalog_data['nama']."</td>";           
            echo "<td><a class='btn btn-primary' href='katalog_edit.php?nama=$katalog_data[nama]'>Edit</a> | <a class='btn btn-danger' href='katalog_delete.php?nama=$katalog_data[nama]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>