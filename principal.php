<?php
	session_start();
	require("config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link href="css/pace-theme-minimal.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/pace.min.js"></script>
	<style type="text/css">
		#menu{
			background-color:#b388ff;
			color: black;
			margin-top:10px;
			z-index: 1;
			margin: 3px;
			position: absolute;
            -webkit-transition: 0.5s;
            transition: 0.5s;
    

    
		}
		#menu:hover{
			background-color:#b388ff;
			color: black;
			
            opacity: 1;
            filter: alpha(opacity=100);
			
		}
	</style>
</head>
<body class="menu">
<nav class="navbar navbar-dark" style="background-color:#b388ff">
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
         Categorias
        </a>
        <div class="dropdown-menu" id="menu" aria-labelledby="navbarDropdownMenuLink" >
          <ul class="nav">
	<?php
		$sql = "SELECT * FROM categoria";
		$query = mysqli_query($conexao, $sql);

		while($menus = mysqli_fetch_assoc($query)){
			echo "<li class='nav-item'>
		             <a class='nav-link' href='index.php?page=".$menus['nome']."'>".strtoupper($menus['nome'])."</a>
		  	      </li>";
		}

	?>
</ul>
        </div>
      </li>

</nav>
