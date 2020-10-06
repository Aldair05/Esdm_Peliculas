<?php require 'views/header.php' ?>

<div class="contenedor-seccion">
    <div id="main">
        <h1 class="center">Editar Pelicula</h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form class="center" action="<?php echo constant('URL');?>consulta/actualizarPelicula" method="post">
            <p>
                <label for="pelicula_id">IDPelicula</label><br>
                <input type="text" name="pelicula_id" disabled value="<?php echo $this->pelicula->pelicula_id ?>" required>
            </p>
            <p>
                <label for="title">Nombre</label><br>
                <input type="text" name="title" value="<?php echo $this->pelicula->title ?>" required>
            </p>
            <p>
                <label for="plot">Descripcion:</label><br>
                <input type="text" name="plot" value="<?php echo $this->pelicula->plot ?>" required>
            </p>
            <p>
                <label for="genres">Genero:</label><br>
                <input type="text" name="genres" value="<?php echo $this->pelicula->genres ?>" required>
            </p>
            <p>
                <input type="submit" value="Registrar">
            </p>
        </form>
    </div>
</div>
<?php require 'views/footer.php'?>