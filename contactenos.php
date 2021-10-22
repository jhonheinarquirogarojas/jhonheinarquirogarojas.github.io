<!DOCTYPE html>
<html lang="es">
<head>
<title>Contactenos | I.T.P.I.A.I - Instituto Tecnológico Andrés Ibáñez</title>
<link rel="stylesheet" type="text/css" href="styles/iconoestilo.css">
<link rel="icon" type="image/png" href="images/logotecno.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="tecnologicoandresibanez.edu.bo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>



<script type="text/javascript">
		function validar(){
			var copia = document.getElementById("txtcopia").value;
			var captcha = document.getElementById("captcha").value;

			if(copia == captcha){
				/*window.open("");*/
			}else{
				alert("El código Ingresado en el Captcha no coincide");
			}
		}
	</script>
	<style type="text/css">
		.captcha{
			border-radius: 5px;
			font-size: 20px;
			text-transform: uppercase;
			height: 45px;
			border-color: black;/*color para el borde donde se genera los digitos*/
			text-align: center;
			background-color: #FFF9E7;
		}
	</style>




<body>

	<!-- icon of whatsapp 
	<div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=59170395054" target="_blank">
        <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="70px">
        </a>
    </div>-->

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.html">INICIO</a></li>
						<li class="main_nav_item"><a href="nosotros.html">NOSOTROS</a></li>
						<li class="main_nav_item"><a href="requisitos.html">REQUISITOS</a></li>
						<li class="main_nav_item"><a href="carreras.html">CARRERAS</a></li>
						<li class="main_nav_item"><a href="docentes.html">DOCENTES</a></li>
						<li class="main_nav_item"><a href="administrativos.html">ADMINISTRATIVOS</a></li>
						<li class="main_nav_item"><a href="galeria.html">GALERÍA</a></li>
						<li class="main_nav_item"><a href="contactenos.php">CONTACTENOS</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>3-255004</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Inicio</a></li>
					<li class="menu_item menu_mm"><a href="nosotros.html">Nosotros</a></li>
					<li class="menu_item menu_mm"><a href="requisitos.html">Requisitos</a></li>
					<li class="menu_item menu_mm"><a href="carreras.html">Carreras</a></li>
					<li class="menu_item menu_mm"><a href="docentes.html">Docentes</a></li>
					<li class="menu_item menu_mm"><a href="administrativos.html">Administrativos</a></li>
					<li class="menu_item menu_mm"><a href="galeria.html">Galería</a></li>
					<li class="menu_item menu_mm"><a href="contactenos.php">Contactenos</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="https://www.facebook.com/TecnologicoPopularAndresIbanez/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">I.T.P.I.A.I - Todos los derechos reservados. </div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/portada.jpg)"></div>
		</div>
		
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title" style="color: #025020">Contacta con Nosotros!</div>

						<div class="contact_form_container">
							<form action="enviar.php" method="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="nombre" placeholder="Nombre" required="required" data-error="Name is required.">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" name="correo" placeholder="Correo Electronico" required="required" data-error="Valid email is required.">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" name="telefono" placeholder="Teléfono / Celular" required="required" data-error="Name is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="mensaje" placeholder="Ingrese su Mensaje" required="required" data-error="Please, write us a message."></textarea>


								<?php
			          function codigo_captcha(){
			          	$k="";
			          	$paramentros="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			          	$maximo=strlen($paramentros)-1;

			          	for ($i=0; $i <5 ; $i++) { 
			          		$k.=$paramentros{mt_rand(0,$maximo)};
			          	}
			          	return $k;
			          }
			?>
			<tr>
				<td> 
					<input type="text" name="txtcopia" id="txtcopia" size="10">
				</td>

				<td> 
					<input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
				</td>
				<tr>
					<td>&nbsp;</td>
				</tr>




								<input  class="contact_send_btn trans_200" type="submit" value="ENVIAR MENSAJE" onclick="validar();">
							</form>

						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title" style="color: #025020">Visitanos</div>
						<p style="color:black" class="about_text">Conoce nuestra Institución para poder asesorarte de mejor manera.<br>
						<div class="about_title" style="color: #025020">Horarios de Atención</div>
						<p style="color:black" class="about_text">Lunes - Viernes: 19:00pm a 22:30pm<br>Sabado: 14:00pm a 18:30pm<br> Domingo: Cerrado.<br></p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="">
									</div>
									<a href="https://goo.gl/maps/qj1omHHa6mQ9jHUaA" target="_blank">Av. Rosales, Barrio Suarez Pompeyus Plan 3.000 lado EPI-3.</a>
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="">
									</div>
									<a href="https://wa.me/59170395054" target="_blank">(591) 703-95054</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://wa.me/59133222931" target="_blank">(591-3) 322-2931</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://wa.me/59133255004" target="_blank">(591-3) 325-5004</a>
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="">
									</div><!--correo-->
									<a href="mailto:rectorado@tecnologicoandresibanez.edu.bo?__xts__=" >rectorado@tecnologicoandresibanez.edu.bo</a>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->
			
			 <div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15192.055354026488!2d-63.1213291!3d-17.8379862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59ca1f4c5c271cdd!2sTecnol%C3%B3gico%20Andres%20Iba%C3%B1ez!5e0!3m2!1ses-419!2sbo!4v1570250947133!5m2!1ses-419!2sbo" width="1100" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							<!--<div id="map"></div>-->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
							</div>
						</div>

						<p class="footer_about_text">El Tecnológico Igualitario Andrés Ibáñez, forma Técnicos Superiores con capacidades productivas, investigativas y de innovación, para responder a las necesidades socioeconómicas y culturales de Santa Cruz y del País.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Inicio</a></li>
								<li class="footer_list_item"><a href="nosotros.html">Nosotros</a></li>
								<li class="footer_list_item"><a href="requisitos.html">Requisitos</a></li>
								<li class="footer_list_item"><a href="carreras.html">Carreras</a></li>
								<li class="footer_list_item"><a href="docentes.html">Docentes</a></li>
								<li class="footer_list_item"><a href="administrativos.html">Administrativos</a></li>
								<li class="footer_list_item"><a href="galeria.html">Galería</a></li>
								<li class="footer_list_item"><a href="contactenos.php">Contactenos</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Nuestras Carreras</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="sistemasinfo.html">Sistemas Informáticos</a></li>
								<li class="footer_list_item"><a href="comunicacióninfo.html">Comunicación</a></li>
								<li class="footer_list_item"><a href="agropecuariainfo.html">Agropecuaria</a></li>
								<li class="footer_list_item"><a href="inforindustrialinfo.html">Informática Industrial</a></li>
								<li class="footer_list_item"><a href="electrónicainfo.html">Electrónica</a></li>
								<li class="footer_list_item"><a href="indalimentosinfo.html">Industria de Alimentos</a></li>
								<li class="footer_list_item"><a href="gastronomiainfo.html">Gastronomía</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contactenos</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="">
									</div>
									<a href="https://goo.gl/maps/qj1omHHa6mQ9jHUaA" target="_blank">Av. Rosales, Barrio Suarez Pompeyus Plan 3.000 lado EPI-3.</a>
								</li>
								<!-- Inicio - contacto -->
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="">
									</div>
									<a href="https://wa.me/59170395054" target="_blank">(591) 703-95054</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://wa.me/59133222931" target="_blank">(591-3) 322-2931</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="https://wa.me/59133255004" target="_blank">(591-3) 325-5004</a>
								</li>
								<!-- Fin - contacto -->
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="">
									</div><!--correo-->
									<a href="mailto:rectorado@tecnologicoandresibanez.edu.bo?__xts__=" >rectorado@tecnologicoandresibanez.edu.bo</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tecnológico Andrés Ibáñez. Todos los derechos reservados. <i class="fa fa-heart" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="https://www.facebook.com/TecnologicoPopularAndresIbanez/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</div>
<!-- icono de facebook -->
<a href='https://www.facebook.com/TecnologicoPopularAndresIbanez/?epa=SEARCH_BOX' target='_blank' title='Sígueme en Facebook'><img src='http://2.bp.blogspot.com/_dsEG33PDaHw/TJvjtOw87LI/AAAAAAAAAXg/lBmeNWBHuCc/s1600/boton-fb.png' style='display:scroll;position:fixed;bottom:225px;right:0px'/></a>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>