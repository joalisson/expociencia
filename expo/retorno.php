<?php include("config.php");

	$status = $_POST['status'];
        
                    if(empty($status)){
                        $status = 0;
                    }
                    
	$mensagem = $_POST['mensagem'];
	$id = $_POST['id'];
       
	$sql = "UPDATE registers SET feedback='$mensagem', status= '$status' WHERE id='$id'";
	mysql_query($sql);

        
                echo 'Alterações salvas com sucesso! Clique no botão fechar para continuar.';
        
?>