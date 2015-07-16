<?php include("config.php"); 
session_start();
?>

<div class="widget-header">
	<h3>Projetos Deferidos</h3><hr>
</div>
<div class="widget-content">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Título</th>
				<th>Disciplina(s)</th>
				<th>Categoria</th>
				<th>Subcategoria</th>
				<th>Series</th>
				<th>Turmas</th>
				<th>Status</th>
				<th class="td-actions">AVALIAR</th>
			</tr>
		</thead>
				<?php $id = $_SESSION['UsuarioID']; ?>
                
                <?php
                        $disc = $_SESSION['disc'];
                
echo $disc;
echo $_SESSION['serie'];
                            
$series2 = $_SESSION['serie'];
                            
                        
                        if($_SESSION['serie'] == 1 OR $_SESSION['serie'] == 2){
                            $projects = mysql_query("SELECT *, id AS idProject FROM registers WHERE (discipline1 = '$disc' OR discipline2 = '$disc' OR discipline3 = '$disc') AND status <> 3 AND status <> 99 AND series = $series2");
                        }else{
                            $projects = mysql_query("SELECT *, R.id AS idProject FROM registers R INNER JOIN turmas T ON T.idProfessor = $id WHERE R.group1 = T.turma AND R.series = T.serie AND R.status = 1");
                        }
                            
                
                
                ?>
		<?php
		while($p = mysql_fetch_array($projects)){
			?>
			<tbody>
				<tr>
					<td><?php echo wordwrap($p['title'])?></td>
					<td><?php 
						if(!empty($p['discipline1'])){ echo $p['discipline1']; }
						if(!empty($p['discipline2'])){ echo ', '; echo $p['discipline2']; }
						if(!empty($p['discipline3'])){ echo ', '; echo $p['discipline3']; }  
						?>
					</td>
					<td><?php echo $p['category']?></td>
					<td><?php echo $p['subCategory']?></td>
					<td><?php echo $p['series']?></td>
					<td><?php echo $p['group1']?></td>
					<td><center><span class="glyphicon glyphicon-ok"></span></center></td>
					<td>
					<form action="#" method="POST" id="postProject_<?php echo $p['id']; ?>" onsubmit='teste("#postProject_<?php echo $p['id']; ?>")'>
							<input type="hidden" value="<?php echo $p['id']; ?>" name="idProject" />

							<a href="#myModal" data-toggle="modal" onclick='teste("#postProject_<?php echo $p['id']; ?>")'>
								<button class="btn btn-success" value="">ABRIR</button>
							</a>
						</form>								
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</tbody>
	</table>
</div>
