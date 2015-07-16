<?php include("config.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Expociência</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="firstIndex">
		<div class='formLogin'>
			<img src="images/logo_cav.png">
			<h2><b>Expociência</b></h2>
			<form action="authUser.php" method="POST" id="formUser">
				<input placeholder='Usuário' type='text' name="username" required>
				<input placeholder='Senha' type='password' name="password" required>
				<button class='animated infinite pulse'>Login</button>
				<p><center><b>Usuário ou senha incorretos</b></center></p>
			</form>
		</div>
	</div>
</body>
</html>