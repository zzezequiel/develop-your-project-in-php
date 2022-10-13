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

<<<<<<< HEAD


        function getProduct($request){
        $products = null;

            if (isset($request["id"])) {
            $products = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $products;
        $this->view->render("products/products");

        }
=======
    function getProduct($request)
    {
       // $product = null;
        if (isset($request["id"])) {
            $product = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $product;
        $this->view->render("adminView/updateProduct");
    }

    function createProduct($request)
    {
        if (sizeof($_POST) > 0) {
            $product = $this->model->create($_POST);

            if ($product[0]) {
                Header("Location: index.php?controller=Admin&action=getAllProducts");  ///call class views instead

            } else {
                echo $product[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("adminView/addProduct");
        }
    }

    function update($request)
    {
        if (sizeof($_POST) > 0) {
            $product = $this->model->update($_POST);
            if ($product[0]) {

                Header("Location: index.php?controller=Admin&action=getAllProducts"); 

            } else {
               // $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                //$this->view->render("adminView/updateProduct");
                $this->view->render("adminView/adminDashboard");


            }
        } else {
            $this->view->render("adminView/adminDashboard");
        }
    }

    function deleteProduct($request)
    {
        $action = $request["action"];
        $product = null;
        if (isset($request["id"])) {
            $product = $this->model->delete($request["id"]);
            Header("Location: index.php?controller=Admin&action=getAllProducts"); 
        }
    }
>>>>>>> e93d4cd7b1dc0067436a22c46cc1ed723d952461
    }