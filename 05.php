<?php include 'includes/header.php'; ////////Herencia
 // Para evitar que se instacie una clase se le debe setear como abstracta

 abstract class Transporte {

 	public function __construct(protected int $ruedas, protected int $capacidad){

 	}

 	public function getInfo(): string {
 		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad  . " personas ";
 	}
 }

class Bicicleta extends Transporte { 
//Si una clase que hereda de otra tiene un metodo con el mismo nombre que el de la clase padre, dicho metodo se sobreescribe(en la clase hijo obvio)
	public function getInfo(): string {
		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad  . " personas y no gasta gasofa";
 	
	}
}

class Automovil extends Transporte { 

	public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){

 	}

 	public function getTransmision() : string
 	{
 		return $this->transmision;
 	}
}


$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo "<hr>";

$auto = new Automovil(4,4, 'Manual');

echo $auto->getInfo();
include 'includes/footer.php';