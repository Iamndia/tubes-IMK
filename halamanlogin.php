<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HALAMAN LOGIN</title>
</head>
<body class="halaman-login">

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<!-- <div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="proseslogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div> -->

	<div class="login-container">
        <form action="proseslogin.php" method="post">
			
            <input type="text" id="username" name="username" required placeholder="Username">
            <input type="password" id="password" name="password" required placeholder="password">
            <button type="submit">Login</button>
        </form>
    </div>
    
</body>
</html>