<?php

class Products
{

    private $_db, $_data;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }


    public function getAll()
    {
        $data = $this->_db->get("products");

        if ($data != []) {
            $this->_data = $data;
            return $this->_data;
        }
    }

    public function getOneById($id)
    {
        $data = $this->_db->get("products", ["id", "=", $id]);

        if ($data->count()) {
            $this->_data = $data->first();
            return $this->_data;
        }
        return $data;
    }
}
