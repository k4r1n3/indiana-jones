<?php
$movieName = (string)"Indiana Jones et la dernière croisade";
echo $movieName; 

$movieWatched = (bool)true;
$hasWatched = true; 
$hasNotWatched = false;

if ($hasWatched){
    echo 'a vu le film';
}
if ($hasNotWatched){
    echo 'n\'a pas vu le film';} 

    echo $movieWatched;
    
$releaseMovie = '1989';
    echo (int) $releaseMovie;

$ratingMovie = ((float)'8.2');
$slash = (string) '/';
$float  = floatval($ratingMovie);
$bareme = (string)'10';
echo $float, $slash, $bareme;
  
?>
