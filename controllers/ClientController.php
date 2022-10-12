<?php
// GET ALL PRODUCTS
    class ClientController{
         use Controller;


        function getAllProducts(){
            
         if(!isset($_SESSION['userSession'])) {
            header("Location: index.php?");
         }   // header("Location:?controller=Client&action=getAllProducts");
           
         
             $products = $this -> model ->get(); 
   
 
            if(isset($products)){
                $this->view->data = $products;
                $this->view->render("clientView/clientDashboard");      
            }
            
            
        }

        function getProduct($request){
            $products = null;

        if (isset($request["id-product"])) {
            $products = $this->model->getById($request["id-product"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $products;
        $this->view->render("products/products");

        }
    }
