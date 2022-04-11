<?php
include_once('registrodb.php');
ini_set('display_errors', 1);
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];

$hostname = "localhost";
$usuariodb = "lpaniagua19";
$passworddb = "dti2022";
$dbname = "lpaniagua19";

$conexion = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);

$contrasena_fuerte = password_hash($contrasena,PASSWORD_DEFAULT);
    $insertar = "INSERT INTO `suscriptores`(`nombre`, `email`, `contrasena`) 
    VALUES ('$nombre','$email','$contrasena_fuerte')";
    $query = mysqli_query($conexion, $insertar);

    if($query){

        echo "correcto";
     }else{

        echo mysqli_errno($conexion);
        echo mysqli_error($conexion);
        
     }
?>