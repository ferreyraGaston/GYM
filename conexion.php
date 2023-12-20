<?php

    // require __DIR__ . '/vendor/autoload.php';

    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->load();

    // Variables de producción
    //$HOST = $_ENV['HOST'];
    //$DB_USER = $_ENV['DB_USER'];
    //$DB_PASSWORD = $_ENV['DB_PASSWORD'];
    //$DB_NAME = $_ENV['DB_NAME'];
    //$DB_PORT = $_ENV['DB_PORT'];

    $HOST = "localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    $DB_NAME = "gimnasio";
    $DB_PORT = "3306";

    try {
        //$conexionDB = new mysqli("$HOST", "$DB_USER", "$DB_PASSWORD", "$DB_NAME", "$DB_PORT");
        $conexionDB = new mysqli("$HOST", "$DB_USER", "$DB_PASSWORD", "$DB_NAME", "$DB_PORT");
        if ($conexionDB->connect_error){
            die("Ocurrió un error al conectar la base de datos!");
        }
    }
    catch (Exception $ex){
        echo "Ocurrió un error al conectarse a la base de datos!".$ex->getMessage();
    }

?>