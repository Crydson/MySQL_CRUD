<!DOCTYPE html>
<html>
<head lang="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Read</title>
</head>
<body>
	<?php
	require_once 'conexao.php';
	require_once 'entrar.php';


	$users = readUserAction($conn);


	?>

	<div class="inteface">

		<table class="table_users">
			<tr>
				<td>NAME</td>
    			<td>EMAIL</td>
    			<td>SENHA</td>			
			</tr>
			<tr>
				<td><<?php echo $nome;  ?></td>
				<td><<?php echo $email;  ?></td>
				<td><<?php echo $senha; ?></td>
			</tr>

		</table>	

		<br>

		<a href="index.php">CADASTRO</a> <a href="editar.php">Editar</a>
	</div>

</body>
</html>