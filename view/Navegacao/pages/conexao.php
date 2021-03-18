<?php

$servidor = "localhost";
$usuario = "id6853421_root";
$senha = "adriel681105";
$dbname = "id6853421_banco_pessoas";


$conn = mysql_connect($servidor, $usuario, $senha);
mysql_select_db($dbname);

if(!$conn){

		die("Falha na conexão: " . mysql_connect_error());


}else{
	//echo "Conexão realizada com sucesso";
}






?>