<?php 

/* Clases y Atributos:
class Person{
    $name;
    $lastName;
    $sex;
    $nationality;
    $age;

    function run(){

    }
    function see(){
        echo "Yo veo una camisa azul";
        $this->name;
        $this->run();
    }
    function talk(){
        $this->see();
        $this->lastName;
    }
}
*/

/* Variables de Instancia y Clase:
require_once('person.php');
// Variable de instancia
$jose = new person();
$jose->name = 'Jose';
$jose->lastName = 'Lopez';
$carla = new person();
$carla->name = 'Carla';
// Variable de clase
person::$color = 'Azul';
*/

/* Modificadores de Acceso:
class Person{
    private $name;
    private $lastName;
    private $sex;
    private $nationality;
    private $age;
    static $color = 'Rojo'

    function run(){

    }
    function see(){
        $this->sendOrder('see');
    }
    protected function talk(){
        echo "Hola";
    }
    private function sendOrder($order){
        switch($order){
            case 'run':
                echo "Correr";
            break;
            case 'see':
                echo "Ver";
            break;
            case 'talk':
                echo "Hablar";
            break;
            default:
            echo "No se encontro la orden";
            break;
        }
    }
}
*/

/* Herencia:
require_once('person.php');
require_once('client.php');
require_once('employed.php');
// Variable de instancia
$jose = new person();
$luren = new client();
$luren->eat();
$gael = new employed();
$gael->run();
// Variable de clase
person::$color = 'Azul';
*/

/* Get y Set:
declare(strict_types = 1);
require_once('person.php');
require_once('client.php');
require_once('employed.php');
// Variable de instancia
$jose = new person();
$luren = new client();
$luren->setEmail('correo@hotmail.com');
echo $luren->getEmail();
$luren->setCommon('1');
echo $luren->getCommon();
$gael = new employed();
// Variable de clase
person::$color = 'Azul';
*/

/* Constructor y Destructor:
function __constructor(){
    echo 'Inicio';
    $this->common='';
    $this->email='default@hotmail.com';
}
function eat(){
    echo parent::talk();
}
public function getCommon() :int{
    return $this->common;
}
public function setCommon(int $common){
    $this->common = $common;
}
public function setEmail(string $email){
    $this->email = $email;
}
function __destruct(){
    echo 'Limpieza';
}
*/

/* Clases Abstractas:
declare(strict_types = 1);
require_once('person.php');
require_once('client.php');
require_once('employed.php');

// Variable de instancia
$luren = new client();
$luren->run;

$gael = new employed();
// Variable de clase
person::$color = 'Azul';
*/

/* Polimorfismo:
declare(strict_types = 1);
require_once('person.php');
require_once('client.php');
require_once('employed.php');
require_once('provider.php');

// Variable de instancia
$luren = new client();
$luren->run;
$gael = new employed();
$gael->run();
$sudoku = new provider();
$sudoku->run();

$gael = new employed();

// Variable de clase
person::$color = 'Azul';
*/
/* Traits:
declare(strict_types = 1);
require_once('person.php');
require_once('client.php');
require_once('employed.php');
require_once('provider.php');

// Variable de instancia
$luren = new client();
$luren->pay();
echo $luren->plus(50,14);

$gael = new employed();
// Variable de clase
person::$color = 'Azul';
*/

/* Type Hinting:
declare(strict_types = 1);
require_once('person.php');
require_once('client.php');
require_once('employed.php');
require_once('provider.php');

// Variable de instancia
$luren = new client();
$luren->setName('Luren');
$gael = new employed();

$sudoku = new provider();
$sudoku->setName('Sudoku');
$gael->setName('Gael');
$luren->say($gael);
// Variable de clase
person::$color = 'Azul';
*/

/* Namespaces:
declare(strict_types = 1);
require_once('person.php');
require_once('controller/client.php');
require_once('employed.php');
require_once('controller/provider.php');

// Variable de instancia
use controller as con;
$luren = new con\client();
$luren->setName('Luren');
$gael = new employed();

$sudoku = new provider();
$sudoku->setName('Sudoku');
$gael->setName('Gael');
$luren->say($gael);
// Variable de clase
person::$color = 'Azul';
*/

/* Autocarga:
declare(strict_types = 1);
declare_once('autoload.php');
(new AutoLoader())->load();

function load($class){
    echo $class;
}

spl_autoload_register('load');

// Variable de instancia
use controller as con;
$luren = new con\client();
$luren->setName('Luren');
$gael = new employed();

$sudoku = new con\provider();
$sudoku->setName('Sudoku');
$gael->setName('Gael');
$luren->say($gael);
// Variable de clase
person::$color = 'Azul';
*/

/* Clases Anónimas:
namespace controller;
require_once('person.php');
class provider extends \person{
    private $account;
    private $bank;

    function run(){
        echo 'Proveedor corriendo';
    }
    function sendProducts(){
        $anonymous = new class(10,20) extends person{
            private $dividend;
            private $divisor;
            public function __construc($dividend,$divisor){
                $this->see();
            }
            public function run(){}
            public function divideBy(){
                $plus = $this->dividend + $this->divisor;
                echo 'Soy la clase anonima '.$plus;
            }
        }
    }
}
*/

?>


