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

    <title>Relatório</title>

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
                            Editar empreendimento
                            </div>
                            <form role="form" method="POST" action="../../../model/editandoemp.php?cod=<?php echo ($dado["id"]);?>">
                            <div class="panel-body">
                                 <h1 class="page-header"><?php echo $dado["nome"]?></h1>
                                 <p>Altere e clique em salvar para editar seus dados</p>

                                <div class="form-group">
                                      <label>Nome:</label>
                                     <textarea class="form-control" rows="2" name="nome"><?php echo $dado["nome"]?></textarea>
                                </div>
                                 <div class="form-group">
                                            <label>Ramo</label>
                                            <select class="form-control" name="ramo">
                                                <option><?php echo ($dado['ramo']);?></option>
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
                                 <div class="form-group">
                                      <label>Modelo de négocio:</label>
                                     <textarea class="form-control" rows="2" name="negocio"><?php echo $dado["negocio"]?></textarea>
                                </div>
                                <div class="form-group">
                                      <label>Modelo de proposta valor:</label>
                                     <textarea class="form-control" rows="2" name="valor"><?php echo $dado["valor"]?></textarea>
                                </div>
                                 <div class="form-group">
                                      <label>Modelo de interface com o consumidor:</label>
                                     <textarea class="form-control" rows="2" name="consumidor"><?php echo $dado["consumidor"]?></textarea>
                                </div>
                                <div class="form-group">
                                      <label>Modelo de operação:</label>
                                     <textarea class="form-control" rows="2" name="operacao"><?php echo $dado["operacao"]?></textarea>
                                </div>
                                 <div class="form-group">
                                      <label>Modelo estratégico:</label>
                                     <textarea class="form-control" rows="2" name="estrategico"><?php echo $dado["estrategico"]?></textarea>
                                </div>
                                 <div class="form-group">
                                      <label>Modelo Econômico:</label>
                                     <textarea class="form-control" rows="2" name="economico"><?php echo $dado["economico"]?></textarea>
                                </div>
                                 <div class="form-group">
                                                        <label>Tipo do seu empreendimento:</label>
                                                        <select class="form-control" name="tipo">
                                                            <option><?php echo ($dado['tipo']);?></option>
                                                            <option value="Sociedade Empresária Limitada (Ltda.)">Sociedade Empresária Limitada (Ltda.)</option>
                                                            <option value="Empresa Individual de Responsabilidade Limitada (Eireli)">Empresa Individual de Responsabilidade Limitada (Eireli)</option>
                                                            <option value="Empresa individual">Empresa individual</option>
                                                            <option value="Microempreendedor individual(MEI)">Microempreendedor individual(MEI)</option>
                                                            <option value="Sociedade Simples(SS)">Sociedade Simples(SS)</option>
                                                            <option value="Sociedade Anônima(SA)">Sociedade Anônima(SA)</option>
                                                            
                                                        </select>
                                                     </div>
                                                        <div class="form-group">
                                                        <label>Porte do seu empreendimento:</label>
                                                        <select class="form-control" name="porte">
                                                            <option><?php echo ($dado['porte']);?></option>
                                                            <option value="Microempresa (ME)">Microempresa (ME)</option>
                                                            <option value="Empresa de Pequeno Porte (EPP)">Empresa de Pequeno Porte (EPP)</option>
                                                            <option value="Empresas de médio e grande porte">Empresas de médio e grande porte</option>
                                                            
                                                            
                                                        </select>
                                                     </div>
                                                        <div class="form-group">
                                                        <label>Regime do seu empreendimento:</label>
                                                        <select class="form-control" name="regime">
                                                            <option><?php echo ($dado['regime']);?></option>
                                                            <option value="Simples Nacional">Simples Nacional</option>
                                                            <option value="Lucro Real">Lucro Real</option>
                                                            <option value="Lucro Presumido">Lucro Presumido</option>
                                                        </select>
                                                     </div>
                                 
                                 
                                  <button type="submit" class="btn btn-success">Salvar</button>
                                 
                            </div>
                           </form> 
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
