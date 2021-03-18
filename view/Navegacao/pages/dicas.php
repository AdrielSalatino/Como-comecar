<!DOCTYPE html>
<html lang="en">

<head>

    <!-- <?php
     header('Content-Type: text/html; charset=utf-8');
    session_start();
    require_once '../../../model/conexao.php';
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     
     echo("<script>window.location= 'login_pasta/login.html';</script>");
     }
 
    $nome = $_SESSION['nome']; 
    $id = $_SESSION['id'];
?>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dicas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/style-dashboard.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="bg-img" style="background-image: url('../../inicial/img/fundo.jpg');">
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
               
               <li> <?php echo "Bem vindo, ".$nome; ?></li>
                
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

        <!-- Page Content -->
        <?php
         
        $consulta = mysql_query("SELECT * FROM usuario WHERE id = '$id'  LIMIT 1");
        $dado = mysql_fetch_array($consulta);
        
        
        ?>
        
       
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dicas de como abrir sua empresa</h1>
                                <div class="col-lg-12">
                                   <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Como abrir uma empresa: Passo a passo para tirar as ideias do papel
                                        </div>
                                        <div class="panel-body">
                                            <p>Ter o próprio negócio é um sonho, mas só em pensar nas etapas para abrir uma empresa, alguns já começam a ter pesadelos. Com o objetivo de ajudar futuros empreendedores que ainda não sabem por onde começar e incentivar aqueles que estão com receio, o portal Como começar criou o guia “Como abrir uma empresa? Passo a passo para tirar as ideias do papel”.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                   <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Quanto custa abrir uma empresa?
                                        </div>
                                        <div class="panel-body">
                                            <p>Segundo uma pesquisa realizada pela Firjan, o custo médio de abertura de uma empresa é de R$ 2.038, podendo variar em até 274% entre os diferentes municípios do país.<br><br>

                                            Todavia, há despesas indiretas que pesam no bolso do empresário. São despesas, como aluguel, reforma do ponto comercial e honorários do contador, que são suportados pelo empresário antes mesmo de iniciar suas atividades. Importante lembrar que o ponto empresarial já deve estar montado desde o início do processo de registro. Isso é necessário porque o zoneamento da cidade pode impedir o exercício de determinadas atividades em certos locais e a fiscalização dos órgãos de regulação, como bombeiros e vigilância sanitária, é feito durante o processo de registro, para finalmente ter um alvará de funcionamento.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            Registrar Empresa: Documentos Necessários
                                        </div>
                                        <div class="panel-body">
                                            <p>
                                                A formalização do seu negócio é o primeiro passo para o início das suas atividades empresariais, mas você precisa ficar atento para realizar corretamente todas as inscrições, licenças e alvarás necessários. Mesmo após ter em mãos o CNPJ, o Cadastro Nacional de Pessoas Jurídicas, e estar inscrito na Previdência Social, há uma série de licenças, registros e alvarás municipais e estaduais que você irá precisar para funcionar legalmente.<br><br>

                                                A falta de algum desses documentos poderá atrasar ou até inviabilizar a abertura do seu empreendimento. Lembre-se que para cada ramo de atividade e/ou forma de constituição escolhida para abrir sua empresa, você precisará de autorizações distintas. A legislação do município e do estado onde sua empresa será instalada também pode exigir inscrições específicas. Por isso, é importante consultar um contador que conheça a legislação local.<br><br>

                                                Para te ajudar nesse importante passo empresarial, reunimos neste guia os principais documentos necessários para abrir uma empresa.<br><br>

                                                <b>1 - Encontre um contador</b><br>
                                            Você precisa de um contador para abrir e manter sua empresa. O contador será seu maior aliado para organizar seus negócios e manter tudo em dia, dentro da  lei, além de aprender mais sobre gestão e controle das finanças.<br>


                                            Uma empresa contábil pode auxiliar você nos passos seguintes.<br><br> 

                                            <b>2 - Contrato social</b><br>
                                            Basicamente, a elaboração do contrato social irá definir as participações de capital de cada um dos sócios do empreendimento, bem como definir quais serão as atividades da empresa e seu funcionamento (modelo tributário, participação dos sócios, etc). O passo seguinte é verificar se o nome e o objeto social da empresa encontram-se disponíveis para que o documento seja elaborado, que, por sua vez, deverá ser reconhecido em cartório e assinado por um advogado.<br><br>

                                            Uma dica é avaliar, já nesse momento, se sua empresa pode enquadrar-se no Simples Nacional, que é uma excelente forma de reduzir alíquotas de tributos e simplificar sua forma de pagamento junto aos órgãos do Fisco.<br><br>

                                            <b>3 - Registro na junta comercial</b><br>
                                            O primeiro deles é o registro na Junta Comercial ou no Cartório de Pessoas Jurídicas de seu estado. É a partir desse registro que sua empresa passará a existir oficialmente. Ele deve ser feito antes da obtenção do CNPJ e, apesar de não oferecer autorização para sua empresa começar a funcionar, é requisito essencial para prosseguir no processo de legalização dela. Lembre-se que você precisará realizar previamente uma consulta do nome empresarial escolhido, para verificar se já não existe outra empresa registrada com ele.<br><br>

                                            <b>3 – Alvará de localização e funcionamento</b><br>
                                            O principal documento obtido no município é o alvará de funcionamento, ele é a autorização final que lhe permite abrir as portas do seu negócio. Para o obter, você precisa comprovar na prefeitura da sua cidade que reúne todas as condições exigidas por lei para exercer a atividade de sua empresa. Essas condições podem variar de acordo com o município, estado e ramo de atividade.<br><br>

                                            Antes de o requerer e até mesmo de realizar a inscrição na junta comercial, você deverá fazer uma consulta prévia na prefeitura de sua cidade, para verificar se a atividade empresarial escolhida por você pode ser exercida no local onde pretende abrir a sua empresa.<br><br>

                                            <b>4 – Inscrição estadual</b><br>
                                            A maioria dos estados possui um convênio com a Receita Federal que lhe possibilita obter a inscrição estadual pela internet junto com o seu CNPJ, por meio de um cadastro único. Em alguns casos, a inscrição estadual deve ser obtida antes do alvará de funcionamento. Essa inscrição é obrigatória para empresas que prestam serviços de comunicação e energia, além das empresas dos setores do comércio, indústria e serviços de transporte intermunicipal e interestadual. É a partir dela que você recebe a sua inscrição no ICMS (Imposto sobre Circulação de Mercadorias e Serviços).<br><br>

                                            <b>5 – Licenças e inscrições nos órgãos de regulação estaduais e municipais</b><br>
                                            As autorizações dos órgãos de vistoria são requisitos essenciais para conseguir o seu alvará de funcionamento. São bastante variáveis e dependem do ramo de atividade, local de instalação e até mesmo do porte de sua empresa. Algumas atividades empresariais precisam de autorização até das Forças Armadas – como é o caso das empresas que trabalham com artefatos explosivos, bélicos e produtos químicos controlados. Entre as inscrições e licenças mais comumente exigidas, estão as seguintes:<br><br>

                                            * Licença ambiental: Obtida em órgãos Municipais e Estaduais de meio ambiente e no IBAMA. Geralmente é exigida de empresas que exercem atividade industrial, metalúrgica, mecânica, têxtil, química, de calçados, atividade agropecuárias.<br><br>
                                            * Licença sanitária: Obtida em órgãos Municipais, Estaduais e Federais de vigilância sanitária. É exigida principalmente de empresas que atuam no setor de alimentação, medicamentos e cosméticos.<br><br>
                                            * Vistoria de cumprimento das normas de segurança: É realizada pelo Corpo de Bombeiros e praticamente todas as empresas estão sujeitas.<br><br>

                                            Além das inscrições e licenças municipais e estaduais, algumas atividades exigem a inscrição em órgãos federais, como o ministério do turismo, ministério da agricultura, pecuária e abastecimento, polícia federal, entre outros.<br><br>

                                            É essencial que você consulte um contador, que é a pessoa mais indicada para te orientar em todas as licenças e inscrições que sua empresa irá precisar de acordo com seu ramo de atividade e demais características.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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
