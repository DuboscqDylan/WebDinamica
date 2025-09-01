<?php include_once(__DIR__ . "/../../ESTRUCTURA/header.php"); 

$pelicula = $pelicula ?? $_POST;
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<div class="container mt-5">
    <div class="alert alert-success">
        <h2>La película introducida es</h2>
        <p><strong>Titulo: </strong><?= $pelicula["titulo"] ?></p>
        <p><strong>Actores: </strong><?= $pelicula["actores"] ?></p>
        <p><strong>Director: </strong><?= $pelicula["director"] ?></p>
        <p><strong>Guion: </strong><?= $pelicula["guion"] ?></p>
        <p><strong>Producción: </strong><?= $pelicula["produccion"] ?></p>
        <p><strong>Año: </strong><?= $pelicula["anio"] ?></p>
        <p><strong>Nacionalidad: </strong><?= $pelicula["nacionalidad"] ?></p>
        <p><strong>Género: </strong><?= $pelicula["genero"] ?></p>
        <p><strong>Duración: </strong><?= $pelicula["duracion"] ?></p>
        <p><strong>Restricciones de edad: </strong><?= $pelicula["restriccion"] ?></p>
        <div class="d-flex justify-content-end">
            <?php echo $pelicula["archivo"] ?>
        </div>
    </div>
    <a href="/WebDinamica/VISTA/TP2/EJ4/vistaCinema.php" class="btn btn-primary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../ESTRUCTURA/footer.php") ?>