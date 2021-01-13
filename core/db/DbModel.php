<?php

namespace angelokezimana\elephpant\db;

use angelokezimana\elephpant\Model;
use angelokezimana\elephpant\Application;

/**
 * Class DbModel
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\db
 */
abstract class DbModel extends Model
{
    abstract public function tableName(): string;
    abstract public function attributes(): array;
    abstract public function primaryKey(): string;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn ($attr) => ":$attr", $attributes);

        $statement = self::prepare("INSERT INTO {$tableName} (" . implode(',', $attributes) . ") 
                                    VALUES (" . implode(',', $params) . ")");

        foreach ($attributes as $attribute) {
            $statement->bindValue(":{$attribute}", $this->{$attribute});
        }

        $statement->execute();

        return true;
    }

    public function findOne($where)
    {
        $tableName = $this->tableName();
        $attributes = array_keys($where);
        $sql = implode('AND ', array_map(fn ($attribute) => "$attribute = :$attribute", $attributes));
        $statement = self::prepare("SELECT * FROM {$tableName} WHERE {$sql}");

        foreach($where as $key=>$item){
            $statement->bindValue(":{$key}", $item);
        }

        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}
