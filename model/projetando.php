
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

include_once './empreendimento.php';
include_once("conexao.php");

        $empreendimento = $_POST['empreendimento'];
        $ramoem = $_POST['ramo'];
        $negocioem = $_POST['negocio'];
        $valorem = $_POST['valor'];
        $consumidorem = $_POST['consumidor'];
        $operacaoem = $_POST['operacao'];
        $estrategicoem = $_POST['estrategico'];
        $economicoem = $_POST['economico'];
        $tipoem = $_POST['tipo'];
        $porteem = $_POST['porte'];
        $regimeem = $_POST['regime'];

$emp = new empreendimento();
$emp->setEmp($empreendimento);
$emp->setRamo($ramoem);
$emp->setNegocio($negocioem);
$emp->setValor($valorem);
$emp->setConsumidor($consumidorem);
$emp->setOperacao($operacaoem);
$emp->setEstrategico($estrategicoem);
$emp->setEconomico($economicoem);
$emp->setTipo($tipoem);
$emp->setPorte($porteem);
$emp->setRegime($regimeem);

$iduser = $_SESSION['id'];
//echo ''. $iduser;
//exit(0);    
if($emp->getEmp()!= "" && $emp->getRamo()!= ""&& $emp->getNegocio()!= ""&& $emp->getValor()!= ""&& $emp->getConsumidor()!= ""&& $emp->getOperacao()!= ""&& $emp->getEstrategico()!= ""&& $emp->getEconomico()!= ""&& $emp->getTipo()!= ""&& $emp->getPorte()!= ""&& $emp->getRegime()!= "")
{
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = mysql_query("INSERT INTO empreendimento(nome, ramo, negocio, valor, consumidor, operacao, estrategico, economico, tipo, porte, regime, usuario_id) VALUES('{$emp->getEmp()}', '{$emp->getRamo()}', '{$emp->getNegocio()}', '{$emp->getValor()}', '{$emp->getConsumidor()}', '{$emp->getOperacao()}', '{$emp->getEstrategico()}', '{$emp->getEconomico()}', '{$emp->getTipo()}', '{$emp->getPorte()}', '{$emp->getRegime()}', '{$iduser}')");

echo("<script>alert('Projeto de empreendimento cadastrado com sucesso. Para visualizar, acesse o menu projetos na página inicial');</script>");
echo("<script>window.location= '../view/Navegacao/pages/projetar.php';</script>");

}else{
	echo("<script>alert('Por favor preencha todos campos corretamente');</script>");
	echo("<script>history.back();</script>");
	exit();

	
}



