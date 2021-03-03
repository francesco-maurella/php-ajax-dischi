<?php

// Funzione filtro per tipo
function filterByType($array, $arg, $type) {
  $list = [];
  if (empty($arg)) {
    $list = $array;
  } else {
    $list = array_filter($array, function ($elm) use ($arg, $type) {
      return ($elm[$type] === $arg);
    });
  }
  return $list;
}

// Importazione database
require_once '../database/database.php';

// Header Json encode
header('Content-Type: application/json');

// Assegnazione argomento "genere"
$genre = $_GET['cat'];

// Creazione array "disclist"
$discsList = filterByType($discs, $genre, 'genre');

echo json_encode($discsList);
