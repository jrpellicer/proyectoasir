<!doctype html>
<html lang="es">
	<head>
		<title>Auto Camp</title>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Bootstrap Icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
		<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
	</head>

	<body>
	
		<header>

			<nav class="navbar navbar-expand-sm navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand" href="#">
						<img src="assets/images/frog_square_32x32.png" height="32px" alt="frog" >
						Autocamp
					</a>
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Coches <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Ofertas especiales</a>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Renault Clio">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
						</form>
					</div>
				</div>
			</nav>
		</header>      


		<main>

			<?php
				include 'database_connect.php';
				
				$license_plate = $_GET['license_plate'];

				
				$sql = "SELECT * FROM cars where license_plate='{$license_plate}'";
				$result = $conn->query($sql);
				
				if($result->num_rows == 0)
				{
					echo "<div class='container'><br><p>Coche no encontrado. <a href='index.php'>Volver al listado de coches</a></p></div>";
					die();
				}

				$car = $result->fetch_assoc();

				include 'database_dispose.php';
			?>

			<br>

			<div class="container">
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Alquiler</a>
					<a class="breadcrumb-item" href="#">Vehículos</a>
					<a class="breadcrumb-item" href="index.php">Coches</a>
					<span class="breadcrumb-item active">
						<?php
							echo $car['license_plate'];
						?>
					</span>
				</nav>
			</div>


			<div class="container">
				<h1>
					<?php
						echo $car['brand'] . " " . $car['model']
					?>
				</h1>

				<hr>

				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<img src="assets/images/renault_clio.jpg" width="100%"/>
					  	</div>
						<div class="form-group col-md-6">

							<div class="form-group">
								<label for="matricula">Matrícula</label>
								<?php
									echo "<input type='text' class='form-control' id='matricula' value='{$car['license_plate']}' disabled>";
								?>
							</div>
						
							<div class="row">
								<div class="form-group col-4">
									<label for="marca">Marca</label>
									<?php
										echo "<input type='text' class='form-control' id='marca' value='{$car['brand']}' disabled>";
									?>
								</div>
								<div class="form-group col-8">
									<label for="modelo">Modelo</label>
									<?php
										echo "<input type='text' class='form-control' value='{$car['model']}' id='modelo' disabled>";
									?>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="form-group col-4">
									<label for="fecha">Fecha de fabricación</label>
									<?php
										echo "<input type='text' class='form-control' id='fecha' value='{$car['manufacture_date']}' disabled>";
									?>
								</div>
								<div class="form-group col-4">
									<label for="kilometraje">Kilometraje</label>
									
									<?php
										echo "<input type='text' class='form-control' id='kilometraje' value='{$car['mileage']} km' disabled>";
									?>
								</div>
								<div class="form-group col-4">
									<label for="color">Color</label>
									<?php
										echo "<input type='color' class='form-control' id='color' value='{$car['color']}' disabled>";
									?>
								</div>
							</div>


						</div>
					</div>
					<!-- <div class="form-group">
					  <label for="inputAddress">Address</label>
					  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
					  <label for="inputAddress2">Address 2</label>
					  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					</div>
					<div class="form-row">
					  <div class="form-group col-md-6">
						<label for="inputCity">City</label>
						<input type="text" class="form-control" id="inputCity">
					  </div>
					  <div class="form-group col-md-4">
						<label for="inputState">State</label>
						<select id="inputState" class="form-control">
						  <option selected>Choose...</option>
						  <option>...</option>
						</select>
					  </div>
					  <div class="form-group col-md-2">
						<label for="inputZip">Zip</label>
						<input type="text" class="form-control" id="inputZip">
					  </div>
					</div>
					<div class="form-group">
					  <div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
						  Check me out
						</label>
					  </div>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button> -->
				</form>


				<div>
					<a href="index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop"><i class="bi bi-cash-stack"></i> Alquilar</button>
				</div>

				<br>
			
			</div>

		</main>

		<!-- MODALS -->

		<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">
						<?php
							echo "Has reservado un " . $car['brand'] . " " . $car['model'];
						?>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Gracias por su confianza, haremos el cobro en las oficinas el día de la recogida del vehículo.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Genial!</button>
				</div>
				</div>
			</div>
		</div>


		<footer>

			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
			  © IES Camp de Morvedre:
			  <a class="text-body" href="https://portal.edu.gva.es/iescamp/va/centre/">iescamp</a>
			</div>

		</footer>


		  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>
