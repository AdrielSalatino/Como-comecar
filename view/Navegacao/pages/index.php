
<!DOCTYPE html>
<html lang="en">

<head>
    
<?php

    session_start();

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     
     echo("<script>window.location= 'login_pasta/login.html';</script>");
     }
 
    $nome = $_SESSION['nome'];

?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>...Home...</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.php"><h4> <img src="/Logotipo.png" width="50" height="50"></a></h4>
                
                <?php

                    //echo $_SESSION['nome'];



                ?>

                
            </div>
            <!-- /.navbar-header -->

         
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                      <li>
                            <a href="#"><i class="fa fa-th"></i> Modelo de Negócio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="negociooque.html">O que é ?</a>
                                </li>
                                <li>
                                    <a href="negociovalor.html">Modelo de Proposta de Valor</a>
                                </li>
                                <li>
                                    <a href="negociointerface.html">Modelo de Inteface com o Comsumidor</a>
                                </li>
                                <li>
                                    <a href="negociooperacao.html">Modelo de Operação</a>
                                </li>
                                <li>
                                    <a href="negocioestrategico.html">Modelo Estratégico</a>
                                </li>
                                <li>
                                    <a href="negocioeconomico.html">Modelo Econômico</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-institution"></i> Tipos de Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Sociedade Empresária Limitada (Ltda.)</a>
                                </li>
                                <li>
                                    <a href="#">Empresa Individual de Responsabilidade Limitada (Eireli)</a>
                                </li>
                                <li>
                                    <a href="#">Empresa Individual</a>
                                </li>
                                <li>
                                    <a href="#">Microempreendedor Indivual (MEI)</a>
                                </li>
                                <li>
                                    <a href="#">Sociedade Simples (SS)</a>
                                </li>
                                <li>
                                    <a href="#">Sociedade Anônima (SA)</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o"></i> Portes de Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Microempresa (ME)</a>
                                </li>
                                <li>
                                    <a href="#">Empresa de Pequeno Porte (EPP)</a>
                                </li>
                                <li>
                                    <a href="#">Empresas de Médio e Grande Porte</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-money"></i> Regime Tributário<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Lucro Real</a>
                                </li>
                                <li>
                                    <a href="#">Lucro Presumido</a>
                                </li>
                                <li>
                                    <a href="#">Simples Nacional</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                       
                        
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuário<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Configurações</a>
                                </li>
                                <li>
                                    <a href="logout.php">Logout</a>
                                </li>
                                <li>
                                    <a href="comentarios.html">comentarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bem vindo <?php

                    echo "$nome";

                ?></h1>
                
             </div>

                 <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Como Começar ?
                        </div>
                        <div class="panel-body">
                            <p>O portal como começar tem o objetivo de auxiliar e passar informação para quem está na dúvida ou não sabe como começar seu negócio.<br>
                            Assista o video abaixo, depois leia o tutorial e navegue pelo menu para tirar todas suas dúvidas e iniciar sua empresa com o pé direito.</p>
                        </div>
                        <div class="panel-footer">
                            Boa sorte ! <i class="fa fa-thumbs-o-up"></i>
                        </div>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Como abrir a primeira empresa
                        </div>
                        
                        <div class="panel-body">
                            <iframe width="100%" height="550" src="https://www.youtube.com/embed/1Fjv274Ipks" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="panel-footer">
                            Conheça os tipos de microempreendimentos e as vantagens de ter uma empresa regularizada. 
                        </div>
                    </div>
                </div>

        </div>




            <div class="row">
               

                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Por onde começar...
                        </div>
                        <div class="panel-body">
                            <p>Depois de escolher um produto e estruturar um modelo de negócio, o empreendedor que quer abrir sua empresa precisa passar por uma série de etapas burocráticas até poder trabalhar legalmente. É preciso definir qual será o porte da empresa, onde ela estará localizada e o regime tributário.<br>
                            <br>Confira abaixo o passo a passo necessário para abrir uma empresa:<br>

<br>Qual tipo de empresa devo abrir?<br>

Em primeiro lugar, é preciso definir qual será o tipo societário da empresa – o que significa, basicamente, pensar em quantas pessoas estarão envolvidas no negócio. Segundo Ulliana, existem três opções para o empreendedor escolher: Empresário Individual, Empresa Individual de Responsabilidade Limitada (Eireli) ou Sociedade Limitada.

Empresário Individual e Eireli são modalidades em que o empreendedor pode abrir uma empresa sozinho, enquanto a Sociedade Limitada exige ao menos um sócio. A diferença entre os dois primeiros é que no Eireli há separação jurídica entre os bens pessoais e os negócios do empreendedor. 

Em caso de problemas, o empreendedor que optou pela Eireli responde na Justiça primeiramente como empresa, e não como pessoa física. A Sociedade Limitada também possui a separação jurídica dos bens.

O único requisito exigido para o empreendedor que quer optar pela Eireli é ter um capital social no valor de cem vezes o salário mínimo. atual. O capital pode ser calculado somando todos os ativos disponíveis no negócio, como computadores, carros e imóveis. Não há exigência de recursos mínimos para Sociedade Limitada e Empresário Individual.<br>

<br>Qual o porte da minha empresa?<br>

Depois que o empreendedor definiu como será composto seu negócio, ele precisa pensar no porte que sua empresa terá no começo. Nesse etapa, também existem apenas três opções disponíveis, que são escolhidas de acordo com o faturamento anual da empresa. São elas: Microempresário Individual (MEI), Micro empresa (ME), e Empresa de Pequeno Porte (EPP).

