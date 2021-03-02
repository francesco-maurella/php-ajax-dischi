<?php

require_once '../database/database.php';

header('Content-Type: application/json');

$discsData = json_encode($discs);

echo $discsData;
