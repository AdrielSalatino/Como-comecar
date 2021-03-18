
<?php
header('Content-Type: text/html; charset=utf-8');


include_once './usuario.php';
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaconf = $_POST['senhaconf'];
$telefone = $_POST['telefone'];
$ramo = $_POST['ramo'];

$user = new usuario();
$user->setNome($nome);
$user->setEmail($email);
$user->setSenha($senha);
$user->setTelefone($telefone);
$user->SetRamo($ramo);

if($user->getSenha() == $senhaconf){
    
if($user->getEmail()!= "" && $user->getSenha()!= ""){

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = mysql_query("INSERT INTO usuario(nome, email, senha, telefone, ramo) VALUES('{$user->getNome()}', '{$user->getEmail()}', '{$user->getSenha()}', '{$user->getTelefone()}', '{$user->getRamo()}')");

echo("<script>alert('Dados cadastrados com sucesso');</script>");
echo("<script>window.location= '../view/Navegacao/pages/login_pasta/login.html';</script>");

}else{
	echo("<script>alert('Por favor preencha os campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();

	
}


}else{
        echo("<script>alert('Senha indiferente, por favor preencha os campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();
    
    
}

