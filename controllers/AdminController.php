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

            if (isset($request["id"])) {
            $products = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $products;
        $this->view->render("adminView/updateProduct");
        
        }


        function update($request)
    {
        if (sizeof($_POST) > 0) {
            $products = $this->model->update($_POST);

            if ($products[0]) {
                header("Location: index.php?controller=Admin&action=getAllProducts");
            } else {
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
                $this->view->render("adminView/updateProduct");
            }
        } else {
            $this->view->render("adminView/adminDashboard");
        }
    }

function create($request){
    if (sizeof($_POST) > 0) {
        $products = $this->model->create($_POST);

        if ($products[0]) {
            header("Location: index.php?controller=Admin&action=getAllProducts");
        } else {
            echo $products[1];
        }
    } else {
        $this->view->action = $request["action"];
        $this->view->render("adminView/addProduct");
    }
}
    }