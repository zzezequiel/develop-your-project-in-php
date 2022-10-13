<?php

    class ClientModel extends Model{

        function get(){
            $query = $this->db->connect()->prepare("SELECT p.title, ud.`first-name` as 'name', ud.`last-name` as 'lastName', p.location, p.description, p.`pre-build`, p.size, p.price, p.img
            FROM products p
            LEFT JOIN userdata ud ON p.`id-user` = ud.id
            ORDER BY p.id;");

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
    
