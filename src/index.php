<?php 

$jukebox = new Jukebox();
$jukebox->addAlbum(new Album("Force of Nature", "Koko Taylor", 64, "Blues"));
$jukebox->addAlbum(new Album("Sonic Temple", "The Cult", 55, "Hard rock, Gothic rock, Post-punk"));
$jukebox->addAlbum(new Album("Badmotorfinger", "Soundgarden", 57, "Grunge, Hard Rock"));
$jukebox->addAlbum(new Album("Surfing With the Alien", "Joe Satriani", 37, "Instrumental rock, jazz fusion"));

echo "\nList of jukebox albums:\n";
foreach ($jukebox->albums as $album) {
    echo "- Name: " . $album->name . ", author: " . $album->author . ", duration: " . 
    $album->duration . " minutes, genre: " . $album->genre . ".\n";
}

$longestAlbum = $jukebox->longestAlbum();
if ($longestAlbum) {
    echo "\nThe longest album is " . $longestAlbum->name . 
    " with a duration of " . $longestAlbum->duration . " minutes.\n\n";
}

$jukebox->playRandomAlbum();

?>


