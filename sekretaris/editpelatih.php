<?php

    include("../koneksi.php");
    $no = $_GET["no"];
    $editPelatih = "SELECT * FROM pelatih WHERE no = '$no'";
    $resultPelatih = mysqli_query($koneksi, $editPelatih);
    $pelatih = mysqli_fetch_array($resultPelatih);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA PELATIH</title>
</head>
<body>

    <h3>Edit Data Pelatih</h3>
    <br><hr><br>

    <?php

        if (!isset($_POST['submit'])) {

    ?>

            <form enctype="multipart/form-data" method="post">

                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><input type="text" name="no" value="<?php echo "$pelatih[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo "$pelatih[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value="<?php echo "$pelatih[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="text" name="umur" value="<?php echo "$pelatih[3]"; ?>"></td>
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
                            <input type="submit" name="submit" value="UBAH" id="submit">
                        </td>
                    </tr>
                </table>

            </form>


    <?php
    
        }

        else{
            $no = $_POST["no"];
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $umur = $_POST["umur"];

            $updatePelatih = "UPDATE pelatih SET nama = '$nama', alamat = '$alamat', umur = '$umur'  WHERE no = '$no'";
            $queryPelatih = mysqli_query($koneksi, $updatePelatih);

            if ($queryPelatih) {
                echo"<script>alert('Data berhasil disimpan')</script>";
                echo"<script type='text/javascript'>window.location='pelatih.php'</script>";
            }else{
                echo"<script>alert('Data gagal disimpan')</script>";
                echo"<script type='text/javascript'>window.location='pelatih.php'</script>";
            }
        }
    
    ?>


</body>
</html>