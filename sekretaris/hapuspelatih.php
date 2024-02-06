<?php

    include("../koneksi.php");
    $no = $_GET["no"];
    $delPelatih = "DELETE FROM pelatih WHERE no = '$no'";
    $resultPelatih = mysqli_query($koneksi, $delPelatih);

    if ($resultPelatih) {
        echo"<script>alert('Data berhasil dihapus')</script>";
        echo"<script type='text/javascript'>window.location='pelatih.php'</script>";
    }
    else{
        echo"<script>alert('Data gagal dihapus')</script>";
        echo"<script type='text/javascript'>window.location='pelatih.php'</script>";
    }

?>