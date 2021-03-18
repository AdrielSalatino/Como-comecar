
<?php



include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

if($email!= "" && $senha!= ""){


$sql = mysql_query("INSERT INTO usuarios(nome, email, senha, telefone) VALUES('$nome', '$email', '$senha', '$telefone')");

echo("<script>alert('Dados cadastrados com sucesso');</script>");
echo("<script>window.location= 'login_pasta/login.html';</script>");

}else{
	echo("<script>alert('Por favor preencha os campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();

	
}



?>