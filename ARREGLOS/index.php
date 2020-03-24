<?php 

/* Arreglos Indexados:
$color1 = 'Rojo';
$color2 = 'Morado';
$color3 = 'Verde';

$colors = array('Rojo','Morado','Verde');

echo $colors[2];
$color[1] = 'Azul';
print_r($colors);
*/

/* Arreglos Asociativos:
$person = array('name' => 'Marines', 'lastName' => 'Mendez', 'age' => 56);
print_r($person);
echo $person['name'];
$person['lastName'] = 'Gallegos';
print_r($person);
*/


/* Arreglos Multidimensionales:
$battleShip = array(
    'A' => array('Mar','Barco','Mar','Mar'),
    'B' => array('Mar','Mar','Mar','Mar'),
    'C' => array('Mar','Mar','Barco','Mar'),
    'D' => array('Mar','Mar','Mar','Mar'));
    print_r($battleShip);
    $coordinates=$battleShip['A'][0];
    echo $coordinates;
    $coordinates=$battleShip['A'][1];
    echo $coordinates;
*/

/* Recorrer Arreglos :
$colors = array('Rojo','Morado','Verde');
$person = array('Nombre' => 'Marines', 'Apellido' => 'Mendez', 'age' => 56);
$battleShip = array(
    'A' => array('Mar','Barco','Mar','Mar'),
    'B' => array('Mar','Mar','Mar','Mar'),
    'C' => array('Mar','Mar','Barco','Mar'),
    'D' => array('Mar','Mar','Mar','Mar'));

    for($i=0; $i<sizeof($colors) ;$i++){
        echo "Indice: $i Valor: {$colors[$i]} \n";
    }

    foreach($battleShip as $key => $value){
        for($i=0; $i<sizeof($value) ;$i++){
            echo "Cordenadas: Fila $key Columna: $i \n";
        }
    }
*/

?>


