<?php
    require("koneksi.php");

    $id = $_GET['id'];
    $sql = $pdo  -> prepare("DELETE FROM mahasiswa WHERE id = $id");
    $sql -> execute();

    if ($sql) {
        header("Location:view.php");
    }else {
        echo "Data gagal di hapus";
    }
?>
