<?php 

class NuevoModel  extends Model{

    public function __construct(){
        parent::__construct();
    }


    public function insert($data){
        //insertar datos a la bases de datos
        
        try {
            $sql = $this->db->connect()->prepare('INSERT INTO peliculas(pelicula_id,title,plot,genres) VALUES(:pelicula_id,:title,:plot,:genres)');
            $sql->execute(['pelicula_id'=>$data['pelicula_id'],'title'=>$data['title'],'plot'=> $data['plot'], 'genres'=>$data['genres']]);
            return true;
        } catch (PDOException $e) {
            // echo "Ya existe Ese Registro";
            return false;
        }
        
        // echo "Insertando datos";
    }
}

?>