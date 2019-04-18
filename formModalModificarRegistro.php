<div class="row">
	<div class="col-12">
		<div class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Modificar Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<form action="guardarRegistro.php" method="post">
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="fecha">Fecha</label>
									<input class="form-control" type="date" name="fecha" required autofocus>
								</div>
								<div class="form-group col-md-4">
									<label for="sucursal">Sucursal: </label>
									<br><input type="radio" name="sucursal" value="Arcos" required> Arcos
									<br><input type="radio" name="sucursal" value="Centro"> Centro
									<br><input type="radio" name="sucursal" value="Santiago"> Santiago
									<br><input type="radio" name="sucursal" value="San Jeronimo"> San Jerónimo
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="cajainicial">Caja Inicial</label>
									<input class="form-control" type="text" name="cajainicial" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="venta">Venta</label>
									<input class="form-control" type="text" name="venta" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="internet">Internet</label>
									<input class="form-control" type="text" name="internet" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="recargas">Recargas (Solo saldo)</label>
									<input class="form-control" type="text" name="recargas" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="registros">Registros (Numero de recargas)</label>
									<input class="form-control" type="number" name="registros" placeholder="0.00"required>
								</div>
								<div class="form-group col-md-4">
									<label for="gastos">Gastos</label>
									<input class="form-control" type="text" name="gastos" placeholder="0.00">
								</div>
								<div class="form-group col-md-8">
									<label for="concepto">Concepto (Máximo 255 caracteres)</label>
									<textarea name="concepto" id="mensaje" class="form-control" maxlength="255"></textarea>
								</div>
								<div class="form-group col-md-4">
									<label for="cajafinal">Caja Final</label>
									<input class="form-control" type="text" name="cajafinal" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="entregado">Entregado</label>
									<input class="form-control" type="text" name="entregado" placeholder="0.00" required>
								</div>
								<div class="form-group col-md-4">
									<label for="diferencia">Diferencia (Sobrante o Faltante)</label>
									<input class="form-control" type="text" name="diferencia" placeholder="0.00">
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Guardar</button>
						</form>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>