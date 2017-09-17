<?php 
	require_once("config.php");



	// carrega um usuário
	// $sabrina = new Usuario();
	// $sabrina->loadById(18);
	// echo $sabrina;

	// Carrega lista de todos os usuarios
	// $lista = Usuario::getList();
	// echo json_encode($lista);


	
	// busca no banco
	// $lista = Usuario::search("root");
	// echo json_encode($lista);

	// login
	// $lista = new Usuario();
	// $lista->login("felipe", "123asd456");
	// echo $lista;

	// adicionando ao banco
	// $aluno = new Usuario("Ka", "teste");
	// $aluno->insert();
	// echo $aluno;


	$aluno = new Usuario("Ka", "teste");
	$aluno->loadById(21);

	$aluno->update("Iracema", "teste");
	
	echo $aluno;



?>
