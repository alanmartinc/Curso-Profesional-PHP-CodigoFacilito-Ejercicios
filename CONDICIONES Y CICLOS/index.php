<?php 

/* If, Else y Else If:
$age = 40;

if($age >= 18 && $age <= 30){
    echo 'Puedes ver la pelicula';
    //Sentencia
} else if($age>30){
    echo 'No puedes ver la pelicula porque tu edad es mayor a 30';
} else{
    echo 'No puedes ver la pelicula porque tu edad es menor a 18';
}
*/

/* Switch:
$shirt='Verde';
switch($shirt):
    case 'Rojo':
        echo 'Camisa color Rojo, solo talla chica';
    break;
    case 'Azul':
        echo 'Camisa color Azul, solo talla chica';
    break;
    case 'Azul':
        echo 'Camisa color Azul, solo talla chica, grande';
    break;
    case 'Amarillo':
        echo 'Camisa color Amarillo, solo talla chica';
    break;
    default:
    echo 'No encontramos lo que buscabas';
    break;
endswitch
*/

/* For:
for($i=10;$i>=1;-$i){
    echo "Anuncio repetir $i \n";
}
*/

/* While y Do While:
$game = 'no';
while($game == 'no'){
    //Sentencia
    echo "Prestame tu juego";
}

do {
    echo "Zapato numero $cont \n";
    ++$cont;
} while($cont<=12);
*/

/* Foreach:
$animals = array('Gato', 'Perro', 'Panda');
$datas = array('Nombre' => 'Marines', 'Apellido' => 'Mendez', 'Sexo' => 'Femenino');

foreach($animals as $animal){
    echo "El animal es $animal \n";
}

foreach($datas as $clave => $valor){
    echo "La clave es $clave y el valor es $valor \n";
}
*/

?>


