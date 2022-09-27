<?php 

//herencia multiple
// no se pueden instancear 
//cuando implementamos un metodo trait este se sobre escribe por un metodo de la clase;
class Persona{
    public $nombre;
    public function setNombre($nombre){

      echo  $this->nombre = strtolower($nombre);
    }
    public function getNombre(){
       return  ucwords($this->nombre);
    }
}




trait Latinoamericano{
    public function saludoamericano(){
        echo"este es un saludo americano";
    }
}
trait Europeo{
    public function saludoeuropeo(){
        echo"esto es un saludo europeo";
    }

}
class Peruano  extends Persona{

    use Latinoamericano;
}

$peruano = new Peruano;
$obj = new Persona;
$obj->setNombre('gaby');
$obj->getNombre();
$peruano->saludoamericano();
