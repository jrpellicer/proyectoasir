<!-- DATABASE CONFIG -->
<?php
    $servername = "mysql";
    $username = "asirweb";
    $password = "qwe_123";
    $dbname = "webasir";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>