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
    $id = $_SESSION['id'];
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novo projeto</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
        <link href="./css/style-dashboard.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="bg-img" style="background-image: url('../../inicial/img/fundo.jpg'); ">
		<div class="overlay"></div>
	</div>
	
	
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; height:4em;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php" style="padding:3px 15px;">
                    <img src="noticias/images/logo.png" alt="Logo" style="max-height:47px;">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
               <li><?php  echo "Bem vindo, ".$nome; ?></li>
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="dados.php"><i class="fa fa-user fa-fw"></i> Seu perfil</a>
                        </li>
                        <li><a href="editadados.php"><i class="fa fa-gear fa-fw"></i> Editar seu perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../../controller/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        
            <!-- /.row -->
            
             <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1>Novo projeto de empreendimento</h1>
                        <p>Navege pelas abas e estruture seu negócio</p>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

        <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            + Projeto
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#seu-negocio" data-toggle="tab">Seu negócio</a>
                                </li>
                                <li><a href="#modelo-negocio" data-toggle="tab">Modelo de negócio</a>
                                </li>
                                <li><a href="#modelo-valor" data-toggle="tab">Modelo de proposta de valor</a>
                                </li>
                                <li><a href="#modelo-consumidor" data-toggle="tab">Modelo de interface com o consumidor</a>
                                </li>
                                <li><a href="#modelo-operacao" data-toggle="tab">Modelo de operação</a>
                                </li>
                                <li><a href="#modelo-estrategico" data-toggle="tab">Modelo estratégico</a>
                                </li>
                                <li><a href="#modelo-economico" data-toggle="tab">Modelo Econômico</a>
                                </li>
                                <li><a href="#tipo" data-toggle="tab">Tipo de Empreendimento</a>
                                </li>
                                <li><a href="#porte" data-toggle="tab">Porte de empreendimento</a>
                                </li>
                                <li><a href="#regime" data-toggle="tab">Regime tributário</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <form method="POST" action="../../../model/projetando.php">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="seu-negocio">
                                    <h4>Seu negócio</h4>
                                     <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina o nome do seu negócio
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Nome do empreendimento:</label>
                                                    <input class="form-control" name="empreendimento" placeholder="Nome do Empreendimento">

                                                    <div class="form-group">
                                                        <label>Ramo do seu empreendimento:</label>
                                                        <select class="form-control" name="ramo">
                                                            <option value="Agricultura">Agricultura</option>
                                                            <option value="Alimentos e bebidas">Alimentos e bebidas</option>
                                                            <option value="Artesanato">Artesanato</option>
                                                            <option value="Beleza">Beleza</option>
                                                            <option value="Contrução e reforma">Contrução e reforma</option>
                                                            <option value="Economia">Economia</option>
                                                            <option value="Moveis e decoração">Moveis e decoração</option>
                                                            <option value="Tecnologia">Tecnologia</option>
                                                            <option value="Mercearia e supermercados">Mercearia e supermercados</option>
                                                            <option value="Metal mecânico">Metal mecânico</option>
                                                            <option value="Moda">Moda</option>
                                                            <option value="Mineração">Mineração</option>
                                                            <option value="Saúde">Saúde</option>
                                                            <option value="Turismo">Turismo</option>
                                                            <option value="Veículos">Veículos</option>
                                                        </select>
                                                     </div> 
                                                 </div>
                                            

                                            </div>

                                        </div>
                                        <a href="#modelo-negocio" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>

                                    </div>
                                </div>
                                   
                                </div>
                                <div class="tab-pane fade" id="modelo-negocio">
                                    <h4>O que é modelo de negócio</h4>
                                    <p>Modelo de negócio é a forma pela qual uma empresa cria valor para todos os seus principais públicos de interesse. Sua utilização ajuda a ver de forma estruturada e unificada os diversos elementos que compõe todas as formas de negócios.
                                    </p>
                                <div class="row">   
                                  <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                O que é modelo de negocio
                                            </div>
                                            
                                            <div class="panel-body">
                                                <iframe width="100%" height="505" src="https://www.youtube.com/embed/i3trxwNsMjc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                            <div class="panel-footer">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de negócio
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo de negócio: </label>
                                                    <textarea class="form-control" rows="3" name="negocio"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <a href="#modelo-valor" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>

                                <div class="tab-pane fade" id="modelo-valor">
                                    <h4>Modelo de proposta valor</h4>
                                    <p>É a forma pela qual a empresa define qual é o seu diferencial no mercado. A forma pela qual é ela única e se destaca de todas as demais empresas que participam desse mesmo mercado.</p>
                                     <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de proposta de valor:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo de proposta de valor: </label>
                                                    <textarea class="form-control" rows="3" name="valor"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#modelo-consumidor" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>
                                <div class="tab-pane fade" id="modelo-consumidor">
                                    <h4>Modelo de interface com o consumidor</h4>
                                    <p>Esse modelo descreve onde, quando e como uma empresa interage com os seus consumidores. Essa interação pode se dar através de lojas, embalagens de produtos, comerciais, SAC, Website, e etc.</p>
                                    <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de interface com o consumidor:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo de interface com o consumidor: </label>
                                                    <textarea class="form-control" rows="3" name="consumidor"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#modelo-operacao" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>
                                <div class="tab-pane fade" id="modelo-operacao">
                                    <h4>Modelo de operação</h4>
                                    <p>É como que uma empresa faz para levar o seu produto até o seu consumidor. Deve prever todas as etapas necessárias para viabilizar sua produção, passando por logística, até chegar às mãos de quem compra o seu produto ou serviço.</p>
                                     <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de operação:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo de operação: </label>
                                                    <textarea class="form-control" rows="3" name="operacao"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#modelo-estrategico" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>
                                <div class="tab-pane fade" id="modelo-estrategico">
                                    <h4>Modelo Estratégico</h4>
                                    <p>É a descrição de como uma empresa irá atingir os seus objetivos estratégicos. Nesse modelo é onde visualizamos a missão de uma empresa, sua visão, seus valores e todas as competências necessárias para que a empresa funcione de forma adequada.</p>
                                    <div class="row">
                                         <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de estratégico:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo estratégico: </label>
                                                    <textarea class="form-control" rows="3" name="estrategico"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#modelo-economico" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>
                                <div class="tab-pane fade" id="modelo-economico">
                                    <h4>Modelo econômico</h4>
                                    <p>É onde se demonstra a viabilidade financeira de uma empresa. Esse modelo mostra como uma empresa ganha recursos e paga suas despesas a fim de atingir a sustentabilidade.</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina seu modelo de econômico:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    <label>Modelo econômico: </label>
                                                    <textarea class="form-control" rows="3" name="economico"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#tipo" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                </div>
                                <div class="tab-pane fade" id="tipo">
                                    <h4>Tipo do seu empreendimento</h4>
                                    <p>Para diferentes atividades e números de sócios, existem diferentes tipos de empresas. E é importante saber quais são e como se diferenciam antes da abertura, pois isso reflete nos direitos e deveres e na administração do negócio.<br>
                                    Veja abaixo os tipos de negócios e selecione o que melhor atende sua demanda.</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Sociedade Empresária Limitada (Ltda.):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Esse tipo de empresa é aquele no qual o negócio tem dois ou mais sócios, o que explica o seu nome.<br>
                                                Quanto ao termo Limitada, refere-se ao fato de que os sócios são responsáveis financeira e administrativamente pela empresa conforme o capital social que aplicaram e a cláusula de exercício de administração do contrato social.<br>
                                                Por isso, os envolvidos não respondem pelas dívidas empresariais, por exemplo, com todos os seus bens pessoais. Os patrimônios de pessoa jurídica e pessoas físicas são legalmente separados.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Empresa Individual de Responsabilidade Limitada (Eireli):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>A Eireli funciona da mesma forma que a Limitada, mas a lei exige um capital mínimo de 100 (cem) salários mínimos, 100% integralizado na abertura. A diferença entre elas é que a Eireli sempre é formada por apenas um sócio, da seguinte forma:<br><br>
                                                * Ele toma decisões sozinho, por ser o único envolvido;<br>
                                                * Tem seu patrimônio separado daquele da empresa;<br>
                                                * Responde financeiramente por ela até o limite do capital social;<br>
                                                * E usa na empresa um nome empresarial, não o seu nome.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Empresa individual:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Na empresa individual o empresário não é sócio, mas proprietário dela. Inclusive, o nome empresarial tem de ser o mesmo do empresário, apenas tendo a opção de escolher o nome fantasia. Por exemplo:<br><br>

                                                * Nome empresarial: Adriel Salatino, caso nosso escritório fosse uma empresa individual;<br>
                                                * Nome fantasia: Como Começar — Serviços empresariais.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Microempreendedor individual(MEI):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Também é uma empresa individual, pela qual o proprietário — que dá seu nome ao negócio — é totalmente responsável, inclusive com seus bens de pessoa física.<br><br>

                                                MEIs, logo na abertura, são automaticamente enquadradas no Simples Nacional, não tendo liberdade de escolha por regime tributário. Além disso, não podem faturar mais de R$ 60 mil anualmente. Caso ultrapassem o valor, devem fazer a transição para empresa individual.<br><br>

                                                Outra restrição é quanto ao número de funcionários, que não pode passar de um. Por isso, se o empreendedor tiver a necessidade de contar com mais mão de obra, precisa mudar o tipo de empresa para contratação.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Sociedade Simples(SS):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Uma SS, em termos de abertura, contrato social e formalização nos órgãos públicos, tem algumas semelhanças com a sociedade limitada.<br><br>

                                                    A característica específica de Sociedades Simples é a finalidade. Ela é uma empresa que une prestadores de serviços para atividades intelectuais, técnicas e científicas. Por exemplo, arquitetos ou advogados podem optar por este formato ao abrirem suas empresas, caso tenham sócios da mesma área.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Sociedade Anônima(SA):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>SAs são empreendimentos com capital social dividido em ações, diferente dos sistema de quotas utilizados por outros tipos de empresas.<br><br>

                                                    A Sociedade Anônima é dividida ainda em dois subtipos:<br><br>

                                                     * SA de capital aberto: é a organização que vende ações na bolsa de valores ao público geral por intermediação de instituições financeiras, como bancos e corretoras;<br>
                                                     * SA de capital fechado: também tem o capital dividido em ações internamente entre os sócios e outros interessados ou convidados. Mas não conta com capital aberto ao público em bolsa de valores.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina o tipo do seu empreendimento:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    

                                                    <div class="form-group">
                                                        <label>Tipo do seu empreendimento:</label>
                                                        <select class="form-control" name="tipo">
                                                            <option value="Sociedade Empresária Limitada (Ltda.)">Sociedade Empresária Limitada (Ltda.)</option>
                                                            <option value="Empresa Individual de Responsabilidade Limitada (Eireli)">Empresa Individual de Responsabilidade Limitada (Eireli)</option>
                                                            <option value="Empresa individual">Empresa individual</option>
                                                            <option value="Microempreendedor individual(MEI)">Microempreendedor individual(MEI)</option>
                                                            <option value="Sociedade Simples(SS)">Sociedade Simples(SS)</option>
                                                            <option value="Sociedade Anônima(SA)">Sociedade Anônima(SA)</option>
                                                            
                                                        </select>
                                                     </div> 
                                                 </div>
                                             </div> 
                                            </div>
                                        </div>
                                </div>
                                <a href="#porte" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                                
                                
                                
                                
                             
                                </div>
                                <div class="tab-pane fade" id="porte">
                                    <h4>Porte do seu empreendimento</h4>
                                    <p>Em suma, o porte de empresa serve para o mercado avaliar a potência econômica de uma companhia, de acordo com o seu faturamento (incluindo filiais) ou número de colaboradores.<br>
                                       Veja abaixo os portes de negócios e selecione o que melhor atende sua demanda.</p>
                                       
                                       <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Microempresa (ME):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Conforme a Lei Complementar 123, de 2006, o porte micro diz respeito às empresas que faturam no máximo R$ 360 mil por ano.<br>

                                                    Elas podem, desde que não exerçam atividade impeditiva, optarem pelo Simples Nacional.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Empresa de Pequeno Porte (EPP):
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>É a empresa que fatura acima de R$ 360 mil por ano até o limite de R$ 3,6 milhões anuais. Como a ME, pode estar enquadrada no Simples se não desenvolver alguma atividade que o regime não permita.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Empresas de médio e grande porte:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Para a classificação de portes de empresas maiores, os órgãos públicos e de fiscalização utilizam diferentes critérios, como de número de funcionários. O Banco Nacional do Desenvolvimento (BNDES), por exemplo, usa o critério de faturamento:<br><br>

                                                    * Acima de R$ 16 milhões até R$ 90 milhões por ano: média;<br>
                                                    * Acima de R$ 90 milhões até R$ 300 milhões anualmente: média-grande;<br>
                                                    * Após os R$ 300 milhões anuais: grande.<br><br>
                                                    
                                                    Conforme o BNDES, negócios que faturam entre R$ 3,6 milhões e R$ 16 milhões anuais ainda são EPP. Mesmo assim, pela receita, não são autorizadas a optar pelo Simples.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina o porte do seu empreendimento:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    

                                                    <div class="form-group">
                                                        <label>Porte do seu empreendimento:</label>
                                                        <select class="form-control" name="porte">
                                                            <option value="Microempresa (ME)">Microempresa (ME)</option>
                                                            <option value="Empresa de Pequeno Porte (EPP)">Empresa de Pequeno Porte (EPP)</option>
                                                            <option value="Empresas de médio e grande porte">Empresas de médio e grande porte</option>
                                                            
                                                            
                                                        </select>
                                                     </div> 
                                                 </div>
                                             </div> 
                                            </div>
                                        </div>
                                </div>
                                <a href="#regime" data-toggle="tab"><button type="button" class="btn btn-success">Próximo</button></a>
                               
                                </div>
                                <div class="tab-pane fade" id="regime">
                                    <h4>Regime tributário do seu empreendimento</h4>
                                    <p>O regime tributário é o conjunto de normas e leis que define a forma de tributação das empresas, determinando como será realizada a cobrança de impostos conforme o volume de arrecadação.<br>
                                    Veja abaixo os regimes tributários e selecione o que melhor atende sua demanda.</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Simples Nacional:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Este regime é indicado para microempresas ou empresas de pequeno porte. A sua proposta é simplificar a burocracia para estas organizações, de forma a reduzir a carga tributária e unificar os impostos em uma única guia a pagar, tanto Municipais, quanto Estaduais e Federais.<br><br>

                                                O valor do faturamento para enquadramento no Simples Nacional até 31.12.2017 é de R$ 3.600.000,00 anual. Para 2018, o limite da receita bruta passa para R$ 4.800.000,00 por ano.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Lucro Real:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>A apuração dos impostos pelas empresas que optam por este regime é baseado no faturamento mensal ou trimestral da empresa e o cálculo dos impostos incide sobre o lucro efetivo da mesma. A apuração dos resultados se baseia no cálculo das receitas subtraindo as despesas e custos.<br><br>

                                                Para alguns tipos de empresas a opção por este regime se torna obrigatória em razão da atividade exercida, negócios como: bancos comerciais, sociedades de créditos, corretoras de Títulos, factoring, investimentos e financiamentos. Incluindo também aquelas empresas cujo Faturamento Bruto Anual seja superior a R$ 48 milhões.<br><br>

                                                Diferente do SIMPLES, este regime não tem a proposta de simplificar a apuração dos tributos e as declarações. As alíquotas dos impostos não possuem seus valores reduzidos, sendo alíquotas diferenciadas para cada operação com guias para recolhimento dos impostos individualizadas.<br><br>

                                                Ao escolher este regime, o empresário deve estar atento para o cumprimento das obrigações acessórias e deve preocupar em manter todos os lançamentos financeiros de receitas e despesas contábeis em dia e comprovados.<br><br>

                                                Esse fato se dá pelo motivo da Receita Federal exigir que, neste regime, o Lucro apurado seja declarado por meio das obrigações acessórias como o Sped Contábil, LALUR, Inventário, Demonstrativo de Resultados (DRE), Relatório de Lançamentos no Caixa, ECF, entre outras declarações.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Lucro Presumido:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                <p>Neste regime, visando simplificar o cálculo dos impostos, é utilizado um valor de “Lucro Presumido”.<br><br>

                                                De forma mais clara, a Receita Federal presume qual será o Lucro da empresa baseado na atividade exercida, gerando um valor médio de lucro e alíquota que estas empresas teriam que pagar. Uma vez que a legislação estabelece as alíquotas a serem usadas para o cálculos baseadas no faturamento da empresa e por atividade exercida.<br><br>

                                                Este regime é indicado para a empresa cujo faturamento anual seja menor que R$ 78 milhões e maior que R$ 4 milhões.<br><br>

                                                Diferente de outros tipos de regimes tributários, como o Lucro Real, as empresas que atuam no mercado financeiro (corretoras, bancos, factoring, entre outras) não podem se enquadrar nesse regime.<br><br>

                                                A opção por este regime pode ser realizada no ano da constituição da empresa, desde que o valor da receita bruta não ultrapasse o limite anual.<br><br>

                                                Como o Lucro Real, a empresa que opta por este regime tem que pagar várias guias específicas e diversas declarações acessórias, mas mesmo assim, é o regime tributário com mais empresas enquadradas no Brasil, perdendo somente para o Simples Nacional, pois ele acaba gerando menos impostos e obrigações acessórias que o Lucro Real.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-lg-12">
                                <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Defina o regime do seu empreendimento:
                                            </div>
                                            <div class="panel-body">
                                               <div class="panel-footer">
                                                
                                                    

                                                    <div class="form-group">
                                                        <label>Regime do seu empreendimento:</label>
                                                        <select class="form-control" name="regime">
                                                            <option value="Simples Nacional">Simples Nacional</option>
                                                            <option value="Lucro Real">Lucro Real</option>
                                                            <option value="Lucro Presumido">Lucro Presumido</option>
                                                        </select>
                                                     </div> 
                                                 </div>
                                             </div> 
                                            </div>
                                        </div>
                                </div>
                                    <button type="submit" class="btn btn-success">Salvar Projeção</button>



                                </div>
                            </div>
                        </form>





                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            
           
          
           
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

         <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a class="" href="dashboard.php" style="padding:3px 15px;">
                            <img src="noticias/images/logo-alt.png" alt="Logo" style="max-height:47px;"/>
                        </a>
                    </div>  
                    <div class="col-lg-6">
                        <p>COPYRIGHT © 2018. ALL RIGHTS RESERVED. DESIGNED BY COMO COMEÇAR</p>
                    </div>
                    <div class=col-lg-4>
                        <ul>
                            <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"> <i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

