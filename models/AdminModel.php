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
    
        function getById($idProduct){
            $query = $this->db->connect()->prepare("SELECT p.idproduct, p.title, p.location, p.description, p.prebuild, p.size, p.price 
            FROM products p
            WHERE idproduct = $idProduct;");
        
            try {
                $query->execute();
                $idProduct = $query->fetch();
                return $idProduct;
            } catch (PDOException $e) {
                return [];
            }
        }

        function delete($id){
            $query = $this->db->connect()->prepare("DELETE FROM products WHERE id = ?");
            $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];

        } catch (PDOException $e) {
            return [false, $e];
        }
    }


        function update($product)
        {
            $query = $this->db->connect()->prepare("UPDATE products
            SET title = ?, description = ?, location = ?, prebuild = ?, size = ?, price = ?
            WHERE idproduct = ?;");
    
            $query->bindParam(1, $product["title"]);
            $query->bindParam(2, $product["description"]);
            $query->bindParam(3, $product["location"]);
            $query->bindParam(4, $product["prebuild"]);
            $query->bindParam(5, $product["size"]);
            $query->bindParam(6, $product["price"]);
            
    
            try {
                $query->execute();
                return [true];
            } catch (PDOException $e) {
                return [false, $e];
            }
        }
    }
    
