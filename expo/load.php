<?php include("config.php");

$id = $_POST['idProject'];
$project = mysql_query("SELECT * FROM registers WHERE id='$id'"); 

$data = mysql_fetch_array($project);

?>
<div class="modal-dialog">
	<div class="modal-content">
		<header>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><center><?php echo mb_strtoupper($data['title']); ?></center></h4>
			</div>
		</header>
		<div class="modal-body">
			<p><b>Componentes</b></p>
			<small>
				<ul>
					<li><?php echo $data['student1']; ?></li>
					<li><?php echo $data['student2']; ?></li>
					<li><?php echo $data['student3']; ?></li>
					<li><?php echo $data['student4']; ?></li>
				</ul>
			</small>
			<hr>
			<p><b>Arquivo: <a href="uploads/<?php echo $data['id']; ?>.docx">Baixar Projeto</a><hr>
				<?php if($data['status'] == 0) { ?>
				<b>Apontamento:</b></p>
				<form action="#" name="formm" id="formm">
					<div class="form-group">
						<input type="hidden" value="<?php echo $id; ?>" name="id">
						<textarea class="form-control" rows="5" name="mensagem" required><?php echo $data['feedback']; ?></textarea>
					</div>

					<hr>
					<p><b>Projeto</b></p>
					<div class="radio">
						<label><input type="radio" name="status" value="1">Deferido</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="2">Indeferido</label>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" >Fechar</button>
						<a href="#todos"><input  type="submit" class="btn btn-default" value="Enviar"/></a>
					</div>
				</form>
				<?php }
				else{
					echo "Status: ";
					if ($data['status'] == 1){
						echo "Indeferido";
					}
					else{
						echo "Deferido";
					}
					echo "<br /><br />Feedback: ";
					echo $data['feedback'];
				}
				?>
			</div>
		</div>
		<div id="myModal2" class="modal fade">
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="Close">
					&times;
				</a>
				<strong>Sucesso!</strong> Sua mensagem foi enviada</div>
			</div>

		</div>
	</div>
	<script type="text/javascript">
		jQuery('#formm').submit(function() {

			jQuery.ajax({
				type: "POST",
				url: "retorno.php",
				data: $('#formm').serialize(),
				success: function(data)
				{
					alert(data);
				} 
			});
			document.formm.reset();

			return false;
		});

	</script>