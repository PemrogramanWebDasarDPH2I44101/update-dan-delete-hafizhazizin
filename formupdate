<?php
    require("koneksi.php");
    $id = $_GET['id'];
    $sql = $pdo  -> prepare("SELECT * FROM mahasiswa WHERE id = '$id'");
    $sql -> execute();
    $data = $sql -> fetch(PDO::FETCH_ASSOC);
?>

<form method="post">
    <table>
    <th><h3>Silahkan Isi Data Dibawah Ini</h3></th>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim" value="<?php echo $data['nim'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas">
                    <option value="<?php echo $data['kelas'] ?>"><?php echo $data['kelas'] ?></option>
                </select></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl" id="tgl" value="<?php echo $data['tgl_lahir'] ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['nama'])){
        $nim =$_POST['nim'];
        $nama =$_POST['nama'];
        $kelas =$_POST['kelas'];
        $tgl =$_POST['tgl'];

        $sql= $pdo -> prepare("UPDATE mahasiswa SET nim='$nim',nama='$nama',kelas='$kelas',tgl_lahir='$tgl'");
        $sql -> execute();
        if($sql){
            header("Location:view.php");
        }else{
            echo "Data gagal Update";
        }
    }
?>
