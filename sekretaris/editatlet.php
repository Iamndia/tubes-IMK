<?php

    include("../koneksi.php");
    $no = $_GET["no"];
    $editAtlet = "SELECT * FROM atlet WHERE no = '$no'";
    $resultAtlet = mysqli_query($koneksi, $editAtlet);
    $atlet = mysqli_fetch_array($resultAtlet);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA ATLET</title>
</head>
<body>

    <h3>Edit Data Atlet</h3>
    <br><hr><br>

    <?php

        if (!isset($_POST['submit'])) {

    ?>

            <form enctype="multipart/form-data" method="post">

                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><input type="text" name="no" value="<?php echo "$atlet[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo "$atlet[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value="<?php echo "$atlet[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="text" name="umur" value="<?php echo "$atlet[3]"; ?>"></td>
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

            $updateatlet = "UPDATE atlet SET nama = '$nama', alamat = '$alamat', umur = '$umur'  WHERE no = '$no'";
            $queryatlet = mysqli_query($koneksi, $updateatlet);

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