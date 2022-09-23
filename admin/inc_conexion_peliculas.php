<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="peliculas";
$conpel=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre);
$tmdb_apikey='*************'; // clave obtenida al registrasrse en https://www.themoviedb.org/ 
$tmdb_ruta_poster = 'https://image.tmdb.org/t/p/w154'; // 
?>
