<?php

class LoginModel extends Model
{
    
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT * FROM `user-login`
        ;");

        try {
            $query->execute();
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return [];
        }
    }
}