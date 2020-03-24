<?php 

/* Hola Mundo:
echo print 'Hola Mundo ';

echo "<br>";
*/

/* Niveles de Error 1: (Parse error)

echo 'Hola'
echo 'Adios';

*/

/* Niveles de Error 2: (Fatal error)

noExisto();
echo 'llegue al final';

*/

/* Niveles de Error 3: (Warning error)

echo 200/0;
echo "llegue al final";

*/

/* Niveles de Error: (Notice error)

$result;
echo 'Resultado '.$result;
echo 'llegue al final';

*/

/* Variables y Constantes:
$path='Curso-Profesional-PHP-CodigoFacilito-Ejercicios/index.php';
define('PATH1', $path);
echo PATH1;
define('PATH2', mt_rand());
echo PATH2;

print_r(get_defined_constants(true));
*/

/* Comillas simples, dobles y salto de linea:
$animal="Panda";
echo " \"Hola $animal \n adios \"";

echo "<br>";

echo 'Hola $animal \n';

echo "<br>";

echo 'En ingles "do not" se puede escribir como don \'t ';
*/

/* Sintaxis heredoc y nowdoc: 
echo <<<FRASE
"Con esfuerzo y perseverancia \n podrás alcanzar tus metas"
FRASE;
*/

/* Conversión de tipos:
$price = 2029.50;
$age = 12;
$name = 'Alan';
$isDog = false;

$price = strval($price);
$name = boolval($name);
$isDog = floatval($isDog);

echo var_dump($price)
echo var_dump($age)
echo var_dump($name)
echo var_dump($isDog)
*/

/* Concatenación e interpretación: 
$word1='codigo';
$word2='facilito';

echo "Hola bienvenidos a {$word1} {$word2}";
*/

/* Extraer y buscar:
echo substr("Alan Martín",5);

$myString = 'Bienvenido al mundo de la programación';
$findme = 'programación';
echo strpos($myString,$findme);
*/

/* Reemplazo y formateo:
$search='5';
$replace='*';
$text='91 75 1A EC 9A C7';
str_replace($search,$replace,$text,$count);
echo $count;

$arg1 = 1996;
$arg2 = 'PHP';
$text = 'En %2$s fue creado %1$d';
echo sprintf($text,$arg1,$arg2);
*/

/* PCRE: 
$text = '30-10-2018';
echo preg_match("/([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})/",$text);
*/

?>


