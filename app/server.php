<?php

require_once __DIR__ . '/../database/database.php';

$genreQuery = $_GET['genre'];

function filterByGenre($sourceArray, $genre) {

    $res = [];
    foreach($sourceArray as $album) {
        if($album['genre'] === $genre){
            $res[] = $album;
        }
    }
    return $res;
}

if(!empty($genreQuery)){
    $discs = filterByGenre($discs, $genreQuery);
}

header('Content-Type: application/json');
echo json_encode($discs);