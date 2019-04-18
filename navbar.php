
	<!-- .navbar-expand-lg	Sirve para indicar en que punto aparecera el toggler -->
	<!-- .navbar-light 		Indicamos que usaremos un fondo claro -->
	<!-- .navbar-dark 		Indicamos que usaremos un fondo oscuro -->
	<!-- .bg-light 			Establecemos un fondo light para el navbar -->
	<!-- Tambien podemos darle nuestro propio color de fondo con CSS -->

	<!-- .fixed-top 		Nos permite fijar el menu en la parte superior -->
	<!-- .fixed-bottom 		Nos permite fijar el menu en la parte inferior -->
<?php
	//session_start();
	if(isset($_SESSION["identificado"])){
		?>
		<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
			<!-- .container nos permite centrar el contenido de nuestro menu, esta clase es opcional y podemos encerrar el menu <nav> o incluir el contenedor dentro del <nav> -->
			<div class="container">
				<!-- Nos sirve para agregar un logotipo al menu -->
				<div class="navbar-brand">Gravedad Zero</div>
				
				<!-- Nos permite usar el componente collapse para dispositivos moviles -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
					 <!-- Crea el boyón hamburguesa -->
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="formRegistros.php" class="nav-link">Registro Diario</a>
						</li>
						<li class="nav-item">
							<a href="formReporteMensual.php" class="nav-link">Reporte Mensual</a>
						</li>
						<li class="nav-item">
							<a href="cerrarSession.php" class="nav-link">Cerrar Sessión</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>';
<?php
	}
?>