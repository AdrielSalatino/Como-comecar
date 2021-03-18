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

    <title>News</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="../css/style-dashboard.css" rel="stylesheet" type="text/css"/>
    <link href="style-news.css" rel="stylesheet">

</head>

<body>
    <div class="bg-img" style="background-image: url('../../../inicial/img/fundo.jpg');">
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
                <a class="navbar-brand" href="../dashboard.php" style="padding:3px 15px;">
                    <img src="../noticias/images/logo.png" alt="Logo" style="max-height:47px;"/>
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
                        <li><a href="editadados.php"><i class="fas fa-cog"></i> Editar seu perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../../controller/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                       <div class="title">
					        <h1>Noticías</h1>
				        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="box-news">
                
                
                <div class="row">
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/canario.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>Cenários Ibá: exportações do setor atingem US$8,8 bilhões e tem alta de 26,0% de janeiro a outubro</h2>
        						
        						<p>O Boletim Cenários Ibá, produzido pela Indústria Brasileira de Árvores (Ibá), indicou alta nas exportações de celulose (+33,7%), painel de madeira (+5,0%) e papel (+4,2%) na comparação anual.
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/mato-groso.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>Custo para produzir soja em Mato Groso deve ficar mais caro, estima Imea</h2>
        						Produzir soja em Mato Grosso pode ficar mais caro na próxima safra. Em sua primeira estimativa de custo de produção da safra 2019/2020, o Instituto Mato-grossense de Economia Agropecuária (Imea) apontou que o custo operacional deverá subir 10,19%,
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/trator.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>Sem remanejamento, recursos do Moderfrota acabam em março de 2019</h2>
        						
        						<p>O presidente da Associação Brasileira da Indústria de Máquinas e Equipamentos (Abimaq), João Marchesan, pediu à equipe do governo do presidente eleito Jair Bolsonaro o remanejamento de recursos financeiros para a suplementação do programa Moderfrota de financiamento de máquinas agrícolas.
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
                </div>
                
                
                
                <div class="row">
                    
                    <div class=" new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/1.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>Morte de abelhas causa prejuízo a produtores de mel da Região Central do RS</h2>
        						
        						<p>Produtores de mel da cidade de Mata, na Região Central do Rio Grande do Sul, estão tendo prejuízo por causa da morte de milhares de abelhas. A principal suspeita da polícia é que elas tenham sido contaminadas por agrotóxicos de lavouras. Pelo menos 300 caixas foram afetadas, e o valor perdido pode passar de R$ 60 mil.
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
                     
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/china.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>China se torna o maior mercado para carne suína catarinense</h2>
        						
        						<p>A China se tornou o maior mercado para carne suína produzida em Santa Catarina. O gigante asiático vem ampliando suas compras e já responde por mais de um terço de toda carne suína exportada pelo estado.
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
                     
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <article id="featured">
					        <a href="#"><img src="images/agronegocio.jpg" alt=""></a>
        					<div class="box-new">
        						<h2>Agronegócio ganha força no governo Bolsonaro</h2>
        						
        						<p>A líder da bancada do agronegócio na Câmara dos Deputados, Tereza Cristina da Costa (DEM), será ministra da Agricultura de Jair Bolsonaro, defendendo as causas desse setor, motor da economia brasileira, diante de seus tradicionais "inimigos": os ambientalistas "radicais" e as invasões dos sem-terra.
        						</p>
        						
        						<div class="tags">
        							<a href="#" class="category">Agronegócio</a>
        						</div>
        					</div>
        					<a href="#" class="readmore btn btn-info btn-lg active">Saiba mais</a>
            			</article>
                    </div>
                    
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
                            <img src="images/logo-alt.png" alt="Logo" style="max-height:47px;"/>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>

