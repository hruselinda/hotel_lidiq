<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 06-Dec-17
 * Time: 10:55 PM
 */

namespace Model;


class BaseModel
{
    public function saveToDB()
    {
        $objectVars = get_object_vars($this);
        unset($objectVars["id"]);

        $calledClass = explode("\\", get_called_class());
        $tableName = strtolower(str_replace("Model", "", $calledClass[count($calledClass)-1]));
        $leftSql = implode(",", array_keys($objectVars));
        $rightSql = '"'. implode('","', $objectVars) .'"';

        p($tableName);
        p($leftSql);
        p($rightSql);

        $sql = "INSERT INTO `$tableName` ($leftSql) VALUES ($rightSql);";
        pe($sql);
    }
}