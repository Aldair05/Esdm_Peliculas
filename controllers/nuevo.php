<?php 

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }


    function render(){
        $this->view->render('nuevo/index');
    }


    public function registrarPelicula(){
        
        $pelicula_id   = $_POST['pelicula_id'];
        $title         = $_POST['title'];
        $plot          = $_POST['plot'];
        $genres        = $_POST['genres']; 
        $mensaje = "";


        $data = array (
            'pelicula_id' => $pelicula_id,
            'title'       => $title,
            'plot'        => $plot,
            'genres'      => $genres
        );

        if ($this->model->insert($data)) {
            $mensaje = "Nuevo usuario creado";
        }else{
            $mensaje = "La matricula ya existe";
        }

        $this->view->mensaje= $mensaje;
        $this->render();

        // $this->model->insert();
    }
}

?>