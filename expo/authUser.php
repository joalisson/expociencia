<?php include("config.php");

if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
	header("Location: login.php"); 
	exit;
}

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$sql = "SELECT `id`, `name`,`serie`,`discipline` FROM `users` WHERE (`username` = '". $username ."') AND (`password` = '". ($password) ."') AND (`status` = 1) LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
	header("Location: login_error.php"); exit;
} else {

	$resultado = mysql_fetch_assoc($query);
	
	if (!isset($_SESSION)) session_start();

	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['name'];
                  $_SESSION['serie'] = $resultado['serie'];
                  $_SESSION['disc'] = $resultado['discipline'];

	header("Location: index.php"); exit;

}
?>