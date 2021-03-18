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
    $emp_codigo = ($_GET['cod']);
?>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>imprimir</title>

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
         
        $consulta = mysql_query("SELECT * FROM empreendimento WHERE id = '$emp_codigo'  LIMIT 1");
        $dado = mysql_fetch_array($consulta);
        
        
        ?>
        
       
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Projeção do empreendimento
                            </div>
                            <div class="panel-body">
                                 <h1 class="page-header"><?php echo $dado["nome"]?></h1>
                                <div class="form-group">
                                    <h3>Nome:</h3>
                                    <h4><?php echo $dado["nome"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Ramo:</h3>
                                    <h4><?php echo $dado["ramo"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo de négocio:</h3>
                                    <h4><?php echo $dado["negocio"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo de proposta valor:</h3>
                                    <h4><?php echo $dado["valor"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo de interface com o consumidor:</h3>
                                    <h4><?php echo $dado["consumidor"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo de operação:</h3>
                                    <h4><?php echo $dado["operacao"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo estratégico:</h3>
                                    <h4><?php echo $dado["estrategico"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Modelo Econômico:</h3>
                                    <h4><?php echo $dado["economico"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Tipo do empreendimento:</h3>
                                    <h4><?php echo $dado["tipo"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Porte do empreendimento:</h3>
                                    <h4><?php echo $dado["porte"]?></h4>
                                 </div>
                                 <div class="form-group">
                                    <h3>Regime tributário:</h3>
                                    <h4><?php echo $dado["regime"]?></h4>
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
 <script language="JavaScript">
    window.print()
</script>