<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

$juego = [
    "titulo" => "La popuesta",
    "genero" => "Amor y Comedia",
    "streaming" => "Claro Video"
];

devuelveJson($juego);

?>