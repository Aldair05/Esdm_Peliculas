<?php 

class ErrorMessage extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error Generico";
        $this->view->render('errorMessage/index');
        // echo "<p>Error Al cargar </p>";
    }
    
}


?>