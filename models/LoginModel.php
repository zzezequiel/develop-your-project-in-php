<?php

class LoginModel extends Model
{
    
    function getAll()
    {
        $query = $this->db->connect()->prepare("SELECT * FROM `users`
        ;");

        try {
            $query->execute();
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return [];
        }
    }
    
    function validate($emailPost, $passwordPost)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM `users` e
         WHERE email ='$emailPost' AND password='$passwordPost';");

        try {
            $query->execute();
            $user=$query->fetch();
            if($user!=null){
                return true;
            }
            return false;
           //  return $user;  //array
            
          
            
        } catch (PDOException $e) {
            return [];
        }
    }
}