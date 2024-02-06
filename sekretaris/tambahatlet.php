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
    <title>Tambah Atlet</title>
</head>
<body>

    <form enctype="multipart/form-data" method="post">

        
    <table>
        
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="nama"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="text" name="umur" placeholder="umur"></td>
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
    
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $umur = $_POST["umur"];

    $insertatlet = "INSERT INTO atlet (nama, alamat, umur) VALUES ('$nama','$alamat','$umur')";
    $queryatlet = mysqli_query($koneksi, $insertatlet);
    if ($queryatlet) {
        echo"<script>alert('Data berhasil disimpan')</script>";
        echo"<script type='text/javascript'>window.location='atlet.php'</script>";
    }else{
        echo"<script>alert('Data gagal disimpan')</script>";
        echo"<script type='text/javascript'>window.location='atlet.php'</script>";
    }

}

?>
</body>
</html>

