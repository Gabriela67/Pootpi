<?php


    interface Auto
    {
     public function encender();
     public function apagar();
    }

    interface gasolina extends Auto
    {
     public function vaciarTanque();
     public function llenarTanque($cant);
    }
    ///para heredar a una clase se utiliza implemets
    ///y la clase debe tener todos los metodos definidos en la interface
    ///obliga a la clase a incluir los metodos que se crean en la interfaz 
    class Deportivo implements gasolina
    {
        private $estado = false;
        private $tanque = 0 ;
        public function estado(){
            if($this->estado) {
                print"el auto esta encendido y tiene <br> " . $this->tanque. "de litros en el tanque";
            }else{
            print"el auto esta apagado";
            }
        } 
        public function encender()
        {
            if ($this->estado) {
                print"no puede encender el auto 2 veces";
            }else{
                if ($this->tanque <= 0) {
                    print"usted no puede encender auto , el tanque por que esta vacio";
                }else{
                    print "auto encendido";
                    $this->estado= true;
                }
               
            }
        }
        public function apagar()
        {
            if ($this->estado) {
                print"auto Apagado <br>";
            }else{ print "el auto ya esta apagado";
                
            }
        }
            
        
        public function vaciarTanque()
        {
            $this->tanque= 0;
        }
        public function llenarTanque($cant)

        {
            $this->tanque = $cant;
        }
        public function usar($km){
            if ($this->estado) {
                $reducir = $km / 3 ;
                $this->tanque = $this->tanque - $reducir;
                if ($this->tanque <= 0 ) {

                    $this->estado = false;
                }
                
            }else{ print "El auto esta apagado y no se puede usar ";
                
            }
        }
        }
    


    $obj = new Deportivo();
    $obj->llenarTanque(100);
    $obj->encender();
    $obj->usar(350);
    $obj->estado();

?>