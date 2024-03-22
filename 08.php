<?php include 'includes/header.php';

require 'vendor/autoload.php';

//incluir las otras clases 

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;

$detalles = new Detalles();
$clientes = new App\Clientes();


include 'includes/footer.php';