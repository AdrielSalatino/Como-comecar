<?php

session_start();

include_once("conexao.php");	


	if ((isset($_POST['email'])) && (isset($_POST['senha']))) {

	
	$usuario = $_POST['email'];
	$senha = $_POST['senha'];
	//$senha = md5($senha);

	$sql = mysql_query("SELECT *FROM usuario WHERE email = '$usuario' and senha = '$senha' LIMIT 1");
	$sqlnome = mysql_query("SELECT nome FROM usuario WHERE email = '$usuario' LIMIT 1");
        $iduser = mysql_query("SELECT id FROM usuario WHERE email = '$usuario' LIMIT 1");
	$nome = mysql_fetch_row($sqlnome);
        $id = mysql_fetch_row($iduser);

	

	if(mysql_num_rows($sql) > 0){
		$_SESSION['email'] = $usuario;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $nome[0];
                $_SESSION['id'] = $id[0];
                
		echo("<script>window.location= '../view/Navegacao/pages/dashboard.php';</script>");
		
	}
	else{

			  unset ($_SESSION['email']);
 			  unset ($_SESSION['senha']);
 			   echo("<script>alert('Usuário ou senha inválidos');</script>");
 			  echo("<script>window.location= '../view/Navegacao/pages/login_pasta/login.html';</script>");
			 
			  
			

	}


}



?>