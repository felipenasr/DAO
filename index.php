<?php 
	require_once("config.php");


	$sabrina = new Usuario();

	$sabrina->loadById(18);


	echo $sabrina;
?>
