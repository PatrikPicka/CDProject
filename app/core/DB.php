<?php

class DB
{
    private static $_instance = null;
    private $_pdo, $_query, $_error = false, $_results, $_count = 0;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "; charset=utf8", DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function query($sql, $params = [])
    {
        $this->_error =  false;
        if ($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this;
    }

    public function action($action, $table, $where = [])
    {
        if (count($where) === 3) {
            $operators = ["=", ">", "<", ">=", "<="];

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if (in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if (!$this->query($sql, [$value])->error()) {
                    return $this;
                }
            }
        } elseif (count($where) === 0) {
            $sql = "{$action} FROM {$table}";
            if (!$this->query($sql)->error()) {
                return $this->_results;
            }
        }
        return false;
    }

    public function get($table, $where = [])
    {
        if (count($where) === 0) {
            return $this->action("SELECT *", $table);
        } else {
            return $this->action("SELECT *", $table, $where);
        }
    }

    public function results()
    {
        return $this->_results;
    }


    public function error()
    {
        return $this->_error;
    }

    public function count()
    {
        return $this->_count;
    }
    public function first()
    {
        /*$results = $this->results();
    return $results[0];*/
        return $this->results()[0];
    }
}
