<?php

class LoginController 
{
    // use Controller;

    // VALIDATE
    public $email;
    public $password;
    public $id;

function __construct()
{
    $this -> email = $_POST["email"];
    $this -> password = $_POST["password"];

    $this->view = new View();
    // $this->model = $this->loadModel(substr(__CLASS__,0,-10));

        $action = "";

        if (isset($_GET["action"])) {
            $action = $_REQUEST["action"];
        }

        if (method_exists(__CLASS__, $action)) {
            call_user_func([__CLASS__, $action], $_REQUEST);
        } else {
            $this->error("Invalid user action");
        }

    }
    
    function validate(){ 
        
        $loginModel =  new LoginModel;
        
 
        $userLogin= $loginModel ->validate($this->email,$this->password);
      
        if($userLogin) {
            if($userLogin['roll']==="admin"){
                //admin dashboard
                session_start();
                $_SESSION['userSession'] = $this->email;
            
                Header("Location: index.php?controller=Admin&action=getAllProducts");  ///call class views instead
            }else {
                //client dashboard
                 session_start();
                $_SESSION['userSession'] = $this->email;
            
             Header("Location: index.php?controller=Client&action=getAllProducts");
            }
        }else{
            
            header("location:?validate=error");
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