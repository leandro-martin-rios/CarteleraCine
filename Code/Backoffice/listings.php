<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/styles.css">
    <title>PeliculasYa</title>
</head>
<body>
    <h1>¡Todas nuestras peliculas!</h1>

    <ul>
        <li><a href="http://localhost/Backoffice/listings.php?categoria=Accion">Accion</a></li>
        <li><a href="http://localhost/Backoffice/listings.php?categoria=Comedia">Comedia</a></li>
    </ul>

    <?php
        include "../Library/Partials/navbar.php";
        include "../Library/Database/movies.php";
    ?>
</body>

<script src="Assets/scripts.js"> 
</script>
</html>