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


<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c149a858c65b250f7446a4eea0fbcd9dc0a075ba
        function update($product)
        {
            $query = $this->db->connect()->prepare("UPDATE products
            SET title = ?, description = ?, location = ?, `pre_build` = ?, size = ?, price = ?
            WHERE id = ?;");
<<<<<<< HEAD
=======
        function update($product)
        {
            $query = $this->db->connect()->prepare("UPDATE products
            SET title = ?, description = ?, location = ?, prebuild = ?, size = ?, price = ?
            WHERE idproduct = ?;");
>>>>>>> devBala
=======
>>>>>>> c149a858c65b250f7446a4eea0fbcd9dc0a075ba
    
            $query->bindParam(1, $product["title"]);
            $query->bindParam(2, $product["description"]);
            $query->bindParam(3, $product["location"]);
<<<<<<< HEAD
<<<<<<< HEAD
            $query->bindParam(4, $product["pre_build"]);
=======
            $query->bindParam(4, $product["prebuild"]);
>>>>>>> devBala
=======
            $query->bindParam(4, $product["pre_build"]);
>>>>>>> c149a858c65b250f7446a4eea0fbcd9dc0a075ba
            $query->bindParam(5, $product["size"]);
            $query->bindParam(6, $product["price"]);
            
    
            try {
                $query->execute();
                return [true];
            } catch (PDOException $e) {
                return [false, $e];
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e93d4cd7b1dc0067436a22c46cc1ed723d952461
=======


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
>>>>>>> devBala
=======
>>>>>>> c149a858c65b250f7446a4eea0fbcd9dc0a075ba
    }
    
