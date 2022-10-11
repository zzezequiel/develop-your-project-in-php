<?php
// GET ALL PRODUCTS
    class ClientController{
         use Controller;

        function getAllProducts(){
             $products = $this -> model ->get(); 
   
 
            if(isset($products)){
                $this->view->data = $products;
                $this->view->render("clientView/clientDashboard");      
            }
            
            
        }

        function getProduct($request){
            $products = null;

        if (isset($request["idProduct"])) {
            $products = $this->model->getById($request["idProduct"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $products;
        $this->view->render("products/products");

        }
    }
