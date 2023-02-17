<?php include("./includes/header.php") ?>

<br>
<br>
<br>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Operaciones con matrices</h3>
			</div>
			<div class="card-body">
				<form action="resultado.php" method="POST">
					<div class="form-group">
						<h3 class="text-center">MATRIZ A</h3>
						<input type="number" name="filaA" class="form-control" placeholder="Filas de la matrix A" required>
						<input type="number" name="columnaA" class="form-control" placeholder="Columnas de la matrix A" required>
					</div>
					<div class="form-group">
						<h3 class="text-center">MATRIZ B</h3>
						<input type="number" name="filaB" class="form-control" placeholder="Filas de la matrix B" required>
						<input type="number" name="columnaB" class="form-control" placeholder="Columnas de la matrix B" required>
					</div>
					<h4 class="text-center">Selecciona las operaciones:</h4>
					<input type="checkbox" name="op[]" value="suma"> Suma<br>
					<input type="checkbox" name="op[]" value="resta"> Resta<br>
					<input type="checkbox" name="op[]" value="multi"> Multiplicación<br>
					<br>
					
					<div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="enviar"> Realizar operaciones </button>
						</div>
					</div>

				</form>
		</div>
	</div>
</div>


<?php include("./includes/footer.php") ?>

