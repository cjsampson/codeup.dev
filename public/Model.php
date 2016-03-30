<?php

require_once '../contactsConfig.php';

abstract class Model
{
    protected $attributes =[];
    protected static $dbc;  

    public function __construct($attributes = ['id' = null])
    {   
        self::dbConnect();
        $this->attributes = $attributes;
    }

    public function __get($name) 
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    public function __set($name, $value) 
    {
        $this->attributes[$name] = $value;
    }

    protected static function dbConnect()
    {
        if (!self::$dbc) {
            self::$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
        }
    }

    protected static function all()
    {
        self::dbConnect();
        $stmt = self::$dbc->query("SELECT * FROM :table");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    protected static function find($id)
    {
        self::dbConnect();
        $stmt = self::$dbc->prepare("SELECT * FROM :table WHERE id = :id");
        $stmt->bindValue(':table', self::$table, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    protected static function save()
    {
        self::dbConnect();
        $attributes ? self::update() : self::insert();
    }
    
    abstract protected function insert(); 
    abstract protected function update();
}
