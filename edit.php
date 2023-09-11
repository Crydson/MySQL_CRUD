<!DOCTYPE html>
<html>
<head lang="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit/Update</title>
</head>
<body>
	<div>

		<<?php 
			require_once 'conexao.php';
			require_once 'entrar.php';
			
	 		$nome = isset($_POST['n']) $_POST['n']: "Não Informado"; 
			$email = isset($_POST['e']) $_POST['e']: "Não Informado";
		 	$senha = isset($_POST['']) $_POST['p']: "não informado";

		 	$oldE = Cadastro();


	 		$sql = "";
	 		$atribut = ["nome", "email", "senha"];

	 		$cursor = "SELECT email FROM tb_pessoas";

	 		if (log == 1){

	 			foreach($cursor as $row){
	 				if($row[0] == $oldE){
	 					$sql = "UPDATE tb_pessoas SET nome='$nome', email='$email', senha='$senha'";
	 				}
	 			}

		 	$users->mysql_query($sql);

		 	$users->mysql_close();
	 		
		 ?>

		<form method="get" action="entrar.php">			

			<label for="iN">Nome</label>
			<input type="text" id="iN" name="n">

			<label for="iE">Novo email</label>
			<input type="email" id="iE" name="e">

			<label for="iP">Nova senha</label>
			<input type="password" id="iP" name="p">

			<a href="read.php"><input type="submit" value="salvar"></a>
			

		</form>

	</div>
</body>
</html>