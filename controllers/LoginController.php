<?php

class LoginController 
{
    use Controller;

    // VALIDATE
    public $email;
    public $password;
    public $id_user;
   
    function logOut()
    {   //session_start();
        session_unset();
        session_destroy();
        require_once VIEWS . "loginView/login.php";

    }
    
    function validate(){ 

        
        
    $this -> email = $_POST["email"];
    $this -> password = $_POST["password"];
    
        
       $loginModel =  new LoginModel;
        
        $userLogin= $loginModel ->validate($this->email,$this->password);
        $userdata= $loginModel ->getAll($this->id_user);
      
        if($userLogin) {
            if($userLogin['roll']==="admin"){
                //admin dashboard
                session_start();
                $_SESSION['userSession'] = $this->email;
                $_SESSION['adminSession'] = $this->email;
            
                header("Location: index.php?controller=Admin&action=getAllProducts");  ///call class views instead
            }else {
                //client dashboard
                 session_start();
                 $_SESSION['userSession'] = $this->email;
                 $_SESSION['user'] = $userLogin['id_user'];
                $_SESSION['clientSession'] = $this->email;
            
             header("Location: index.php?controller=Client&action=getAllProducts");
            }
            
        }else{
            
            header("location:?validate=error");
            } 
        }

       function guest(){
        $guest = "Guest";

            session_start();
            $_SESSION['userSession'] = $guest;
            $_SESSION['clientSession'] = $guest;
            header("Location: index.php?controller=Client&action=getAllProducts");

       }
    }










    // redirect users to a controller
    
    // iniciar la sesion y la conexion a bd
    // Recoger datos del formulario -- meterle un trim($_POST['email']) para que no guarde espacios
    // consulta para comprobar credenciales del usuario
    // Comprobar la contraseña / cfrar
    // Urilizar una sesion para guardar los datos del usuario logueado
    // Si algo falla enviar una sesion con el fallo
    // Rediriguir a x.php