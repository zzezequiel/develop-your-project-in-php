<?php
//comm
    class AdminModel extends Model{

        function get(){
            $query = $this->db->connect()->prepare("SELECT p.id, p.title, ud.first_name as 'name', ud.last_name as 'lastName', p.location, p.description, p.pre_build, p.size, p.price, p.img
    FROM products p
    LEFT JOIN userdata ud ON p.id_user = ud.idd
    ORDER BY p.id;");

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
            (?, ?, ?, ?, ?, ?, ?, ?);");


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
    