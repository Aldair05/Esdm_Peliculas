<?php 

    class Main extends Controller{

        function __construct(){
            parent::__construct();
            // echo "<p>Nuevo controlador Main</p>";
        }

        function render(){
            $this->view->render('main/index');
        }


        public function saludo(){
            echo "<p>Saludo desde el metodo</p>";
        }
    }


?>