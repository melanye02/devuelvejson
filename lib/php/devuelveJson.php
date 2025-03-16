<?php

require_once __DIR__ . "/devuelveResultadoNoJson.php";

function devuelveJson($pelicula)
{

 $json = json_encode($pelicula);

 if ($json === false) {

  devuelveResultadoNoJson();
 } else {

  http_response_code(200);
  header("Content-Type: application/json");
  echo $json;
 }
}
