<?php

class ProductModel extends Model
{
    
    function getAll()
    {
        $query = $this->db->connect()->prepare("SELECT * FROM products 
        ;");

        try {
            $query->execute();
            $productsInfo = $query->fetchAll();
            return $productsInfo;
        } catch (PDOException $e) {
            return [];
        }
    }
}