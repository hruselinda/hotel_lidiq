<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 06-Dec-17
 * Time: 10:55 PM
 */

namespace Model;

use PDO;
use PDOException;

class Base
{
    private $id;

    public function create()
    {
        $objectVars = get_object_vars($this);
        $tableColumns = "";
        $rowValues = "";

        foreach ($objectVars as $key => $value) {
            $tableColumns = $tableColumns . "`$key`,";
            if($value === NULL){
                $rowValues = $rowValues . "NULL,";
            } else {
                $rowValues = $rowValues . "'$value',";
            }
        }
        $tableColumns = trim($tableColumns,",");
        $rowValues = trim($rowValues,",");
        $tableName = $this->getTableName();

        $sql = "INSERT INTO `$tableName` ($tableColumns) VALUES ($rowValues);";

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("$sql");
        $stmt->execute();
    }

    public function read($id)
    {
    /**
     * SELECT * FROM hotel_lidiq.gallery WHERE id=4;
     */
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM $tableName WHERE id=$id;";

        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("$sql");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result[0];

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }


    private function getPDO()
    {
        $db_host = 'localhost';
        $db_name = 'hotel_lidiq';
        $db_user = 'root';
        $db_pass = '';

        try {
            $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            //echo "Connection failed: " . $e->getMessage();
        }
    }

    private function getTableName()
    {
        $className = get_class($this);
        $pos = strrpos($className,"\\");
        $cut = substr($className,($pos+1));
        $tableName = strtolower($cut);
        return $tableName;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}

