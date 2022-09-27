<?php

 abstract class Animal{
    public $nombre;
    public $color;

    public function describir(){
        return "el nombre es :". $this->nombre ."el color es: ".$this->color;
    }
    ///creacion de un metodo abstracto
    abstract public function sonido();
    /// cuando creamos un metodo abstracto significa que toda la clase tiene que ser abstracta
    ///las clases abstractas no se pueden instancear
}
///creacion de una clase que se hara uso de una clase abstracta

class Gato extends Animal{

    public function describir(){
        return parent::describir();
        /// para acceder  de esta manera a una funcion de la clase abstracta
    }
    public function sonido()
    {
        return "miauw <br>";
    }

}
class Perro extends Animal{

    public function describir(){
        return parent::describir();
        /// para acceder  de esta manera a una funcion de la clase abstracta
    }
    public function sonido()
    {
        return "<br>Guaww";
    }

}

$animal = new Gato;
$animal->nombre = "larry";
$animal->color = "negro";
echo $animal->describir();
echo $animal->sonido();



?>