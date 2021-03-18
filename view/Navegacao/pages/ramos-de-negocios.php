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

    <title>Ramos de Negócios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="css/style-dashboard.css" rel="stylesheet" type="text/css"/>
    <link href="noticias/style-news.css" rel="stylesheet">

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
                    <img src="noticias/images/logo.png" alt="Logo" style="max-height:47px;"/>
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
					        <h1>Ramos de Negócios</h1>
				        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="box-ramos">
                
                
                <div class="row">
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Agronegócio</h2>
					        <a href="noticias/news.php">
					            <img src="../../inicial/img/agro-category.jpg" alt="agronegocio"/>
					        </a>
					   </div>
                    </div>
                    
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Automotivo</h2>
					        <a href="#">
					            <img src="../../inicial/img/auto-category.jpg" alt="agronegocio"/>
					        </a>
					   </div>
                    </div>
                    
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Econômico</h2>
					        <a href="#">
					            <img src="../../inicial/img/financy-category.png" alt="agronegocio"/>
					        </a>
					   </div>
                    </div>
                    
                </div>
                
                
                
                <div class="row">
                    
                    
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Industrial</h2>
					        <a href="#">
					            <img src="../../inicial/img/industry-category.jpg" alt="agronegocio"/>
					        </a>
					   </div>
                    </div>
                    
                     
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Cultural</h2>
					        <a href="#">
					            <img src="../../inicial/img/art-category.jpg" alt="agronegocio"/>
					        </a>
					   </div>
                    </div>
                    
                     
                    <div class="new col-lg-4 col-md-4 col-xs-12">
                        <div class="ramo">
                            <h2>Tecnologia</h2>
					        <a href="#">
					            <img src="../../inicial/img/tecno-category.jpg" alt="agronegocio"/>
					        </a>
					   </div>
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

