<?php 
declare(strict_types=1);
include 'includes/header.php';

class Producto{

	//Public - Se puede acceder y modificar en cualquier lugar 

	//Protected - se puede acceder unicamente en la clase

	//Private - solo miembros de la misma clase pueden acceder a el 
	public  $imagen;
	public static $imagenPlaceholder = "Imagen.jpg";


	public function __construct(public string $nombre,public int $precio, public bool $disponible, string $imagen){

		if($imagen) {
			self::$imagenPlaceholder= $imagen;
		}

	}

	public static function obtenerImagenProducto (){
		return self::$imagenPlaceholder;
	}

	public static function obtenerProducto() {
		echo "Obteniendo datos del Producto";
	}

	public function mostrarProducto(): void{

		echo "EL producto es: " . $this->nombre. " y su precio es de: " . $this->precio;

	}

	public function getNombre(): string{

		return $this->nombre;
	}

	public function setNombre(string $nombre){
		$this ->nombre = $nombre;
	}
}

//echo Producto::obtenerImagenProducto();



$producto = new Producto('Television', 5500, true, ''); 
// echo $producto -> getNombre();
// echo"<br>";
// echo $producto -> obtenerImagenProducto();
// echo"<br>";
// $producto->obtenerProducto();
// echo"<br>";
// $producto->setNombre('Hola que hace');

$producto2= new Producto('Tablet', 50, false,'monitorCurvo.jpg'); 

echo $producto -> getNombre();
echo"<br>";
echo $producto -> obtenerImagenProducto();
echo"<br>";
$producto->obtenerProducto();
echo"<br>";
$producto->setNombre('Hola que hace');


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