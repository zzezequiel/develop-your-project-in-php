<?php

class LoginModel extends Model
{
    
   /* function getAll()
    {
        $query = $this->db->connect()->prepare("SELECT u.user_id
         FROM users u 
        
        ;");

        try {
            $query->execute();
            $users = $query->fetch();
            return $users;
        } catch (PDOException $e) {
            return [];
        }
    }*/
    
    function validate($emailPost, $passwordPost)
    {
        $query = $this->db->connect()->prepare("SELECT u.user_id, u.email, u.password,u.roll , ud.avatar
         FROM users u
         INNER JOIN userdata ud ON ud.idd = u.user_id
         WHERE email ='$emailPost' AND password='$passwordPost';");

        try {
            $query->execute();
            $user=$query->fetch();
            
                return $user;
            
        } catch (PDOException $e) {
            return [];
        }
    }
}