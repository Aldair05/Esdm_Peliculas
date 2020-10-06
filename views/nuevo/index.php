<?php require 'views/header.php' ?>

<div class="contenedor-seccion">
        <div id="main">
            <h1 class="center">REGISTRAR NUEVA PELICULA</h1>
            <div class="center"><?php echo $this->mensaje; ?></div>
            
            <div class="container ">
                <div class="row justify-content-center">
                    <form class="center" action="<?php echo constant('URL');?>nuevo/registrarPelicula" method="post">
                        <div class="col-md-12 form-group">
                            <label for="pelicula_id">IDPelicula:</label>
                            <input type="text" class="form-control" name="pelicula_id" placeholder="IDPelicula" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="title">Nombre:</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Nombre" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="plot">Descripcion:</label>
                            <input type="text" class="form-control" name="plot" id="plot" placeholder="Descripcion" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="genres">Genero:</label>
                            <input type="text" class="form-control" name="genres" id="genres" placeholder="Genero" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn-registrar" value="Registrar">
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
</div>


<?php require 'views/footer.php'?>