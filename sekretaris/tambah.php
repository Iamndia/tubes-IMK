<?php
include("../koneksi.php");
?>
<?php
if (!isset($_POST['submit'])) {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah riwayat</title>
</head>
<body>

    <form enctype="multipart/form-data" method="post">

        
    <table>
        
                    <tr>
                        <td>Penyelenggara</td>
                        <td>:</td>
                        <td><input type="text" name="penyelenggara" placeholder="penyelenggara"></td>
                    </tr>
                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td><input type="text" name="haritanggal" placeholder="haritanggal.."></td>
                    </tr>
                    <tr>
                        <td>Peserta</td>
                        <td>:</td>
                        <td><input type="text" name="peserta" placeholder="Peserta"></td>
                    </tr>
                    <tr>
                        <td>Kejuaraan</td>
                        <td>:</td>
                        <td><input type="text" name="kejuaraan" placeholder="kejuaraan"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="submit" value="Tambah" id="submit">
                        </td>
                    </tr>
                </table>

    </form>

    <?php
   
}else{
    
    $penyelenggara = $_POST["penyelenggara"];
    $haritanggal = $_POST["haritanggal"];
    $peserta = $_POST["peserta"];
    $kejuaraan = $_POST["kejuaraan"];

    $insertRiwayat = "INSERT INTO kompetisi (penyelenggara, haritanggal, peserta, kejuaraan) VALUES ('$penyelenggara','$haritanggal','$peserta','$kejuaraan')";
    $queryRiwayat = mysqli_query($koneksi, $insertRiwayat);
    if ($queryRiwayat) {
        echo"<script>alert('Data berhasil disimpan')</script>";
        echo"<script type='text/javascript'>window.location='kompetisi.php'</script>";
    }else{
        echo"<script>alert('Data gagal disimpan')</script>";
        echo"<script type='text/javascript'>window.location='kompetisi.php'</script>";
    }

}

?>
</body>
</html>

