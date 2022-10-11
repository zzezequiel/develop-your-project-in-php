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
    
    print_r($loginModel->validate($this->email,$this->password));

    $userLogin= $loginModel ->validate($this->email,$this->password);
    
    if($userLogin)  //che
    //  if ($userLogin["email"] == $this -> email && $userLogin["password"] == $this -> password )
    {
        
        session_start();
        $_SESSION['userSession'] = $this->email;
    
        // header('location:./views\clientView\clientDashboard.php');  
        
        ///call class views instead
        $this->view->render("clientView/clientDashboard");


}else{
//echo "error password";
    header("location:./index.php");
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