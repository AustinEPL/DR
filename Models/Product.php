<?php
class Product extends Model{
    protected $table = 'products';
 

    public function __get($nombre){
        if (array_key_exists($nombre,$this->properties)) {
            return $this->properties[$nombre];
        }
        throw new Exception("La propiedad {$nombre} no existe");
        
    
        
    }

    
}
