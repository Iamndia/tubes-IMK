<?php

    include("../koneksi.php");
    $getid = $_GET["id"];
    $editRiwayat = "SELECT * FROM kompetisi WHERE id = '$getid'";
    $resultRiwayat = mysqli_query($koneksi, $editRiwayat);
    $riwayat = mysqli_fetch_array($resultRiwayat);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA RIWAYAT</title>
</head>
<body>

    <h3>Edit Data Riwayat</h3>
    <br><hr><br>

    <?php

        if (!isset($_POST['submit'])) {

    ?>

            <form enctype="multipart/form-data" method="post">

                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><input type="text" name="id" value="<?php echo "$riwayat[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>penyelenggara</td>
                        <td>:</td>
                        <td><input type="text" name="penyelenggara" value="<?php echo "$riwayat[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Hari/tanggal</td>
                        <td>:</td>
                        <td><input type="text" name="haritanggal" value="<?php echo "$riwayat[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Peserta</td>
                        <td>:</td>
                        <td><input type="text" name="peserta" value="<?php echo "$riwayat[3]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kejuaraan</td>
                        <td>:</td>
                        <td><input type="text" name="kejuaraan" value="<?php echo "$riwayat[4]"; ?>"></td>
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
            $id = $_POST["id"];
            $penyelenggara = $_POST["penyelenggara"];
            $haritanggal = $_POST["haritanggal"];
            $peserta = $_POST["peserta"];
            $kejuaraan = $_POST["kejuaraan"];

            $updateRiwayat = "UPDATE kompetisi SET penyelenggara = '$penyelenggara', haritanggal = '$haritanggal', peserta = '$peserta', kejuaraan = '$kejuaraan' WHERE id = '$id'";
            $queryRiwayat = mysqli_query($koneksi, $updateRiwayat);

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