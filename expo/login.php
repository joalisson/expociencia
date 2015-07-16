<?php include("config.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Expociência</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript">
		window.history.go(1);
	</script>

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
			</form>
		</div>
	</div>
</body>
</html>