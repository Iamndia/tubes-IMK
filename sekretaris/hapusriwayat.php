<?php

    include("../koneksi.php");
    $id = $_GET["id"];
    $delMhs = "DELETE FROM kompetisi WHERE id = '$id'";
    $resultMhs = mysqli_query($koneksi, $delMhs);

    if ($resultMhs) {
        echo"<script>alert('Data berhasil dihapus')</script>";
        echo"<script type='text/javascript'>window.location='kompetisi.php'</script>";
    }
    else{
        echo"<script>alert('Data gagal dihapus')</script>";
        echo"<script type='text/javascript'>window.location='kompetisi.php'</script>";
    }

?>