<?php
// redirect users to a controller

// iniciar la sesion y la conexion a bd
// Recoger datos del formulario -- meterle un trim($_POST['email']) para que no guarde espacios
// consulta para comprobar credenciales del usuario
// Comprobar la contraseña / cfrar
// Urilizar una sesion para guardar los datos del usuario logueado
// Si algo falla enviar una sesion con el fallo
// Rediriguir a x.php

class LoginController 
{
    //use Controller;

    // VALIDATE
   public $email;
   public $password;

function __construct($email, $password){
    $this -> email = $email;
    $this -> password = $password;
}

    function validate(){ 
        header('location:../views\clientView\clientDashboard.php');
        
    }

}
/*
$user = new LoginController($_POST['email'], $_POST['password']);;
$user -> validate();*/