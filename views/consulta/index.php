<?php require 'views/header.php' ?>
<div class="contenedor-seccion">
    <div id="main">
        <h1 class="center"><?php echo $this->mensaje; ?></h1>
        <div id= "respuesta" class="center"></div>
        
        <div class="container contenedor-tabla">
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>IDPelicula</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Genero</th>
                    </tr>
                </thead>
                <tbody class="center " id="tbody-usuarios">              
                    <?php
                    
                    foreach ($this->peliculas as $pelicula ) {
                        // var_dump($this->peliculas);
                    ?>
                    <tr id="fila-<?php echo $pelicula->pelicula_id ?>">
                        <td><?php echo $pelicula->pelicula_id ?></td>
                        <td><?php echo $pelicula->title ?></td>
                        <td><?php echo $pelicula->plot ?></td>
                        <td><?php echo $pelicula->genres ?></td>
                        <td><a href="<?php echo constant('URL'). 'consulta/verPelicula/' . $pelicula->pelicula_id ?>">Actualizar</a></td>
                       
                        <td><button class="bEliminar btn btn-danger" data-pelicula_id= "<?php echo $pelicula->pelicula_id        ?>">Eliminar</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div><!--.contenedor-seccion -->
<?php require 'views/footer.php' ?>


