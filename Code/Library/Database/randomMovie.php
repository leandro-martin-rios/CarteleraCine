<?php

include "database.php";

// Generador de pelicula random

$peliculas = "SELECT COUNT(id) as total FROM cartelera";

$resultadoPeliculas = mysqli_query($conexionActiva,$peliculas);

$totalPeliculas = mysqli_fetch_assoc($resultadoPeliculas);

$idPelicula = rand(1,$totalPeliculas['total']);

// Pelicula que se va a mostrar en pantalla

$pelicula = "SELECT * FROM cartelera WHERE id = $idPelicula";

$resultado = mysqli_query($conexionActiva, $pelicula);

$row = mysqli_fetch_assoc($resultado);

?>

<div>
    <p><span class="bold-p">Nombre: </span><?php echo $row["nombre"] ?></p>
    <p><span class="bold-p">Estreno: </span><?php echo $row["estreno"] ?></p>
    <p><span class="bold-p">Descripcion: </span><?php echo $row["descripcion"] ?></p>
    <p><span class="bold-p">Categoria: </span><?php echo $row["categoria"] ?></p>
    <p><span class="bold-p">PathImg: </span><?php echo $row["pathimg"] ?></p>
    <p><span class="bold-p">TrailerLink: </span><?php echo $row["trailerlink"] ?></p>
    <a href="<?php echo $row["trailerlink"]?>" target="_blank"><img src="<?php echo $row["pathimg"] ?>" alt=""></a>
</div>