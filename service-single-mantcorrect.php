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

		<!--Start page-banner-->
        <section class="page-banner" style="background-image:url(images/resources/single-service.jpg);">
            <div class="container">
                <div class="content">
                    <h2>Mantenimientos</h2>
                    <p>Realizamos 2 tipos de mantenimientos!</p>
                </div>
                <ul class="breadcumb">
                    
					<li><a class="active" href="service-single-mantcorrect.php">Mantenimiento Correctivo</a></li>

                </ul>
            </div>
        </section>
        <!--End page-banner-->

		<!--single-service-->
        <section class="single-service">
            <div class="container">
                <div class="img-holder">
                   <figure><img src="images\gallery\20.jpg" alt="Images"></figure>  
                </div>


                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="single-item">
                        	<div class="sec-title">
                        		<h2>Mantenimiento Preventivo</h2>
                        	</div>
                            
							<li>- Limpieza y desinfección del intercambiador interno (evaporador).</li>
											<li>- Limpieza y desinfección del intercambiador externo (condensador). </li>
											<li>- Limpieza, drenaje, y desinfección del circuito de evacuación de condensados, y desagüe.</li>
											<li>- Comprobación de estanquidad de refrigerante en tuberías.</li>
											<li>- Comprobación de estanquidad de aceites de compresores y motores.</li>
											<li>- Revisión y limpieza de filtros de aire.</li>
											<li>- Revisión y limpieza de filtros de agua.</li>
											<li>- Revisión y tarado de elementos de seguridad,</li>
											<li>- Ajuste de contactos eléctricos de fuerza y control. </li>
											<li>- Limpieza y ajuste de placa electrónica.</li>
										</ul>
							

                        </div>
                    </div>   
           
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="single-item">
                        	<div class="sec-title">
                        		<h2>Mantenimiento Correctivo</h2>
                        	</div>
                            
                            <p>Para evitar el deterioro de los equipos, es aconsejable realizar mantenimiento trimestralmente <br>Nosotros somos lideres y conocemos a fondo la mayor parte de dispositivos de aire acondicionado dando al cliente mayor confiabilidad a la hora de realizar manetenimientos.</p>
                            <p>Tenemos alternativas y grandes descuentos si persiste el servicio de mantenimiento preventivo. Contactanos para mayor información a nuestras líneas de atención</p>
                        </div>
                    </div>

					    


                   <!-- <div class="col-md-6 col-sm-12">
                        <div class="row">
                        	<div class="related-service">
                        		<div class="sec-title">
                        			<h2>Servicios relacionados</h2>
                        		</div>
                        		<div class="col-md-6 col-sm-6">
                        			<div class="item">
										<div class="img_holder">							
											<img src="images\service\2.jpg" alt="Awesome Image">
											<div class="overlay">
												<div class="inner">
													<div class="social">
														<a href="service-single-mantcorrect.php"><i class="flaticon-nature-6"></i></a>	
														
													</div>
													
												</div>
											</div>
										</div>

										
										<div class="text">
		                                    <h4><a href="service-single-mantcorrect.php">Mantenimiento correctivo</a></h4>
		                                    <p>Este tipo de mantenimiento permite corregir mal funcionamiento</p>
		                                    <div class="link-btn">
		                                        <a href="service-single-mantcorrect.php">Ver servicio<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		                                    </div>
		                                </div>
									
									</div>
	                        	</div>	
	                        	<div class="col-md-6 col-sm-6">
	                        		<div class="item">
										<div class="img_holder">							
											<img src="images\service\3.jpg" alt="Awesome Image">
											<div class="overlay">
												<div class="inner">
													<div class="social">
														<a href="#"><i class="flaticon-nature-6"></i></a>	
														
													</div>
													
												</div>
											</div>
										</div>
										<div class="text">
		                                    <h4><a href="service-single.php">Instalación equipos</a></h4>
		                                    <p>Diseño y planeación para su edificio</p>
		                                    <div class="link-btn">
		                                        <a href="service-single-install.php">Ver servicio<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		                                    </div>
		                                </div> -->
									
									</div>
	                        	</div>
	                        </div>
                        		
                        </div>
                    </div>       
                </div>
            </div>
        </section>
        <!--/single-project-->
		
		<!--subscribe-us section-->
        <section class="subscribe-us">
            <div class="container">
                <div class="row">   
                    <div class="col-md-9">
                        <h3>Haz de tu hogar o empresa un lugar confortable!</h3>
                        <p>Nuestro equipo de trabajo está altamente capacitado para realizar los trabajos relacionados.
                    </div>
                    <div class="col-md-3">

                        <a href="contact.php" class="thm-btn inverse pull-right">Contactanos</a>
                    </div>
                </div>
            </div>
        </section>

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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 
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



