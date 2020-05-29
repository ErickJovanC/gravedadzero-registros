<div class="modal" tabindex="-1" role="dialog" id="<?php echo "eliminar".$registro->id; ?>">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">¿Eliminar?</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<p>¿Estas seguro que deseas eliminar este registro?
		<br>Ya no se podra recuperar</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<a href="eliminarRegistro.php?id=<?php echo $registro->id; ?>">
		  <button type="button" class="btn btn-danger">Eliminar</button>
		</a>
	  </div>
	</div>
  </div>
</div>