<?php
    $data=new DOMDocument();

    $data->load("movie.xml");
    //get element
    $root = $data->documentElement;

foreach ($root->childNodes as $movie) {
    $movieNo = $movie->getElementsByTagName('MovieInfoMovieNo')->item(0)->nodeValue;
    $movieTitle = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
    $actorName = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
    $releaseYear = $movie->getElementsByTagName('ReleaseYear')->item(0)->nodeValue;

    // process movie data as needed
    echo "Movie $movieNo: $movieTitle ($actorName, $releaseYear)\n";
}
?>