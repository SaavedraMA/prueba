<?php include 'includes/header.php';

//Conectar a la BD  con Mysqli.

$db = new  mysqli('localhost', 'root', 'Root.209', 'bienesraices_crud');

//Creamos el query 0
$query = "SELECT titulo from propiedades";


//$resultado = $db->query($query); query normal


$stmt = $db->prepare($query); //Lo preparamos

$stmt->execute();// Ejecutamos

$stmt->bind_result($titulo); //Creamos la variable 

$stmt->fetch(); // Asignamos el resultado

var_dump($titulo);//impresion del resultado

// var_dump($resultado->fetch_assoc());

include 'includes/footer.php';