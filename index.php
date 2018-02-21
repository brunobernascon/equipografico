<?php
session_start();
$error="";
$errorempty="";
$usuario="";
$password="";
$perfil="";
$state = false;
$captcha="";
 

if(!empty($_POST)){
  $captcha=$_POST['g-recaptcha-response'];
  $secret='6LdsSEcUAAAAAH1LN8HoPBvL6_HpZ-WRHF8VOh6e'; // SECRET LOCALHOST
 // $secret='6Le9VDYUAAAAAARJZ0ZGxaW2qqlWp_8DVqwSzijf';
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];


  $_SESSION['password']= $password;


  if(!$captcha){ 
      $errorempty="verifica el captcha";
    }

        $response= file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
        $arr=json_decode($response,TRUE);

        if($arr['success']){
;
                            if($usuario == "" or $password==""){
                                $error="No has ingresado credenciales";
                                }
                            
                            else{
                                include('connection.php');
                                $password=mysqli_real_escape_string($conexion,$_POST['password']);
                                $comprobacion_del_nombre='select * from registros where nombre="'.trim($_POST['usuario']).'"';
                                 $comprobacion=$conexion->query($comprobacion_del_nombre);
                                // $dato=mysqli_fetch_assoc($comprobacion);
                                //var_dump($comprobacion);
			                    //	die;


            if($comprobacion->num_rows>0){
                 $recoger_dato=mysqli_fetch_assoc($comprobacion);
                 $comprobar_password=password_verify($password,$recoger_dato['passwor']);

                     if($comprobar_password)
                        {
                        $_SESSION['nombre']=$recoger_dato['nombre'];
                        $_SESSION['perfil']=$recoger_dato ['perfil'];
                        $_SESSION['cli']=$recoger_dato ['cli'];    
                        header ('location: dash/ini.php');
                        }
                     else{
                          $error="Las credenciales ingresadas son incorrectas";
                          $comprobacion_del_nombre='select * from registros where nombre="'.trim($_POST['usuario']).'"';
                          $comprobacion=$conexion->query($comprobacion_del_nombre);
                          

                          if($comprobacion->num_rows>0){
                            $FecHr = date('d/m/y H:i'); 
                            $descripcion = "Se ingreso contrana incorrecta";

                            $insertarhist=mysqli_query($conexion,'insert into hist(fecha,usuario,descripcion) values
                            ("'.$FecHr.'","'.$_POST['usuario'].'","'.$descripcion.'")') or die ('No se pudo resgistrar<br>'.mysqli_error($conexion));
                        }else{

                        }
                          }
            }


            }
        }else{
          $errorempty="verifica el captcha";
         }
        }
      

?>  





<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Equipo Grafico</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" /> 
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />


	<!-- Theme skin -->
	<link href="skins/default.css" rel="stylesheet" />

	<!-- =======================================================
    Themeame: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body background="fondoeg.jpg">


	<div id="wrapper">
		<!-- start header -->
		<header>

     


			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        
                    </button>
                    	</p><img src="logoequipo.png"></i>		
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Inicio</a></li>

							<li><a href="#ingreso">Ingreso</a></li>
							<li><a href="contact.html">Contactenos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		   <div class="container">

    </div>
		<!-- end header -->

		<section class="bg-primary" id="featured">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="flexslider">
							<ul class="slides">

								<li>
									<img src="img/slides/img1.png" alt="" />					
									<div class="flex-caption">
										<h3>Dise&#241;o A MEDIDA</h3>
										<p><br></p>
									</div>
								</li>
								<li>
									<img src="img/slides/img2.png" alt="" />
									<div class="flex-caption">
										<h3>SOLUCIONES DIGITALES</h3>
										<p><br></p>
									</div>
								</li>
								<li>
									<img src="img/slides/img3.png" alt="" />
									<div class="flex-caption">
										<h3>IMPRESION OFFSET</h3>
										<p><br></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</section>
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h1><span>Equipo Gr&#225;fico</span></h1><h3> Le acerca y facilita la solucion impresa que su negocio esta necesitando</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="content1">
			<div class="container" >
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">
										<h4>Dise&#241;o Gr&#225;fico</h4>
										<div class="icon">
											<i class="fa fa-pencil-square-o fa-3x"></i>
										</div>
										<p>
											Nuestra basta experiencia en el rubro al servicio del diseño gr&#225;fico a su servicio
										</p>

									</div>
									<div class="box-bottom">
										<a href="#"></a>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">
										<h4>Impresi&#243;n a medida</h4>
										<div class="icon">
											<i class="fa fa-print fa-3x"></i>
										</div>
										<p>
											Impresiones Offset o digitales, la soluci&#243;n que mejor se adapte a sus necesidades
										</p>

									</div>
									<div class="box-bottom">
										
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">
										<h4>Calidad garantizada</h4>
										<div class="icon">
											<i class="fa fa-certificate fa-3x"></i>
										</div>
										<p>
											Comprometidos con la calidad de nuestros impresos para garantizar una buena imagen de su negocio
										</p>
									</div>
									<div class="box-bottom">
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">
										<h4>Seguimiento On-line</h4>
										<div class="icon">
											<i class="fa fa-laptop fa-3x"></i>
										</div>
										<p>
											Desde la plataforma on-line usted puede gestionar y realizar de forma sencilla sus trabajos
										</p>
									</div>
																		<div class="box-bottom">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>			
		</section>

