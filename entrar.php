	
<?php 
	require_once 'conexao.php';

	//$users = readUserAction($conn);
	//$sql = "INSERT INTO tb_pessoas (nome, email, senha) VALUES $nome, $email, $senha";
	
	$nome = "";
	$senha = "";
	$email = "";

	//Login
	if (isset($_GET['logar']))
	{
		//operação ternary faltava ? na sintaxe
		$log =  isset($_GET['l']) ? 1 : 0 ;

		//variaveis n estavam declaradas
		
		//não estava recuperando dados do formulario, as variaveis do POST foram renomeadas aqui e no index.php na tag "name"
		if (isset($_POST['email'])) $email= $_POST['email'];
		if (isset($_POST['senha'])) $senha = $_POST['senha'];
		

		//entendendo concatenaçao de variaveis
		echo "email $email \n";
		echo "senha $senha \n";
		
	    // essa é a query sql que roda no banco (exemplo): SELECT * FROM `tb_user` WHERE email = 'teste@site.com' AND senha ='123'

	    //a cada %s é inserido uma variavel no sprintf

		//Query de SQL mudou para selecionar apenas onde o email e senha são iguais aos fornecidos no formulario (otimização de codigo)
		//% insere os dados na string (concatenação)
		$sql = mysqli_query($conn,"SELECT * FROM tb_user WHERE email='$email' AND senha ='$senha'");
		

		//operação de mysql estruturada (aquela que n é orientada a objeto)
		//isso diza se a query sql em cima retornou alguma linha de resultado (se houver alguma significa que email e senha sao validos)
		if (mysqli_num_rows($sql) > 0) {
			echo "\nLogado com sucesso";
		} else {
			echo "Email ou Senha estão incorretos";
		}	

	}
		
	//Cadastro

	if (isset($_POST['nome'])) $nome = $_POST['nome'];
	if (isset($_POST['email'])) $email= $_POST['email'];
	if (isset($_POST['senha'])) $senha = $_POST['senha'];

	$sql = "INSERT INTO tb_user (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	if (mysqli_query($conn, $sql)){
		echo "Cadastro efetuado com sucesso";
	}
	else {
		echo "foi nao \n";
		echo $sql;
	}

	mysqli_close($conn);
	
  ?>


