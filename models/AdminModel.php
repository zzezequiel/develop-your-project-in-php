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
            $query = $this->db->connect()->prepare("SELECT p.id, p.title, p.location, p.description,  p.pre_build, p.size, p.price, p.img 
            FROM products p
            WHERE id-products = $idProduct;");
        
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
            $id = $product["id"];
            $title = $product["title"];
            $description = $product["description"];
            $location = $product["location"];
            $pre_build = $product["pre_build"];
            $size =  $product["size"];
            $price = $product["price"];
            $img = $product["img"];

            $query = $this->db->connect()->prepare(" UPDATE products
            SET title = '$title', description = '$description', location = '$location', pre_build = '$pre_build', size = '$size', price = '$price', img = '$img'
            WHERE id = '$id' ;");
    
            
            
    
            try {
                $query->execute();
                return [true];
            } catch (PDOException $e) {
                return [false, $e];
            }
        }


        function create($products)
    {
        $query = $this->db->connect()->prepare("INSERT INTO products (id_user, title, description, location, pre_build, size, price, img)
        VALUES
        (?, ?, ?, ?, ?, ?, ?, ?,);");

        $query->bindParam(1, $products["id_user"]);
        $query->bindParam(2, $products["title"]);
        $query->bindParam(3, $products["description"]);
        $query->bindParam(4, $products["location"]);
        $query->bindParam(5, $products["pre_build"]);
        $query->bindParam(6, $products["size"]);
        $query->bindParam(7, $products["price"]);
        $query->bindParam(8, $products["img"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    }
    
