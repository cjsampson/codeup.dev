<?php

require_once 'Model.php';



class User extends Model 
{
	protected $table = 'users';

	protected function insert() 
	{		
		// unset($this->attributes['id']);
		foreach($this->attributes as $key => $value) {
			$stmt->bindValue(':key', $value, PDO::PARAM_STR)
		}
		$stmt->execute();
	}

	protected static function find($id)
    {
        self::dbConnect();
        $stmt = self::$dbc->prepare("SELECT * FROM :table WHERE id = :id");
        $stmt->bindValue(':table', self::$table, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $result = $stmt->fetch();
        $stmt->execute();
    }

	protected function update($id) 
	{
		parent::dbConnect();
		// foreach($attributes as $name => $attribute) {
		// 	$stmt = parent::$dbc->prepare("UPDATE  SET $attribute WHERE id = :id");
		// }
	}
}