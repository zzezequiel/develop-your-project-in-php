<?php
// GET ALL PRODUCTS
    class ClientController{
         use Controller;


        function getAllProducts(){
            
         if(!isset($_SESSION['clientSession'])) {
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

        if (isset($request["id"])) {

            if( $_SESSION['clientSession'] =="Guest"){
     
                header("Location: index.php?controller=Login&action=logOut");
                    
            }
            else{
            $products = $this->model->getById($request["id"]);
            }
        }
        
        $this->view->action = $request["action"];
        $this->view->data = $products;
        $this->view->render("clientView/product");

        }

        function getUserdata($request){
            $userdata = null;

        if (isset($_SESSION['user'])) {
            $request =  $_SESSION['user'];
            
            $userdata = $this->model->getUserById($request);
     
                    
            }
            else {
                header("Location: index.php?controller=Login&action=logOut");

            }
        
        
        $this->view->action = $request["action"];
        $this->view->data = $userdata;
        $this->view->render("clientView/profile");

    }

    
    }