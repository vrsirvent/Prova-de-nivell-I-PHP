<?php 

class Album {
    
    public string $name;
    public string $author;     
    public int $duration;        
    public string $genre; 
    
    public function __construct(string $name, string $author, int $duration, string $genre) {
        $this->name = $name;
        $this->author = $author;
        $this->duration = $duration;
        $this->genre = $genre;
    }
}

?>

