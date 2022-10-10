<?php

class LoginModel extends Model
{
    
    function get()
    {





         $query = $this->db->connect()->prepare("SELECT * FROM products;");

        try {
            $query->execute();
           $users = $query->fetchAll();
             return $users;
         } catch (PDOException $e) {
             return [];
        }
    }
}