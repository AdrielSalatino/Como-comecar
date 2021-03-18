<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
include_once("../model/conexao.php");

$nome = $_POST['nome'];
$ramo = $_POST['ramo'];
$negocio = $_POST['negocio'];
$valor = $_POST['valor'];
$consumidor = $_POST['consumidor'];
$operacao = $_POST['operacao'];
$estrategico = $_POST['estrategico'];
$economico = $_POST['economico'];
$tipo = $_POST['tipo'];
$porte = $_POST['porte'];
$regime = $_POST['regime'];

$idv = $_SESSION['id'];
$emp_codigo = ($_GET['cod']);

if($nome!= " "){

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = mysql_query("UPDATE empreendimento SET nome =  '$nome', ramo = '$ramo', negocio = '$negocio', valor = '$valor', consumidor = '$consumidor', operacao = '$operacao', estrategico = '$estrategico', economico = '$economico', tipo = '$tipo', porte = '$porte', regime = '$regime' WHERE id = $emp_codigo");

echo("<script>alert('Dados Alterados com sucesso');</script>");
echo("<script>window.location= '../view/Navegacao/pages/projetos.php';</script>");

}else{
	echo("<script>alert('Por favor preencha os campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();

	
}

?>