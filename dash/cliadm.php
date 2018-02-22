<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Equipo Gráfico</title>
  <link rel="shortcut icon" type="image/x-icon" href="faviconlogo.ico"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="logocabeceramovil.jpg"></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><img src="logocabecera.jpg">&#160;&#160;<b>E</b>quipo<b>G</b>áfico</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/desconocido.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alberto Bernasconi</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/desconocido.jpg" class="img-circle" alt="User Image">

                <p>
                  Alberto Bernasconi
                  <small>Administrador</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Cerrar sesion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div> -->
    </nav>
  </header> 

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    </br> <?php  include('menu.php'); ?>
    <!-- sidebar: style can be found in sidebar.less -->
  
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Inicio</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>
</p>

        <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Alta de Cliente</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-3">
                                    <form action="cliadm.php" method="post" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label>Razon Social / Nombre</label>
                                            <input class="form-control" name="razon" type="text" id="razon" size="20" placeholder="Nombre o Razón Social" pattern="[A-Za-z\s]{1,15}" title="Ingresa un nombre o razón social"  required/>  
                                            <!--<p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input class="form-control" name="apellido" type="text" id="apellido" size="20" placeholder="Apellido" pattern="[A-Za-z]{1,15}" title="Ingresa tu Apellido" required/>
                                            <!--<p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                      
                                </div>
                                <div class="col-lg-4">
                                       
                                       
                                </div>

                                <div class="col-lg-4">
                                <form id="insertar" name="insertar" method="post" action="">



                                </div>
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-4">

                                </div>
                                         <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Direccion</label>
                                            <input class="form-control" name="cod" type="text" id="cod" size="20" pattern="{1,30}" title="Ingresa un codigo" required/>
                                        </div>
                                </div>
                                 <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Cod. Post.</label>
                                            <input class="form-control" name="stkmin" type="text" id="stkmin" size="20" pattern="[0-9]{1,3}" title="Ingresa un Stock mínimo" required/>
                                        </div>
                                    </div>
                            <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Provincia</label>
                                            <input class="form-control" name="stock" type="text" id="stock" size="20" pattern="[0-9]{0,3}" title="Ingresa el stock"/>
                                        </div>
                                </div>
                                 <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Localidad</label>
                                            <input class="form-control" name="precio" type="text" id="precio" size="20" pattern="[0-9]+[.][0-9]{1,6}" title="Ingresa un precio" required/>
                                        </div>
                                    </div>
                                               <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Contacto</label>
                                            <input class="form-control" name="cod" type="text" id="cod" size="20" pattern="{1,30}" title="Ingresa un codigo" required/>
                                        </div>
                                </div>
                                 <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input class="form-control" name="stkmin" type="text" id="stkmin" size="20" pattern="[0-9]{1,3}" title="Ingresa un Stock mínimo" required/>
                                        </div>
                                    </div>
                            <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input class="form-control" name="stock" type="text" id="stock" size="20" pattern="[0-9]{0,3}" title="Ingresa el stock"/>
                                        </div>
                                </div>
                                 <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>DNI / CUIT</label>
                                            <input class="form-control" name="precio" type="text" id="precio" size="20" pattern="[0-9]+[.][0-9]{1,6}" title="Ingresa un precio" required/>
                                        </div>
                                
                              </div>
 <div class="col-lg-2">
                              <div class="form-group">
                                      <div class="form-group">
                                            <button type="submit" name="Submit" class="btn btn-default">Guardar</button>
                                            <input type="hidden" name="action" value="add" />
                                        </div>
                                </div>
                              </div>
                                
                                    </div>



                                </div>

                                <div class="col-xs-13">






          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Clientes</h3>
            </div>
            <!-- /.box-header -->
<div class="records_content"></div>
                            </div>



            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>


</body>
</html>
