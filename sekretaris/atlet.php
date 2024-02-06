<?php

include("../koneksi.php");
$queryatlet = "SELECT * FROM atlet";
$resultatlet = mysqli_query($koneksi, $queryatlet);
$countatlet = mysqli_num_rows($resultatlet);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ATLET</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://kit.fontawesome.com/318850843b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="halaman-atlet">

    <div class="logok">
        <img src="../img/logo.png" alt="Logo">
    </div>

    <div class="sidebark">
        <p>
        <header>DRAGON EIGHT</header>
        </p>
        <ul>
            <li><a href="index.php"><i class="fas fa-qrcode"></i> Dashboard</a></li>
            <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profil Club</a></li>
            <li><a href="pelatih.php"><i class="fa-solid fa-user"></i> Pelatih</a></li>
            <li><a href="#"><i class="fa-solid fa-user-group"></i> Atlet</a></li>
            <li><a href="kompetisi.php"><i class="fa-solid fa-medal"></i> Kompetisi</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="riwayat">
            <p>
            <header>Jumlah Atlet <?php echo"$countatlet"; ?></header>
            <p>
        </div>

        <div class="topnav">
            <input type="search" placeholder="Search..">
            <a href="#"><i class="fas fa-search"></i></a>
        </div>

        <div class="table_section">
           
            <table>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php

                if ($countatlet > 0) {
                    while ($atlet = mysqli_fetch_array($resultatlet, MYSQLI_NUM)) {

                ?>

                        <tr>
                            <td><?php echo "$atlet[0]"; ?></td>
                            <td><?php echo "$atlet[1]"; ?></td>
                            <td><?php echo "$atlet[2]"; ?></td>
                            <td><?php echo "$atlet[3]"; ?></td>
                         



                            <td>
                                <a href="editatlet.php?no=<?php echo "$atlet[0]"; ?>"><span class="material-symbols-outlined">
                                        border_color
                                    </span></a> |
                                <a href="hapusatlet.php?no=<?php echo "$atlet[0]"; ?>"><span class="material-symbols-outlined">
                                        delete
                                    </span></a>
                            </td>
                        </tr>

                <?php

                    }
                } else {
                    echo "

<tr>
    <td colspan = '9' align='center' height='20'>
    <p>DATA BELUM ADA</p></td>
</tr>

";
                }
                ?>
            </table>
           
        </div>
        <a href="tambahatlet.php">
                <input type="submit" name="add" value="Tambah Atlet">
            </a>
    </div>
            <!-- <button class="fas fa-upload">Tambah Riwayat</button> -->
          
        
   

</body>

</html>

</body>
</html>