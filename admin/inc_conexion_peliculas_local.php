<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="peliculas";
$conpel=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre);
$tmdb_apikey='98fee347b91da83932ea8b9daa0edece';
$tmdb_ruta_poster = 'https://image.tmdb.org/t/p/w154'; // 
?>