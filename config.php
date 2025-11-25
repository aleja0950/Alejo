<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "mascotas";
$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or
    die("Problemas con la conexión");
?>