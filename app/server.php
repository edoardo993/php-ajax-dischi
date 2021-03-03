<?php

require_once __DIR__ . '/../database/database.php';

$genreQuery = $_GET['genre'];
if(empty($genreQuery)){
    $discs = $discs;
}

header('Content-Type: application/json');
echo json_encode($discs);