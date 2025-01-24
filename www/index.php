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

        <?php
            include 'database_connect.php';
            
            $sql = "SELECT * FROM cars";
            $result = $conn->query($sql);

            include 'database_dispose.php';
        ?>
    
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
                                <a class="nav-link" href="#">Coches <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ofertas especiales</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li> -->
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

            <br>

            <div class="container">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">Alquiler</a>
                    <a class="breadcrumb-item" href="#">Vehículos</a>
                    <span class="breadcrumb-item active">Coches</span>
                </nav>
            </div>


            <div class="container">
                <h1>Coches disponibles <i class="bi bi-truck"></i></h1>
                
                <hr>

                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-secondary"
                    >
                        <thead>
                            <tr>
                                <th>Matrícula</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
    
                            if ($result->num_rows > 0)
                            {
                                while ( $row = $result->fetch_assoc() )
                                {
                                    echo "  <tr>
                                                <td>{$row['license_plate']}</td>
                                                <td>{$row['brand']}</td>
                                                <td>{$row['model']}</td>
                                                <td>
                                                    <div class='btn-group'>
                                                        <a href='car_detail.php?license_plate={$row['license_plate']}' class='btn btn-outline-success btn-md'><i class='bi bi-eye'></i> Detalles</a>
                                                        <button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#staticBackdrop'><i class='bi bi-pen'></i> Editar</button>
                                                    </div>
                                                </td>
                                            </tr>";
                                }            
                            }
                            else
                            {
                                echo "<tr><td class='danger' colspan='5'>No hay datos disponibles</td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                
            </div>

        </main>

        <!-- MODALS -->
		<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">
						<?php
							echo "Eres un fraude!";
						?>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Vaya, parece que no tienes permisos de administración, a quien quieres engañar?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Oops</button>
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
