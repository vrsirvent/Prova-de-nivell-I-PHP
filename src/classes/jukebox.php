<?php 

class Jukebox {
    public array $albums = [];

    public function addAlbum(Album $album): void { 
        $this->albums[] = $album;
    }

    public function playRandomAlbum(): void {
        if (empty($this->albums)) return;

        $albumIndex = array_rand($this->albums);
        $album = $this->albums[$albumIndex];
        echo "Random album playback: " .  $album->name . ", author: " . 
        $album->author . ", duration: " . $album->duration . " minutes.\n\n";
    }

    public function longestAlbum(): ?Album {
        if (empty($this->albums)) return null;

        $longest = $this->albums[0];
        foreach ($this->albums as $album) {
            if ($album->duration > $longest->duration) {
                $longest = $album;
            }
        }
        return $longest;
    }
}

?>

