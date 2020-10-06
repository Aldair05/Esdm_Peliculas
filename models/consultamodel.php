<?php 

require_once 'models/pelicula.php';

class ConsultaModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function get(){
        
        $items = [];

        try {
            $query = $this->db->connect()->query('SELECT * FROM peliculas');

            while ($row = $query->fetch()) {
                $item = new Pelicula();
                $item->pelicula_id = $row['pelicula_id'];
                $item->title = $row['title'];
                $item->plot    = $row['plot'];
                $item->genres  = $row['genres'];
                array_push($items,$item);
            }

            return $items;

        } catch (PDOException $e) {
            return $items = [];
        }
        
    }


    function getById($pelicula_id){
        $item = new Pelicula();
        
        $query = $this->db->connect()->prepare('SELECT * FROM peliculas WHERE pelicula_id = :pelicula_id');
        try {
            $query->execute(['pelicula_id' => $pelicula_id]);
            while ($row = $query->fetch()) {
                $item->pelicula_id = $row['pelicula_id'];
                $item->title    = $row['title'];
                $item->plot  = $row['plot'];
                $item->genres = $row['genres'];
            }
            return $item;

        } catch (PDOExeption $e) {
            return null; 
        }
    }

    function update($item){

        $query = $this->db->connect()->prepare('UPDATE peliculas SET  title = :title, plot = :plot, genres = :genres WHERE pelicula_id = :pelicula_id');

        try {
            $query->execute([
                'pelicula_id' => $item['pelicula_id'],
                'title'    => $item['title'],
                'plot'  => $item['plot'],
                'genres' => $item['genres']
            ]);
            return true;
        } catch (PDOExeption $e) {
            
            return false;
        }

    }


    function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM peliculas WHERE pelicula_id = :id');
        try{
            $query->execute([
                'id' => $id
            ]);
            return true;
        }catch(PDOExeption $e){
            return false;
        }
    }
}


?>