<?php

// Funzione filtro per tipo
function filterByType($array, $arg, $type) {
  $list = [];
  if (!$arg) {
    foreach ($array as $elm) {
      $list[] = $elm;
    }
  } else {
    foreach ($array as $elm) {
      if ($arg === $elm[$type]) $list[] = $elm;
    }
  }
  return $list;
}

// Importazione dabase
require_once '../database/database.php';

// Header Json encode
header('Content-Type: application/json');

// Assegnazione argomento "genere"
$genre = $_GET['cat'];

// Creazione array "disclist"
$discsList = filterByType($discs, $genre, 'genre');

echo json_encode($discsList);
