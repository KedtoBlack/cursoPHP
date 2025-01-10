<?php
/*
null
bool
int
float(numeros de punto flotante, double)
string
array
object
resource
*/

//hola esto es un comentario de linea

$un_bool= true; //un valor booleano
$un_str="hola soy kedwin"; //es un dato del tipo string
$un_str2='hola estas en mi curso de php';//es un dato del tipo string
$un_int=120;// esto es un dato entero
$un_float = 1500.76;
/*
echo  $un_bool; //imprimira un dato booleano
echo $un_str;//esto imprime un tipo string
*/

//echo  $un_str.' '.$un_str2;

//echo  'Este dato es un booleano y da como resultado= '.$un_int;

class foo{
    function hacer_algo(){
        echo "haciendo algo";
    }
}
$obj= new foo;
$obj->hacer_algo();

require "$conexion";

?>
