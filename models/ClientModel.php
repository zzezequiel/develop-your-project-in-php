<?php


class ClientModel extends Model{

function get(){
    $query = $this->db->connect()->prepare("SELECT p.title, ud.first_name as 'name', ud.last_name as 'lastName', p.location, p.description, p.pre_build, p.size, p.price, p.img
    FROM products p
    LEFT JOIN userdata ud ON p.id_user = ud.id
    ORDER BY p.id;");

    try {
        $query->execute();
        $products = $query->fetchAll();
        return $products;
    } catch (PDOException $e) {
        return [];
    }
}

 function getByIdProduct($id){
    $query = $this->db->connect()->prepare("SELECT p.title, ud.first_name as 'name', ud.last_name as 'lastName', p.location, p.description, p.pre_build, p.size, p.price, p.img
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
}


?>