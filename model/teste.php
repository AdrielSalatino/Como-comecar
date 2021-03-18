<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
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
        
        echo 'Empreendimento: '.$empreendimento.'<br>';
        echo 'Ramo: '.$ramoem.'<br>';
        echo 'Negocio: '.$negocioem.'<br>';
        echo 'Valor: '.$valorem.'<br>';
        echo 'Consumidor: '.$consumidorem.'<br>';
        echo 'Operacao: '.$operacaoem.'<br>';
        echo 'Estrategico: '.$estrategicoem.'<br>';
        echo 'Economico: '.$economicoem.'<br>';
        echo 'Tipo: '.$tipoem.'<br>';
        echo 'Porte: '.$porteem.'<br>';
        echo 'Regime: '.$regimeem.'<br>';
        ?>
    </body>
</html>
