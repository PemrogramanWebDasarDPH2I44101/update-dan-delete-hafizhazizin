<?php
require("koneksi.php");
?>
<form method="post">
    <table border="1">
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal Lahir</th>
        <?php
        $no=1;
        $query = $pdo -> prepare("SELECT * FROM mahasiswa");
        $query -> execute();
        while($data =$query -> fetch(PDO :: FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
            <td><?php echo $data['nim'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['kelas'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><a href="delet.php?id=<?php echo $data['id']?>">Hapus</a> | <a href="formupdate.php?id=<?php echo $data['id']?>">Update</a></td>
    </tr>
    <?php
         $no++;
    }
     ?>        
    </table>
</form>
