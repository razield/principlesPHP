<?php
/*
	Basic sentences PHP and dev
	Author: Juan F. Zuluaga G
	Practicante@sasaconsultoria.co
*/
//**********   Arrays   **********

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//Sobreescritura
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);


//***********	IF   *************

if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}

//**********   SWITCH   **********

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;

    default:
    	echo "Esto se escribe si no es ninguno de los anteriores";
    	break;
}	

//**********   FOR   **********

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

//**********   While and Do while   **********

$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}
$i = 1;
do{
	echo $i++;
}while($i < 10);

//**********   Functions   **********

function myFunction($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Función de ejemplo.\n";
    return $valor_devuelto;
}

//**********   Class   **********

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}

//**********   Class 2°   **********

function __construct($id, $nombre, $apellidos, $codigoPostal){
	$this->id = $id;
	$this->nombre = $nombre;
	$this->apellidos = $apellidos;
	$this->codigoPostal = $codigoPostal;
}

?>