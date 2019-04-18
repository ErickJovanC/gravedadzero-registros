<?php
	$titulo = "Registar Usuario - ";
	$icono = '<i class="fas fa-user-plus"></i>';
	include("head.php");
?>
<div class="row justify-content-center">
	<div class="col-8 col-sm-7 col-md-6 col-lg-5 col-xl-4 my-4">
		<form action="loginRegistro.php" method="post" autocomplete="off">
			<div class="form-group">
				<label for="usuario" >Usuario</label>
				<input class="form-control" type="text" name="usuario" autofocus required>
			</div>
			<div class="form-group">
				<label for="contraseña">Contraseña</label>
				<input class="form-control" type="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" required>
			</div>
			<button class="btn btn-primary" type="submit">Registrarse</button>
			<a href="index.php">			
				<button class="btn btn-danger" type="button">Cancelar</button>
			</a>
		</form>
	</div>
</div>
<?php
	include("foot.php");
?>