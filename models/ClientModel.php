<?php


class ClientModel extends Model{

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
    $query = $this->db->connect()->prepare("SELECT p.title, p.location, p.description, p.pre_build, p.size, p.price, p.img, p.id, ud.first_name , ud.last_name 
    FROM products p
    inner JOIN userdata ud ON p.id_user = ud.idd
    WHERE p.id = $id;");

   
        try {
        $query->execute();
        $id = $query->fetch();
        
        return $id;
    } catch (PDOException $e) {
        return [];
    }
}
}


?>