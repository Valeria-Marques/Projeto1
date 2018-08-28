<?php
include('principal.php');
if(isset($_REQUEST['page'])){
			include("page/".$_REQUEST['page'].".php");
		}

 ?>