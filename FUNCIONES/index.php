<?php 

/* Funciones:
function subjects(){
    echo "Matematicas, Biologia, Español, Ciencias, Geografia";
}

echo "Jose tus materias son:";
subjects();
echo "\n Hola amigo espero y estes bien, tus materias son:";
subjects();
*/

/* Argumentos de Funciones:
function call($value){
    if($value <= 10){
        echo "$value \n";
        call(++$value);
    }
}
call(1);
*/

/* Devolver Valores:
function operation($num1,$num2){
    return array($num1+$num2,$num1-$num2,$num1/$num2);
}
list($plus,$minus,$divideBy) = operation(15,5);
echo "La suma es: $plus La resta es: $minus La division es: $divideBy";
*/

/* Funciones Variables y Anónimas:
function operation(){
    echo 'Funcion variables';
}
$variable = 'operacion';
$variable();
*/

/* Declaraciones de Tipo Escalar:
declare(strict_types = 1);
function validate(int $age):string{
    if($age>=18){
        return 'Puedes ver la pelicula';
    } else {
        return 'No puedes ver la pelicula';
    }
}

echo validate(18);
*/

?>


