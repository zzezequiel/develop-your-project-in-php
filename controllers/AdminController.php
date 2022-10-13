<?php
// GET AND CRUD


    class AdminController{
        use Controller;

        function getAllProducts(){
            $products = $this -> model ->get(); 


            if(isset($products)){
                $this->view->data = $products;
                $this->view->render("adminView/adminDashboard");      
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