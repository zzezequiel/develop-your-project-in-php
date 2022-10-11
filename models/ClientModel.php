<?php

    class ClientModel extends Model{

        function get(){
            $query = $this->db->connect()->prepare("SELECT p.`id-product`, p.title, ud.`first-name` as 'proName', ud.`last-name` as 'proLName', p.location, p.description, p.`pre-build`, p.size, p.price, p.img
            FROM products p
            LEFT JOIN usersdata ud ON p.`id-product` = ud.`id-product`
            ORDER BY p.`id-product`;");

            try {
                $query->execute();
                $products = $query->fetchAll();
                return $products;
            } catch (PDOException $e) {
                return [];
            }
        }
    
      /*   function getByIdProduct($idProduct){
            $query = $this->db->connect()->prepare("SELECT p.`id-product`, p.title, p.location, p.description, p.`pre-build`, p.size, p.price 
            FROM products p
            WHERE id-products = $idProduct;");
        
            try {
                $query->execute();
                $idProduct = $query->fetch();
                return $idProduct;
            } catch (PDOException $e) {
                return [];
            }
        } */
    }
    
