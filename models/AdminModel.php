<?php

    class AdminModel extends Model{

        function get(){
            $query = $this->db->connect()->prepare("SELECT * FROM products
            /* p.`id-product`, p.title, ui.`first-name`, p.location, p.description, p.`pre-builtd`, p.size, p.price 
            FROM products p  */
           /*  INNER JOIN `users-info` ui ON p.`id-product` = ui.`id-product`
            ORDER BY p.`id-product` ASC */;");

            try {
                $query->execute();
                $products = $query->fetchAll();
                return $products;
            } catch (PDOException $e) {
                return [];
            }
        }
    
        function getById($id){
            $query = $this->db->connect()->prepare("SELECT p.id, p.title, p.location, p.description,  p.pre_build, p.size, p.price 
            FROM products p
            WHERE id = $id;");
        
            try {
                $query->execute();
                $id = $query->fetch();
                return $id;
            } catch (PDOException $e) {
                return [];
            }
        }

        function update($product)
        {
            $id = $product["id"];
            $title = $product["title"];
            $description = $product["description"];
            $location = $product["location"];
            $pre_build = $product["pre_build"];
            $size =  $product["size"];
            $price = $product["price"];

            $query = $this->db->connect()->prepare(" UPDATE products
            SET title = '$title', description = '$description', location = '$location', pre_build = '$pre_build', size = '$size', price = '$price'
            WHERE id = '$id' ;");
    
            
            
    
            try {
                $query->execute();
                return [true];
            } catch (PDOException $e) {
                return [false, $e];
            }
        }
    }
    