<section id="ingreso" class="callaction">
			<div class="container">
					
						
							<div class="cta-text">
								<h2> Si usted ya es cliente y tiene una cuenta de usuario</h2>
								<h4> puede acceder al sistema de autogesti&#243;n y realizar sus solicitudes y gestiones de trabajos</h4>
								<h2><span>En l&#237;nea</span></h2>
							</br>
							</br>
							</div>
						
					
				
			</div>
		</section>

		<section  class="bg-primary" id="featured1">

		<div class="flex-caption1">
										<h3>SI AUN NO ES CLIENTE NUESTRO PUEDE REALIZAR SU REGISTRO DE FORMA SENCILLA PARA PODER EMPEZAR SUS GESTIONES DE FORMA INMEDIATA</h3>
										</p><a href=contacto.html class="btn btn-theme">Registrarse</a>
									</div>
				<br><div class="container" >
            		<div  class="col-md-4 col-md-offset-8"style="filter:alpha(opacity=100); opacity:0.9;">
                		<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Ingreso al sistema</h2>
                    </div>
                    <div class="panel-body">
                        <p align="right" class="text-danger">
                          <?php if(!$captcha){
                              echo $errorempty;
                              } else{
                              echo $error;
                              } ?></p>
                       
                        <form action="index.php" method="post" enctype="application/-www-forum-urlencoder" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="usuario" id="usuario" type="texto" value="<?php echo $usuario;?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" id="password" type="password" value="<?php echo $password;?>">
                                <br>
                              <!--  <div class="g-recaptcha" data-sitekey="6Le9VDYUAAAAAOwIUxllV-KjP8NrvKh_bn3-PAwl"></div>-->
                                <div class="g-recaptcha" data-sitekey="6LdsSEcUAAAAAAqaI6THSJN5QEIaE-9NAgvc9I0Z"></div>
                                <br>
                                    <label>
                                        <a href="recuperarcontra.php">Olvide mi contrase&#241;a</strong></a><br>
                                    </label>

                                    
                                    <!--<p><fb:login-button perms="email,user_birthday"></fb:login-button>-->
  
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="registrarse"type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar sesion">
                            </fieldset>
                        </form>


                    </div>
               			</div>
            		</div>
        		</div>
		</section>	
		<footer>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
						
									
					<strong>Equipo Gr&#225;fico</strong><br>
					 <h7>Ancaste 3724 C.A.B.A.<br>
					 Bs As Argentina </address>
							<p>
								<i class="icon-phone"></i> (011) 4911-5255 -<br>
								<i class="icon-envelope-alt"></i> info@equipografico.com.ar
							</p></h7>
						</div>

									
				
		</footer>

	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>

</body>


<script>
$(function() {
  $.ajax({
    url: '//connect.facebook.net/es_ES/all.js',
    dataType: 'script',
    cache: true,
    success: function() {
      FB.init({
        appId: '149716422432229',
        xfbml: true
      });
      FB.Event.subscribe('auth.authResponseChange', function(response) {
        if (response && response.status == 'connected') {
          FB.api('/me', function(response) {
            alert('Nombre: ' + data.name);
          });
        }
      });
    }
  });
});
</script>
<script>
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
</script>
<script>
FB.ui(
 {
  method: 'share',
  href: 'https://developers.facebook.com/docs/'
}, function(response){});
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '163071037619003',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIlB2fBBLSk7GkjGxwiBRyn6_Squl6j7A&callback=initMap">
    </script>
 <script>
function scaleCaptcha(elementWidth) {
  // Width of the reCAPTCHA element, in pixels
  var reCaptchaWidth = 304;
  // Get the containing element's width
	var containerWidth = $('.container').width();
  
  // Only scale the reCAPTCHA if it won't fit
  // inside the container
  if(reCaptchaWidth > containerWidth) {
    // Calculate the scale
    var captchaScale = containerWidth / reCaptchaWidth;
    // Apply the transformation
    $('.g-recaptcha').css({
      'transform':'scale('+captchaScale+')'
    });
  }
}

$(function() { 
 
  // Initialize scaling
  scaleCaptcha();
  
  // Update scaling on window resize
  // Uses jQuery throttle plugin to limit strain on the browser
  $(window).resize( $.throttle( 100, scaleCaptcha ) );
  
});
 </script>

</html>
