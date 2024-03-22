<?php include 'includes/header.php'; ////////Herencia
 interface TransporteInterfaz {
 	public function getInfo():string;
  	public function getRuedas():int;
	
 }

class Transporte implements TransporteInterfaz  {

 	public function __construct(protected int $ruedas, protected int $capacidad){

 	}

 	public function getInfo(): string {
 		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad  . " personas ";
 	}

 	 public function getRuedas():int{  
 	 	return $this->ruedas;

 	 }

 }

class Bicicleta extends Transporte { 
//Si una clase que hereda de otra tiene un metodo con el mismo nombre que el de la clase padre, dicho metodo se sobreescribe(en la clase hijo obvio)
	public function getInfo(): string {
		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad  . " personas y no gasta gasofa";
 	
	}
}

class Automovil extends Transporte implements TransporteInterfaz{ 

	public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){

 	}

 	public function getInfo() : string
 	{
 		return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " .$this->capacidad  . " personas y tiene color" . $this->color;
 	}

 	public function getColor():string{  
 	 	return "EL color es " $this->color;

 	 }

}


var_dump($transporte = new Transporte(8,12));
var_dump($auto = new Automovil(4,4, 'Rojo'));


echo $transporte->getInfo();
echo $auto->getInfo();


echo $auto->getInfo();
include 'includes/footer.php';