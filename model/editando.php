<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
include_once("../model/conexao.php");

$nome = $_POST['nomev'];
$email = $_POST['emailv'];
$senha = $_POST['senhav'];
$telefone = $_POST['telefonev'];
$ramo = $_POST['ramov'];

$idv = $_SESSION['id'];

if($nome!= " "){

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = mysql_query("UPDATE usuario SET nome =  '$nome', email = '$email', senha = '$senha', telefone = '$telefone', ramo = '$ramo' WHERE id = $idv");

echo("<script>alert('Dados Alterados com sucesso');</script>");
echo("<script>window.location= '../view/Navegacao/pages/editadados.php';</script>");

}else{
	echo("<script>alert('Por favor preencha os campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();

	
}

?>
