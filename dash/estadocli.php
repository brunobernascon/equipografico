<!DOCTYPE html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taller Rossello</title>
    <link rel="shortcut icon" type="image/x-icon" href="tr.ico"/>

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
    <link rel="StyleSheet" href="estilo.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body background="ROSSELLOFONDO1.jpg"> <!-- fondo de menu izquierdo-->
    
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
                 <a href="ini.php"><img src="rossellonuevo1.jpg"></a>
                 <font color='#636363' 'font size=6' ><b><?php echo $cabecera?>
                
            </div>  
        
            <!-- /.navbar-header -->
            

                


            <ul class="nav navbar-top-links navbar-right">
             <b><a class="navbar-brand" style="position: relative; top: 10px;"><b><?php echo "<font color='black' 'font size=3 '>Bienvenido  [".$_SESSION['nombre'].']</>'; ?></>
              
            <!--   <h5 class="text-primary">Bienvenido</h5>  -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">

                    </ul>

                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       </br><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down">
                        </i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                        </li>
                    </ul>
              
            </ul>
 <!-- /.navbar-top-links -->




                <div class="sidebar-nav navbar-collapse">
                   </br> <?php  include('menu.php'); ?> 
   
      


        <div id="page-wrapper" style="filter:alpha(opacity=100); opacity:0.9;">
 <div class="row">

                    <div class="col-lg-12">
                    <h1 class="page-header">Proceso de mi atención&#160&#160<a i class="fa fa-question-circle fa-fw" title="Ver video" href="javascript:void(0);" onclick="window.open('ayuda/cliadm.mp4',  'popup', 'top=100, left=280, width=900 height=500, toolbar=NO, resizable=NO, Location=NO, Menubar=NO,  Titlebar=No, Status=NO')"></a></h1>

                </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <i></i> Progreso del Servicio del Cliente N° <?php echo $_SESSION['cli']; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                

                                   
                                    <?php if($progreso=="ingreso"): ?>
                                    <li><div class="timeline-badge success"><i class="fa fa-sign-in"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <div class="timeline-body">
                                                <p>Ingreso de la Unidad</p>
                                            </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">Su vehículo ya esta ingresado a nuestro taller a la espera de la evalucion de nuestro equipo</h4>
                                        </div>
                                    </div>
                                    </div>
                                
                                
                                   <?php else: ?>

                                        <li><div class="timeline-badge"><i class="fa fa-sign-in"></i>
                                    </div>
                                   <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                            <div class="timeline-body">
                                                <p></p>
                                            </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title"></h4>
                                        </div>
                                    </div>
                                    </div>                                 
                                </li>

                               <?php endif ?>                                   
                                


<?php if($progreso=="confpre"): ?>
                               
                                    <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-list-alt"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        <div class="timeline-body">
                                            <p>Confeccionando Presupuesto...</p>
                                        </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">Nuestros especialistas estan evaluado la unidad para confeccionar el correspondiente Presupuesto...</h4>
                                        </div>
                                    </div>
                                </li>
                                   
 <?php else: ?>

                                    <li class="timeline-inverted">
                                <li><div class="timeline-badge"><i class="fa fa-list-alt"></i>
                                    </div>
                                   <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                            <div class="timeline-body">
                                                <p></p>
                                            </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title"></h4>
                                        </div>
                                    </div>
                                    </div>                                 
                                </li>


    <?php endif ?>   

    <?php if($progreso=="prefin"): ?>

                     
                                 <li>
                                    <div class="timeline-badge info"><i class="fa fa-reorder"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        <div class="timeline-body">
                                            <p>Presupuesto OK !!!</p>
                                        </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">La confeccion del presupuesto para la atencion de su unidad se completo...</h4>
                                        </div>
                                    </div>
                                </li>
 <?php else: ?>




                                <li><div class="timeline-badge"><i class="fa fa-reorder"></i>
                                    </div>
                                   <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                            <div class="timeline-body">
                                                <p></p>
                                            </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title"></h4>
                                        </div>
                                    </div>
                                    </div>                                 
                                </li>

<?php endif ?>   

  <?php if($progreso=="esprep"): ?>
                   
                                 <li class="timeline-inverted">
                                    <div class="timeline-badge danger"><i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        <div class="timeline-body">
                                            <p>Esperando Repuestos / partes</p>
                                        </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">Estamos a la espera de recibir los repuestos necesarios para llevar a cabo el servicio para su unidad</h4>
                                        </div>
                                    </div>
                                </li>
 <?php else: ?>
                    

                        
                                <li class="timeline-inverted">
                                    <div class="timeline-badge"><i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                           <p></p>
                                            </div>
                                                <div class="timeline-heading">
                                                    <br><h4 class="timeline-title"></h4>
                                            </div>
                                    </div>
                                </li>

                                <?php endif ?>   


<?php if($progreso=="repcurso"): ?>
                   
                                 <li>
                                    <div class="timeline-badge warning"><i class="fa fa-wrench"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        <div class="timeline-body">
                                            <p>Estamos trabajando en su vehículo</p>
                                        </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">Nuestros especialistas ya estan atendiendo a su unidad...</h4>
                                        </div>
                                    </div>
                                </li>
 <?php else: ?>
                    

                        
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-wrench"></i>
                                    </div>
                                    <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                           <p></p>
                                            </div>
                                                <div class="timeline-heading">
                                                    <br><h4 class="timeline-title"></h4>
                                            </div>
                                    </div>
                                </li>

                                <?php endif ?>   



<?php if($progreso=="repfin"): ?>
                   
                                 <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                        <div class="timeline-body">
                                            <p>Servicio completado OK  !!!!</p>
                                        </div>
                                        <div class="timeline-heading">
                                            <br><h4 class="timeline-title">Su vehículo completo la atencion en nuestros taller... felicitaciones !!!</h4>
                                        </div>
                                    </div>
                                </li>
 <?php else: ?>
                    

                        
                                <li class="timeline-inverted">
                                    <div class="timeline-badge"><i class="fa fa-thumbs-up "></i>
                                    </div>
                                    <div class="timeline-panel" style="visibility: hidden">
                                        <div class="timeline-heading">
                                           <p></p>
                                            </div>
                                                <div class="timeline-heading">
                                                    <br><h4 class="timeline-title"></h4>
                                            </div>
                                    </div>
                                </li>

                                <?php endif ?>   







                       </div> <!-- /.panel-body -->
</div>
    </div>
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









