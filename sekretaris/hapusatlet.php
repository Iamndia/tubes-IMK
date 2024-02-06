<?php

    include("../koneksi.php");
    $no = $_GET["no"];
    $delAtlet = "DELETE FROM atlet WHERE no = '$no'";
    $resultAtlet = mysqli_query($koneksi, $delAtlet);

    if ($resultAtlet) {
        echo"<script>alert('Data berhasil dihapus')</script>";
        echo"<script type='text/javascript'>window.location='atlet.php'</script>";
    }
    else{
        echo"<script>alert('Data gagal dihapus')</script>";
        echo"<script type='text/javascript'>window.location='atlet.php'</script>";
    }

?>