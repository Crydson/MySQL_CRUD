<!DOCTYPE html>
<html>
<head lang="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>

</head>
<body>

<h1> CRUD </h1>
	<fieldset>
		<div id="inteface">
			
			<form method="post" action="entrar.php">			
				
				<label for="iN">Nome</label>
				<input type="text" id="iN" name="nome">

				<label for="iE">Email</label>
				<input type="email" id="iE" name="email">

				<label for="iP">Senha</label>
				<input type="password" id="iP" name="senha">

				<input type="submit" value="salvar"></a>

			</form>
			
			<form method="get" action="entrar.php?logar=true">
				<label for="iE">Email</label>
				<input type="email" id="iE" name="email">

				<label for="iP">Senha</label>
				<input type="password" id="iP" name="senha">

				<input type="submit" id="iL" value="Login" name="l" placeholder="0">
			</form>
		</div>

	</fieldset>
</body>
</html>