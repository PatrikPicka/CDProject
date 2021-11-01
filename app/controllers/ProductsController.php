<?php

class ProductsController extends Controller
{

    private $_products, $_request;

    public function __construct()
    {
        $this->_products = new Products();
        $this->_request = new Input();
    }

    public function productsAction($id = null)
    {
        if ($id === null) {
            $data = $this->_products->getAll();
            return $this->jsonResponse($data, 200);
        } elseif (isset($id)) {
            $data = $this->_products->getOneById($id);
            return $this->jsonResponse($data, 200);
        }
    }
}
