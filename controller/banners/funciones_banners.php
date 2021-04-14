<?php

function get_banners()
{
	require('./controller/conexion.php');
	
	$query = "SELECT idbanner, imagen, url, target
				FROM banners
			  WHERE estado = 1 ORDER BY idbanner DESC";
	
	$result = mysqli_query($conexion,$query);
	return($result);
}