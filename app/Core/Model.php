<?php

class Model
{
    private $db;
    protected $sql = '';
    protected $params = [];

    public function __construct()
    {   
        try
        {
            $this->db = new PDO(DB . ':host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USERNAME, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo 'ERROR', $e->getMessage();
        }
    }

    public function queryBool()
    {
        try
        {
            $stmt = $this->db->prepare($this->sql);
            $results = $stmt->execute($this->params);
            return $results;
        }
        catch(PDOException $e)
        {
            echo 'ERROR', $e->getMessage();
        }
    }


    public function query()
    {
        try
        {
            $stmt = $this->db->prepare($this->sql);
            $this->myDb = $this->db;
            $result = $stmt->execute($this->params);
            $this->stmt = $stmt;
            return $result;
        }
        catch(PDOException $e)
        {
            echo 'ERROR', $e->getMessage();
        }
    }
}