O MEI pode ser escolhido apenas por Empresários Individuais, e nele é permitido um faturamento anual de até R$ 60 mil. A ME e a EPP podem ser feitas com todos os tipos societários descritos acima. Na ME se enquadram as empresas com faturamento anual de até R$ 360 mil, já na EPP a faixa de faturamento começa nos R$ 360 mil e vai até R$ 3,6 milhões.

A variação no porte da empresa diz respeito à quantidade de impostos que serão pagos. Quanto à formalização, o Empresário Individual que optar pelo MEI pode fazer seu cadastro no Portal do Empreendedor. Nesse caso, o cadastro do MEI no portal já fornece um CNPJ ao empreendedor, o que permite o início da atividade comercial. Já aqueles que escolheram Sociedade Limitada ou Eireli e forem abrir uma ME ou EP são obrigados a contratar um contador, que ficará encarregado da burocracia.

Para encontrar um contador, Ulliana recomenda que o empreendedor busque um órgão de classe, como uma associação de contabilistas da região em que mora, ou um sindicato. "O Sescon (Sindicato dos Contabilistas) é o órgão mais representativo que nós indicamos no Sebrae", diz<br>

<br>Confira tudo com a prefeitura<br>

A próxima etapa é conferir se a atividade comercial que será exercida pode ser praticada no endereço desejado. Para isso, é preciso entrar em contato com a prefeitura, que irá conferir as limitações do zoneamento do município e emitir uma certidão para uso do solo – nessa etapa, é importante estar com o IPTU do imóvel em mãos.

Em algumas cidades, o empreendedor pode conferir o zoneamento e conseguir a certidão de uso do solo pela internet, mas em outras é preciso ir pessoalmente ao prédio da prefeitura. O consultor recomenda sempre conseguir a certidão de uso do solo antes de contratar um aluguel, pois "dependendo do local e do tamanho da empresa, pode ser que a prefeitura permita um MEI, mas não uma ME. Uma empresa que vá exigir circulação de caminhões ou que precise de estoque, por exemplo, não será liberada em uma zona residencial", explica.

Ao mesmo tempo em que for conferir com a prefeitura o zoneamento, o empreendedor também deve verificar as autorizações extras que irá precisar para abrir seu negócio. "Se eu for abrir uma lanchonete, por exemplo, irei utilizar botijão de gás, então precisarei da autorização do corpo de bombeiros". O consultor também cita como exemplos as certidões da vigilância sanitária e da Secretária Estadual do Meio Ambiente, que vistoria a poluição e o barulho produzidos por pequenas indústrias.

Segundo Ulliana, as MEs e as EPPs podem solicitar ao contador para cuidar dessa parte burocrática, mas o serviço é cobrado por cada etapa, e o preço varia de acordo com a cidade da empresa.<br>

<br>Abra a empresa e defina o regime tributário<br>

Depois de conferir tudo com a prefeitura, o empreendedor já poderá abrir sua empresa. Como já dito, o MEI é aberto pelo próprio empreendedor na internet. Enquanto as MEs e as EPPs são abertas na Junta Comercial pelo contador.

O regime tributário do MEI é composto por um imposto mensal fixo de 5% do salário mínimo, mais R$ 5 se o empreendedor for prestar serviços e R$ 1 se ele for contribuinte do ICMS. O ICMS será pago apenas por aqueles que forem trabalhar no comércio ou na indústria.

As MEs e as EPPs contam com três opções de tributação: o Simples nacional, o Lucro Presumido e o Lucro Real. No Simples Nacional, todos os impostos são agrupados em uma única guia de pagamento. A tributação, portanto, é feita de uma vez, e a porcentagem dos impostos é fixa, com base no faturamento do negócio. Empresas com até R$2 80 mil de faturamento pagam uma alíquota de 4%, enquanto outras com faturamento entre R$ 180 mil e R$ 360 mil pagam um taxa de 5,7%.

"No Lucro Presumido, é como se o governo estivesse prevendo o quanto a empresa terá de lucro". Assim, ao contrário do Simples Nacional, os impostos no Lucro Presumido são calculados e pagos separadamente, e o governo estipula uma porcentagem fixa para cada um deles. Se a empresa estiver com um lucro acima do presumido pelo governo, essa é a melhor opção.

Por último, o Lucro Real é aquele em que a empresa precisa comprovar seus gastos e rendimentos todo mês. Essa modalidade pode ser mais vantajosa para as empresas que estiverem com porcentagem de lucro menor que as presumidas pelo governo, pois as taxas cobradas variam com o lucro obtido.

O planejamento tributário é sempre feito por um advogado tributarista ou um analista fiscal que podem ser contratados por recomendação do contador. Como esses profissionais cobram pela atividade exercida, Ulliana alerta que o Simples Nacional acaba sendo muito mais barato, pois exige menos cálculos.

"Para o início, o ideal é seguir com o Simples Nacional. Quando a empresa crescer, expandir para novos estados e contratar funcionários, será bom rever os planos e considerar uma tributação mais complexa", recomenda Ulliana.<br>

<br>Nota fiscal<br>

Para que o empreendedor possa emitir nota fiscal, ele precisa pedir autorização para a prefeitura ou para a receita estadual, dependendo do seu negócio.

Prestadores de serviços pagam impostos para o município quando emitem nota e, portanto, devem entrar em contato com a prefeitura. Algumas cidades contam com serviços online que facilitam esse processo, mas outras exigem que o empreendedor vá até o prédio da prefeitura.

Por outro lado, as empresas que forem trabalhar com comércio ou indústria pagam impostos para a Secretaria da Fazenda do estado em que estiverem e podem solicitar a permissão nos respectivos sites.
                            </p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>




</body>

</html>
