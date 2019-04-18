<?php
	session_start();
	if(!isset($_SESSION["identificado"])){
		header("Location: index.php");
	}
	elseif($_SESSION["tipo"]!="admin"){
		header("Location: formRegistros.php");
	}
	require("getUsuarios.php");
	$conectar=new usuarios();
	$registros=$conectar->getUsuarios();
	$titulo = "Usuarios - ";
	$icono = '<i class="fas fa-users"></i>';
	include("head.php");
?>
<div class="row justify-content-center">
	<div class="col-12 col-md-8 col-xl-4">
		<h1>Gravedad Zero</h1>
		<table>
			<tr>
				<td>Usuario</td>
				<td>Estado</td>
				<td></td>
				<td></td>
			</tr>
		<?php
			foreach ($registros as $usuario):
		?>
			<tr>
				<td><strong><?php echo $usuario->usuario ?></strong></td>
				<td><?php echo $usuario->status ?></td>
				<td>
					<a href="activarUsuario.php?id=<?php echo $usuario->id?>">
						<button class="btn btn-success"><i class="fas fa-check-circle"></i> Activar</button>
					</a>
				</td>
				<td>
					<a href="eliminarUsuario.php?id=<?php echo $usuario->id?>">
						<button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
					</a>
				</td>
			</tr>
		<?php
			endforeach;
		?>	
		</table>
	</div>
</div>
<?php
	include("foot.php");
?>