<?php 
declare(strict_types=1);
include 'includes/header.php';

class Producto{



	public function __construct(public string $nombre,public int $precio, public bool $disponible){

	}

	public function mostrarProducto(){

		echo "EL producto es: " . $this->nombre. " y su precio es de: " . $this->precio;
		echo "HOLA, esto es otra modificacion para practicar en git";

	}
}



$producto = new Producto('Television', 5500, true); 
$producto2= new Producto('Tablet', 50, false); 

$producto -> mostrarProducto();
echo"<br>";

$producto2 -> mostrarProducto();
echo"<br>";

echo"<pre>";
var_dump($producto);
echo"</pre>";
echo"<br>";

echo"<pre>";
var_dump($producto2);
echo"</pre>";



include 'includes/footer.php';