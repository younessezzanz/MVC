<?php
namespace PHPMVC\Models;
use PHPMVC\Lib\Database\DatabaseHandler;

class AbstractModel
{
    const DATA_TYPE_BOOL = \PDO::PARAM_BOOL;
    const DATA_TYPE_STR  = \PDO::PARAM_STR;
    const DATA_TYPE_INT = \PDO::PARAM_INT;
    const DATA_TYPE_DECIMAL = 4;
    const DATA_TYPE_DATE = 4;
    const DATA_TYPE_EMAIL = 6;

    // VALID DATE RANGE IS 100-01-01 TO 9999-12-31
    const VALIDATE_DATE_STRING = '/^[1-9][1-9][1-9][1-9]-[0-1]?[0-2]-(?:[0-2]?[1-9]|[3][0-1])$/';

    // TODO:: Check the valid dates in MYSQL to create a proper pattern
    const VALIDATE_DATE_NUMERIC = '^\d{6,8}$' ;
    const DEFAULT_MYSQL_DATE = '1970-01-01';

    private static $db;

    // prepare values
    private function prepareValues(\PDOStatement &$stmt)
    {
        foreach(static::$tableSchema as $columnName => $type){

            if( $type == 4 ){
                $sanitizedValue  = filter_var($this->$columnName, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $stmt->bindValue(":{$columnName}", $sanitizedValue);
            }elseif( $type == 6 ){
                $sanitizedValue  = filter_var($this->$columnName, FILTER_SANITIZE_EMAIL);
                $stmt->bindValue(":{$columnName}", $sanitizedValue);
            }else {
                $stmt->bindValue(":{$columnName}", $this->$columnName, $type);
            }   
        }
        
        return $stmt;
    }

    // view table schema
    public function viewTableSchema()
    {
        return static::$tableSchema;
    }

    // build name parameter sql
    public static function buildNameParametersSQL()
    {
        $namedParams = '';
        foreach(static::$tableSchema as $columnName => $type){
            $namedParams .= $columnName .' = :'. $columnName .', ';
        }
        return rtrim($namedParams,', ');
    }

    // inserting row in table
    public function create()
    {  
        //$this->setEmployeeNumber(rand(2000, 3000));
        
        $sql = 'INSERT INTO ' . static::$tableName . ' SET ';
        $sql .= $this->buildNameParametersSQL();

        $stmt = DatabaseHandler::factory()->prepare($sql);
        $this->prepareValues($stmt);
 
        if($stmt->execute()){
            $this->{static::$primaryKey} = DatabaseHandler::factory()->lastInsertId();
            return true;
        }
        return false;
    }

    // updating row in table
    private function update()
    {
        $sql = 'UPDATE ' . static::$tableName . ' SET ';
        $sql .= $this->buildNameParametersSQL();
        $sql .= ' WHERE ' . static::$primaryKey . ' = ' . $this->{static::$primaryKey};

        $stmt = DatabaseHandler::factory()->prepare($sql);
        $this->prepareValues($stmt);

        return $stmt->execute();
    }

    //check is update or delete and save
    public function save()
    {   
        return ($this->{static::$primaryKey} === Null) ? $this->create() : $this->update();
    }

    // deleting row in table
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$tableName;
        $sql .= ' WHERE ' . static::$primaryKey . ' = ' . $this->{static::$primaryKey};

        $stmt = DatabaseHandler::factory()->prepare($sql);
        return $stmt->execute();
    }

    // get all data in table
    public static function getAll()
    {
        $sql = 'SELECT * FROM ' . static::$tableName;
        
        $stmt = Databasehandler::factory()->prepare($sql);

        if($stmt->execute() === true){
            if(method_exists(get_called_class(), '__construct')){
                $results = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE , get_called_class(), array_keys(static::$tableSchema));
            }else{
                $results = $stmt->fetchAll(\PDO::FETCH_CLASS , get_called_class());
            }
        }

        if((is_array($results) && !empty($results))) {
            $generator = function () use ($results) {
                foreach($results as $result){
                    yield $result;
                }
            };
            return $generator();
        };

        return false;
    }

    // get data in table by key
    public static function getByPK($pk)
    {
        $sql = 'SELECT * FROM ' . static::$tableName . ' WHERE '. static::$primaryKey . ' = "' . $pk . '"';

        $stmt = DatabaseHandler::factory()->prepare($sql);

        if($stmt->execute() === true){
            if(method_exists(get_called_class(), '__construct')){
                $obj = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE , get_called_class(), array_keys(static::$tableSchema));
            }else{
                $obj = $stmt->fetchAll(\PDO::FETCH_CLASS , get_called_class());
            }
            return !empty($obj) ? array_shift($obj) : false;
        } 
        
        return false;
    }

    // get by parameter sql
    public static function getBy($columns, $options = array())
    {
        $whereClauseColumns = array_keys($columns);
        $whereClauseValues = array_values($columns);
        $whereClause = [];
        for ( $i = 0, $ii = count($whereClauseColumns); $i < $ii; $i++ ) {
            $whereClause[] = $whereClauseColumns[$i] . ' = "' . $whereClauseValues[$i] . '"';
        }
        $whereClause = implode(' AND ', $whereClause);
        $sql = 'SELECT * FROM ' . static::$tableName . '  WHERE ' . $whereClause;
        return static::get($sql, $options);
    }

    // get query sql
    public static function get($sql, $options = array())
    {
        $stmt = DatabaseHandler::factory()->prepare($sql);

        if(!empty($options)){
            foreach($options as $columnName => $type){

                if( $type[0] == 4 ){
                    $sanitizedValue  = filter_var($type[1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                    $stmt->bindValue(":{$columnName}", $sanitizedValue);
                }else if( $type[0] == 5 ){
                    if(!preg_match(self::VALIDATE_DATE_STRING, $type[1]) || !preg_match(self::VALIDATE_DATE_NUMERIC, $type[1])){
                        $stmt->bindValue(":{$columnName}", self::DEFAULT_MYSQL_DATE);
                        continue;
                    }
                    $stmt->bindValue(":{$columnName}", $type[1]);
                }elseif( $type[0] == 6 ){
                    $sanitizedValue  = filter_var($type[1], FILTER_SANITIZE_EMAIL);
                    $stmt->bindValue(":{$columnName}", $sanitizedValue);
                }else {
                    $stmt->bindValue(":{$columnName}", $type[1], $type[0]);
                }   
            }
        }

        $stmt->execute();
        
        if(method_exists(get_called_class(), '__construct')){
            $results = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE , get_called_class(), array_keys(static::$tableSchema));
        }else{
            $results = $stmt->fetchAll(\PDO::FETCH_CLASS , get_called_class());
        }

        if((is_array($results) && !empty($results))) {
            $generator = function () use ($results) {
                foreach($results as $result){
                    yield $result;
                }
            };
            return $generator();
        };
        
        return false;
    }

    public static function getOne($sql, $options = array())
    {
        $result = static::get($sql, $options);
        return $result === false ? false : $result->current();
    }
    
    public static function getModelTableName()
    {
        return static::$tableName;
    }

}