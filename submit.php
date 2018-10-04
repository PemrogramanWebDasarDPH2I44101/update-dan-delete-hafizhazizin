<?php
require("koneksi.php");
?>
 
<?php
    if (isset($_POST['nim'])) {
        $nim =$_POST['nim'];
        $nama =$_POST['nama'];
        $kelas =$_POST['kelas'];
        $tgl =$_POST['tgl'];

$query =$pdo ->prepare("INSERT INTO mahasiswa(nim,nama,kelas,tgl_lahir) VALUES ('$nim','$nama','$kelas','$tgl')");
$query -> execute();
    if($query)
    header("location:view.php");
    else{
        die("Tambah Data Gagal");  
    }
}
?>
