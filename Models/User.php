<?php
class User extends Model{
    protected $table='users';

    // public function __construct(
    //     public $table = 'usuarios',
    //     public $name,
    //     public $apellido,
    //     public $correo,
    //     public $pass,
    // ) {
public function __get($nombre){
    if (array_key_exists($nombre,$this->properties)) {
        return $this->properties[$nombre];
    }
    throw new Exception("La propiedad {$nombre} no existe");
    

    
}

    }



    /*
   public function findByDni($dni)
    {
        $db = new Conexion();
        $sql = 'SELECT * FROM orders WHERE IdCustomer=' . $dni;
        $arrayResultados = [];
        $resul = $db->conectar()->prepare($sql);
        $resul->execute();
        if($dni){
        while ($rs = $resul->fetch(PDO::FETCH_ASSOC)) {
        return new Usuario($rs['IdOrder'], $rs['IdCustomer'], $rs['IdOrderStatus'],'nulo');
           // $arrayResultados[] = $p;
        }

    }
return null;
       
}
*/

