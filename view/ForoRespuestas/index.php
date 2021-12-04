<?php

require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {

?>

	<!DOCTYPE html>
	<html>

	<?php require_once("../MainHead/head.php"); ?>

	<title>It For You::Foro de Respuestas</title>

	</head>

	 <body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>


		<div class="mobile-menu-left-overlay"></div>


		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">
				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Foro de Respuestas</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Foro de Respuestas</li>
								</ol>
							</div>
						</div>
					</div>
				</header>
                <!-- INICIO DE TODO-->
                <div class="box-typical box-typical-padding"> 
                    <section class="faq-page-cats">
					<div class="row">
						<div class="col-md-4"  style="text-align: center;">
							<div class="faq-page-cat">
								<div class="faq-page-cat-icon"><img src="../../public/img/faq-1.png" alt=" "></div>
								<div class="faq-page-cat-title">
									<a href="#">Empezando</a>
								</div>
								<div class="faq-page-cat-txt">Puede crear un Ticket en la seccion "Nuevo Ticket"</div>
							</div>
						</div>
						<div class="col-md-4"  style="text-align: center;">
							<div class="faq-page-cat">
								<div class="faq-page-cat-icon"><img src="../../public/img/faq-2.png" alt=""></div>
								<div class="faq-page-cat-title">
									<a href="#">Tiene algún Problema</a>
								</div>
								<div class="faq-page-cat-txt">Nosotros se lo solucionamos</div>
							</div>
						</div>
						<div class="col-md-4"  style="text-align: center;">
							<div class="faq-page-cat">
								<div class="faq-page-cat-icon"><img src="../../public/img/faq-3.png" alt=""></div>
								<div class="faq-page-cat-title">
									<a href="#">Si tiene alguna sugerencia</a>
								</div>
								<div class="faq-page-cat-txt">Estaremos atentos para escucharlo</div>
							</div>
						</div>
					</div><!--.row-->
				  </section><!--.faq-page-cats-->
                </div> 
                <div class="box-typical box-typical-padding"> 
                <section class="faq-page-questions">
					<h2  style="text-align: center;">Preguntas Comunes de los Usuarios</h2>
					<div class="row">
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">¿Qué tipo de servicios ofrecen?</a>
								</header>
								<p>It For You le ofrece servicio de soporte técnico para harware, software, incidencias y todo tipo de petición de servicio relacionado a equipos de tecnología.</p>
							</article>
						</div>
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">¿Cómo puedo cambiar mi contraseña?</a>
								</header>
								<p>El cambio de contrañeseña lo puede realizar en el apartado de Perfil, para realizar el cambio de contraseña se le solicitará validar las contraseñas ingresadas. De no poder realizarlo, puede comunicarse con nosotros generando un ticket con categoria Petición de Servicio.</p>
							</article>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">¿Cómo genero un nuevo ticket?</a>
								</header>
								<p>La opción la encuentra en el apartado de Nuevo Ticket, dentro de la pantalla principal.	
									Tenga en cuenta que debe rellenar todos los campos para que sea registrado su ticket.
								</p>
							</article>
						</div>
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">¿Qúe hago si mi internet no funciona?</a>
								</header>
								<p>Como primer paso debe verificar el correcto funcionamiento de Router o Modem de acuerdo al proveedor del servicio de internet.
								   Si el router o modem está dañado, lo mas recomendable sería adquirir uno nuevo. Si desea alguna recomendación o asesoria, genere un ticket.</p>
							</article>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">Mi computadora no prende, ¿cuál seria el problema?</a>
								</header>
								<p>Debe revisar si su conexion de corriente electrica esta en optimas condiciones, de lo contrarioel equipo presentará fallas.
								   Otra opción a evaluar sería algún tipo de problema con el disco duro, ante ello contamos con un equipo especializado.</p>
							</article>
						</div>
						<div class="col-md-6">
							<article class="faq-page-quest">
								<header class="faq-page-quest-title">
									<a href="#">El antivirus venció, ¿Existe algún peligro si no lo activo otra vez?</a>
								</header>
								<p>El principal riesgo ante ello es la posible infección de sus computadora o laptop de algún tipo de virus
									al momento de navegar por internet.	Además de la exposición de sus datos.</p>
							</article>
						</div>
					</div>
				</section><!--.faq-page-questions-->
                </div>

			</div>
		</div>
		<!-- contenido -->

		<?php require_once("../MainJs/js.php"); ?>

		<!--<script type="text/javascript" src="nuevoticket.js"></script> -->

		<script src="js/app.js"></script>
	 </body>

	</html>
 <?php

 } else {
	header("Location:" . Conectar::ruta() . "index.php");
}

?>