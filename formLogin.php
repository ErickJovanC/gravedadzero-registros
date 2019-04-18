<?php
	if(isset($_GET["inactivo"])){
		echo '<div class="alert alert-warning" role="alert">
			  ¡Este usuario debe ser activado antes de usarlo<br>
			  Comuniquese con el administrador!
			</div>';
	}
	elseif(isset($_GET["error"])){
		echo '<div class="alert alert-danger" role="alert">
			  ¡Error, usuario o contraseña incorrectos!
			</div>';
	}
	elseif(isset($_GET["registro"])){
		echo '<div class="alert alert-warning" role="alert">
			  ¡El usuario: <strong>'.$_GET["registro"].'</strong> se ha regitrado exitosamente, pero aun debe ser activado!<br>
			  ¡Pongase en contacto con el administrador!
			</div>';
	}
?>
<div class="row justify-content-center">
	<div class="col-7 col-sm-6 col-md-5 col-lg-4 col-xl-3 my-4">
		<form action="loginConexion.php" method="post">
			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input class="form-control" type="text" name="usuario" autofocus>
			</div>
			<div class="form-group">
				<label for="contraseña">Contraseña</label>
				<input class="form-control" type="password" name="password">
			</div>
			<button class="btn btn-primary" type="submit">Entrar</button>
			<a href="formRegistroUsuario.php">
				<button class="btn btn-success" type="button">Registrarse</button>
			</a>
		</form>
	</div>
</div>