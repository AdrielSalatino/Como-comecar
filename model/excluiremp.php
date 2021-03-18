<?php 
	
	
	$emp_codigo = ($_GET['cod']);

	header('Content-Type: text/html; charset=utf-8');

	session_start();
	include_once("../model/conexao.php");
	$sqlnome = mysql_query("SELECT nome FROM empreendimento where id = $emp_codigo LIMIT 1");
	$nome = mysql_fetch_array($sqlnome);
	

	


	$sqlexclui = mysql_query("DELETE FROM empreendimento WHERE id= $emp_codigo");
	echo("<script>alert('Usuario deletado com sucesso');</script>");
	echo("<script>window.location= '../view/Navegacao/pages/projetos.php';</script>");


 ?>

















