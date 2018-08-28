<style type="text/css">
	.im{ width: 200px; height: 200px; }
</style>
	<div>
		<h5 style="color: #424242; text-align: center;">Adiministração</h5>
		<?php
		error_reporting(0);
		$sql = "SELECT * FROM curso WHERE cat = 'adm'";
		$query = mysqli_query($conexao, $sql);
		while($cursos = mysqli_fetch_assoc($query)){
			echo '
				<div class="card" style="margin:9px;"">
				  <div class="card-body">
				    <img class="card-title im" src="img/'.$cursos['img'].'" alt="">
				    <h4 class="card-title" style="text-align:center;">'.$cursos['curso'].'</h4>
				    <h4 class="card-title" style="text-align:center">'.$cursos['ch'].'</h4>
				    <h4 class="card-title" style="text-align:center">'.$cursos['nivel'].'</h4>
				  </div>
				</div>
			';
		}
		?>
	</div>