<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RCV System</title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\responsive.css">
	<link rel="stylesheet" href="fonts\flaticon.css">
	<!--favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="images\favicon\apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images\favicon\favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images\favicon\favicon-16x16.png" sizes="16x16">

</head>
<body>
	<!-- Master Page Header -->

<?
  include 'header.php';
?>

 <!-- Fin Master Page Header -->

    <!--Fin de menú navegación -->

		 <!--Start page-banner-->
        <section class="page-banner" style="background-image:url(images/resources/single-service.jpg);">
            <div class="container">
                <div class="content">
                    <h2>Solicita tu cotización</h2>
                    <p>¡El mejor servicio esta aquí!</p>
                </div>
            </div>
        </section>
        <!--End page-banner-->


<!--Formulario de contacto-->

		<section class="contact_us">
			<div class="container">   
                <div class="ContactTitle">
                    <h2>Contáctenos</h2>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="default-form" action="sendmail.php" method="post">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12">
												
								<div class="form-group style-two">
									<input type="text" name="Name" class="form-control" value="" placeholder="Nombre" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="email" name="Email" class="form-control required email" value="" placeholder="Email" required="">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="Phone" class="form-control" value="" placeholder="Teléfono">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<textarea name="Message" class="form-control textarea required" placeholder="Mensaje"></textarea>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Por favor espere...">Enviar Mensaje</button>
							</div>
						</div> 
					</form>
				</div>
			</div>
		</section>

<!--Fin formulario de contacto-->

<!--Iconos verdes de contacto-->        
        
         <section class="feature-style-three">
            <div class="container">         
                <div class="item-list">
                    <div class="row">

                        <!--Icono de Ubicación-->
                        <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-map-marker"></span></div>
                                        <h3>Ubicación</h3>
                                        <h3>
                                            <div class="text"><p>Calle 6 d # 80b - 89,<br><span>Bogotá, Colombia</span></p>
                                        <h3/><br>
                                </div>
                                    <div class="text"><p>2023 Floowood MS - 89,<br><span>Mississippi, USA</span></p></div>
                                </div>
                            </div>
                        </div>
                        <!--Fin Icono de Ubicación-->

                        <!--Teléfono-->
                        <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-mobile"></span></div>
                                    <h3>Teléfono</h3>
                                    <div class="text"><p>318 797 6101 <br>(+57) 642 10 33</p></div>
                                </div>
                            </div>
                        </div>
                        <!--End telefono-->

                        <!-- Inicio de Email -->
                        <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-envelope-o"></span></div>
                                    <h3>Email</h3>
                                    <div class="text"><p>ventas@rcvairsystem.com <br>soporte@rcvairsystem.com</p></div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de Email -->

                    </div>
                </div>
            </div>
        </section>
<!--FIN Iconos verdes de contacto-->  



		<!--Footer pie de página-->
<?
  include 'footer.php'; 
?>


<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader"></div>
	<!-- jQuery js -->
	<script src="js\jquery.js"></script>
	<!-- bootstrap js -->
	<script src="js\bootstrap.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js\jquery-ui.js"></script>
	<!-- owl carousel js -->
	<script src="js\owl.carousel.min.js"></script>
	<!-- jQuery validation -->
	<script src="js\jquery.validate.min.js"></script>
	<!-- google map -->
	<script src="js\gmap.js"></script>
	<!-- mixit up -->
	<script src="js\wow.js"></script>
	<script src="js\jquery.mixitup.min.js"></script>
	<script src="js\jquery.fitvids.js"></script>
    <script src="js\bootstrap-select.min.js"></script>


	<!-- revolution slider js -->
	<script src="assets\revolution\js\jquery.themepunch.tools.min.js"></script>
	<script src="assets\revolution\js\jquery.themepunch.revolution.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.actions.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.carousel.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.kenburn.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.layeranimation.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.migration.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.navigation.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.parallax.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.slideanims.min.js"></script>
	<script src="assets\revolution\js\extensions\revolution.extension.video.min.js"></script>

	<!-- fancy box -->
	<script src="js\jquery.fancybox.pack.js"></script>
	<script src="js\jquery.polyglot.language.switcher.js"></script>
	<script src="js\nouislider.js"></script>
	<script src="js\jquery.bootstrap-touchspin.js"></script>
    <script src="js\SmoothScroll.js"></script>
	<script src="js\validation.js"></script>
	<script src="js\jquery.appear.js"></script>
	<script src="js\jquery.countTo.js"></script>
	<script src="js\jquery.flexslider.js"></script>
	<script src="js\imagezoom.js"></script>	
	<script src="js\validation.js"></script>
	<script id="map-script" src="js\default-map.js"></script>
	<script src="js\custom.js"></script>
</div>	
</body>
</html>