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
	<link rel="stylesheet" href="ism/css/my-slider.css"/>
</head>

<body>

<!-- Master Page Header -->

<?
  include 'header.php';
?>

<body>
	

		 <!--Start page-banner-->
        <section class="page-banner" style="background-image:url(images/resources/aboutUs.jpg);">
            <div class="container">
                <div class="content">
                    <h2>Acerca de nosotros</h2><br>
                    <p>Conoce acerca de nosotros</p>
                </div>
                <ul class="breadcumb">
                    <li><a href="index-1.htm">Home</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a class="active" href="contact.php">Acerca de nosotros</a></li>
                </ul>
            </div>
        </section>
        <!--End page-banner-->
		
		 <!--Sidebar Page-->
		<div class="sidebar-page style-2">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="col-md-8 col-sm-12 col-xs-12">


						<h2>Acerca de nosotros</h2><br>
						                                             
							<!--Blog Post-->
							<article class="single-blog-post style-two">
								<div class="post-inner">
									<div class="image-box">
										<figure><a href="#"><img src="images\resources\aboutUs2.jpg" alt=""></a></figure>
									</div>
									<div class="post-header">
										<h2><a href="blog-details.htm">Nuestra Historia</a></h2>
										<ul class="post-info">
											<li><span class="flaticon-black"></span>&ensp; by Admin</li>
											<li><span class="fa fa-clock-o"></span>&ensp; Lun, Dic 18  </li>
										
										</ul>
									</div>
									<div class="post-desc">
										<div class="text"><p>Somos una empresa dedicada a la prestación de servicios de mantenimiento y venta de equipos industriales de aire acondicionado, calefacción, refrigeración, cuartos frios y cavas. En nuestra compañía contamos con amplia experiencia en el diagnóstico, mantenimiento, reparación de equipos industriales, comerciales y domésticos caracterizándonos por la intervención oportuna y un excelente servicio al cliente. </p></div>
										
										<div class="text style-two"><p>En la actualidad, somos líderes en el mercado y nuestro principal objetivo es brindar a nuestros clientes una solución acorde a sus necesidades. Por ello nuestros clientes nos recomiendan ya que brindamos un servicio profesional de calidad.</p></div>
										<div class="text"><p>Si desea contactarnos por favor no dude en hacerlo a través de nuestros canales de atención al cliente.</p></div>
										
									 
									</div>
									<blockquote>Nuestros clientes nos recomiendan, nuestra calidad del servicio es primordial para satisfacer las necesidades comerciales del cliente.
										<div class="quate"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
									</blockquote>									
										
									
									<div class="text"><p>Prestamos el mejor servicio de mantenimiento y reparción de equipos industriales y doméstico.</div>
								</div>
							</article>
							
					<!--Comments Area-->
						
														
							<div class="leave-comment">
								<div class="group-title">
									<h3>Dejar un comentario</h3>
								</div>
								<div class="default-form-area">
									<form id="contact-form" name="contact_form" class="default-form" action="sendmail.php" method="post">
										<div class="row clearfix">
											
											<div class="col-md-6 col-sm-6 col-xs-12">
												
												<div class="form-group style-two">
													<input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group style-two">
													<input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
												</div>
											</div>	

											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="form-group style-two">
													<textarea name="form_message" class="form-control textarea required" placeholder="Comment"></textarea>
												</div>
											</div> 

											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="form-group style-two">
													<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
													<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Enviar mensaje</button>
												</div>
											</div>   

										</div>
									</form>
								</div>
							</div>                                                          
						
					</div>
					<!--Content Side-->
					
					<!--Sidebar-->	
					<div class="col-md-4 col-sm-6 col-xs-12">
						<aside class="sidebar"> 
							
						
						
							<!-- Popular Categories -->
						

							<div class="recent-news wow fadeInUp" data-wow-duration="1200ms" style="visibility: visible; animation-name: fadeInUp;">
								<div class="sidebar-title">
									<h3>Medios de contacto</h3>
								</div>	
                                        
                                <div class="single-news">
                                    <figure class="image-holder">
                                        <a href="#"><img src="images\resources\footer-rp1.jpg" alt="Images"></a>
                                    </figure>

                                    <div class="text">
                                        <h4><a href="#">318 797 6101</a>
                                        </h4>
                                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i>¡Contactanos!</p>
                                    </div>
                                </div>

                                <div class="single-news">
                                    <figure class="image-holder">
                                        <a href="#"><img src="images\resources\footer-rp2.jpg" alt="Images"></a>
                                    </figure>

                                    <div class="text">
                                        <h4><a href="contact.php">ventas@rcvairsystem.com</a>
                                        </h4>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>¡Envianos un Mensaje!</p>
                                    </div>
                                </div>

								<div class="single-news">
                                    <figure class="image-holder">
                                        <a href="#"><img src="images\resources\footer-rp2.jpg" alt="Images"></a>
                                    </figure>

                                    <div class="text">
                                        <h4><a href="contact.php">soporte@rcvairsystem.com</a>
                                        </h4>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>¡Envianos un Mensaje!</p>
                                    </div>
                                </div>

                            </div>
							
							<!--.sidebar_tags -->
							
						</aside>                                  
					</div>
					<!--Sidebar-->                               
				</div>
			</div>
		</div>
    		
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



