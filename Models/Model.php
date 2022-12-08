<?php

class Model
{
    protected $properties = [];
    protected $table;

    public function __construct($properties=[])
    {
        $this->properties = $properties;
    }


    public static function create($properties)
    {
        //instancias desde una funcion static para evitar la creacion de un objeto 
        $model = new static($properties);
        $model->save();
        return $model;
    }


    public static function all(){
        //instanciamos un objetos que dependera de la clase desde donde sea llamada
        $model = new static;
        $rows=App::get('database')->selectAll($model->getTable());
        //retornamos un array pero protegido
       return array_map(function($row){
            return new static($row);
        },$rows);

    }


    public function save()
    {
        //verificamos si la tabla no fue creada
        if (empty($this->table)) {
            throw new Exception("La tabla no existe aun");
        }
        //si no usamos el metodo createuser del querybuilder
        App::get('database')->createUser($this->table, $this->properties);
    }

//metodo para busar por 1 fila
    public static function find($id){
        $model = new static;
        //llamamos al objeto pdo para hacer la consulta y guardamos la consulta 
        $properties=App::get('database')->find($model->getTable(),$id);
        //enviamos el resultado a las propiedades
        $model->setProperties($properties);
        return $model;
    }

    public static function findBy($params){
        $model = new static;
        //llamamos al objeto pdo para hacer la consulta y guardamos la consulta 
        $rows=App::get('database')->findBy($model->getTable(),$params);
        return array_map(function($row){
            return new static($row);
        },$rows);;
        

    }

    public function update($properties){

        App::get('database')->update($this->getTable(), $this->properties['ID'], $properties);
        //actualizamos la informacion del select 
        $this->setProperties($properties);
        return $this;
    }
    public function delete(){
        App::get('database')->delete($this->getTable(),$this->properties['ID']);

    }

    public function getTable()
    {
        return $this->table;
    }
    public function setProperties($properties)
    {
        //en caso de que se sobreescriban usamos el merge para evitarlo
        return $this->properties=array_merge($this->properties,$properties);
    }
}
