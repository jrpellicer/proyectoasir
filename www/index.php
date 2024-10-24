<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Tabla de Clientes</h2>

    <?php
        // Conectar a la base de datos
        $servername = "localhost";
        $username = "asirweb";
        $password = "password";
        $dbname = "webasir";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consultar los datos
        $sql = "SELECT * FROM clientes";
        $result = $conn->query($sql);
    ?>

    <table>
        <tr>
            <th>Razón Social</th>
            <th>Descripción</th>
            <th>Email</th>
            <th>teléfono</th>
        </tr>

        <?php
            // Mostrar los datos en la tabla
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['razon_social']}</td>
                            <td>{$row['descripcion']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['telefono']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No hay datos disponibles</td></tr>";
            }

            // Cerrar la conexión
            $conn->close();
        ?>
    </table>

</body>
</html>
