<?php

require_once __DIR__ . '/../database/database.php';

$genreQuery = $_GET['genre'];

function filterByGenre($sourceArray, $genre) {

    $res = [];
    foreach($sourceArray as $album) {
        if($album['genre'] === $genre){
            $res[] = $album;
        }
        if($genre === 'All Genres'){
            return $discs = $res;
        }
    }
    return $res;
}

if(!empty($genreQuery)){
    $discs = filterByGenre($discs, $genreQuery);
}

header('Content-Type: application/json');
echo json_encode($discs);






// window.location.protocol + '//' + window.location.hostname

// var href = window.location.href;
// var dir = href.substring(0, href.lastIndexOf('/')) + "/";