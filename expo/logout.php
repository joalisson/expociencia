<?php
    session_start();

    $_SESSION['UsuarioID'] = '';
    $_SESSION['UsuarioNome'] = '';


    session_destroy(); 
    header("Location: login.php"); exit; 
?>