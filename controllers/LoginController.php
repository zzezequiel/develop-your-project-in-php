<?php

class LoginController 
{
     use Controller;

    // VALIDATE
    public $email;
    public $password;
   // public $id;

    function validate(){ 
        $this -> email = $_POST["email"];
    $this -> password = $_POST["password"];
        
     //   $loginModel =  new LoginModel;
        
       // print_r($loginModel->validate($this->email,$this->password));
 
        $userLogin= $this->loginModel ->validate($this->email,$this->password);
      
        if($userLogin) 
       {
            session_start();
            $_SESSION['userSession'] = $this->email;
           // echo $_SESSION['userSession'];
        //   $this->view->render("clientView/clientDashboard");

          // location index cotroller =client action getAll();
   
       }else{
        //echo "error password"; 
         header("Location:index.php");
        } 
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