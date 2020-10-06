<?php 

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje ="LISTA DE PELICULAS";
        $this->view->peliculas = [];
        
    }

    function render(){
        $peliculas  = $this->model->get();
        $this->view->peliculas = $peliculas;
        $this->view->render('consulta/index');
    }

    function verPelicula($param = null ){
        $pelicula_id = $param[0];
        $pelicula = $this->model->getById($pelicula_id);

        session_start();
        $_SESSION['id_verPelicula'] = $pelicula->pelicula_id;
        $this->view->pelicula = $pelicula;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarPelicula(){
        session_start();
        $pelicula_id = $_SESSION['id_verPelicula'];
        $title    = $_POST['title'];
        $plot  = $_POST['plot'];
        $genres = $_POST['genres'];

        unset($_SESSION['id_verPelicula']);
        if ($this->model->update(['pelicula_id'=>$pelicula_id,'title'=>$title,'plot'=>$plot, 'genres'=>$genres])) {
            $pelicula = new Pelicula();
            $pelicula->pelicula_id = $pelicula_id;
            $pelicula->title    = $title;
            $pelicula->plot  = $plot;
            $pelicula->genres   = $genres;
            $this->view->pelicula = $pelicula;
            $this->view->mensaje = "La pelicula se actualizo correctamente";
        }else{
            $this->view->mensaje = "La pelicula no se actualizo";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarPelicula($param = null){
        $pelicula_id = $param[0];
        if ($this->model->delete($pelicula_id)) {
            $mensaje = "Pelicula eliminada correctamente";
            
        }else{
            $mensaje = "la pelicula no se pudo eliminar";
        }

        //$this->render();
         echo $mensaje;
       
    }
}


?>