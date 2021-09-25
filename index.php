<?php
$movieName = "Indiana Jones et la dernière croisade";
echo string ($movieName); // print the title of the movie

$hasWatched = true; 
$hasNotWatched = false;

if ($hasWatched){
    echo 'a vu le film';
}
if ($hasNotWatched){
    echo 'n\'a pas vu le film';} // print if the movie has been watched or not


$releaseMovie = '1989';
$integer = (int)$releaseMovie;
    echo $releaseMovie; // print the year of the release's movie

$ratingMovie = '8.2 / 10';
$floatRatingMovie = (float) $ratingMovie;

    
?>
