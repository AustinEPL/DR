<?php
class QueryBuilder
{
    // protected $cols = [];
    protected $pdo;
    //creamos su constructor y pasamos el pdo para hacer las consultas
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


   
    //para que la consulta sea dinamica le paso por argumento que tabla 
    //quiero consulta y la clase en la que quiero guardar el resultado
    public function selectAll($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findBy($table, $params)
    {
        $cols = array_keys($params);
        $cols = implode(' AND ', array_map(function ($col) {
            return "{$col}=:{$col}";
        }, $cols));
        $query = $this->pdo->prepare("select * FROM {$table} WHERE $cols");
        $query->execute($params);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE ID={$id}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC)[0];
    }


    public function create($name, $email, $pass, $fecha)
    {
        //para saber que columnas van a ser afectadas tenemos que recuperar las llaves de este array en texto y con una coma
        // die($fecha);
        $sql = "insert into usuarios (Name, Email, Password, Fecha_reg) values ({$name},{$email},{$pass},{$fecha})";

        try {
            $query = $this->pdo->prepare($sql);
            //pasaremos los valores
            $query->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
            //throw $th;
        }
    }

    public function createUser($table, $properties)
    {

        //para saber que columnas van a ser afectadas tenemos que recuperar las llaves de este array en texto y con una coma
        $cols = implode(",", array_keys($properties));
        $placeHolders = ':' . implode(", :", array_keys($properties));

        $sql = "insert into {$table} ({$cols}) values ($placeHolders)";

        try {
            $query = $this->pdo->prepare($sql);
            //pasaremos los valores
            $query->execute($properties);
        } catch (PDOException $e) {
            die($e->getMessage());
            //throw $th;
        }
    }


    public function update($table, $id, $properties)
    {

        //poder actualzar el email, celular, direccion

        $cols = array_keys($properties);
        $cols = implode(', ', array_map(function ($col) {
            return "{$col}=:{$col}";
        }, $cols));



        $sql = "update {$table} set {$cols} where ID=:ID";

        try {
            $query = $this->pdo->prepare($sql);
            //pasaremos los valores
            //vamos a añadir el id con una desestructuracion
            $properties['ID'] = (int)$id;

            // die(var_dump($properties));
            $query->execute($properties);
        } catch (PDOException $e) {
            die($e->getMessage());
            //throw $th;
        }
    }






    //buscamos en la BBDD
    // public  function findBy($table,$params){
    //     $this->cols=array_keys($params);
    //     $cols->implode(' AND ',array_map(
    //         function($col){        return "{$col}=:{$col}"; },$cols));
    //     $query=$this->pdo->prepare("SELECT * FROM {$table}  WHERE {$cols}");
    //     //ejecutamos la consulta
    //     $query->execute();

    //     //retornamos la consulta
    //     return $query->fetchAll(PDO::FETCH_ASSOC);



    // }

    //Eliminar para el admin como eliminar un producto
    public function delete($table, $id)
    {
        //poder actualzar el email, celular, direccion


        $sql = "delete from {$table} where ID=:ID";

        try {
            $query = $this->pdo->prepare($sql);
            //pasaremos los valores
            //vamos a añadir el id con una desestructuracion
            // die(var_dump($properties));
            $query->execute(['ID' => (int)$id]);
        } catch (PDOException $e) {
            die($e->getMessage());
            //throw $th;
        }   # code...
    }
}
