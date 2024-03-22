<?php include 'includes/header.php';

//Conectar a la BD  con Mysqli.

$db = new  PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'Root.209');

//Creamos el query 0
$query = "SELECT titulo from propiedades";

//consulta la db
// query normal = $propiedades = $db->query($query)->fetchAll();


//Preparamos 
$stmt = $db->prepare($query);
//Ejecutamos 
$stmt->execute();

//Creamos el arreglo assoc
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $propiedad):	
	echo $propiedad['titulo'];
endforeach;	



include 'includes/footer.php';