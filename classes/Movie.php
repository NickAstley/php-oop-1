<?php

class Movie {
    public $title;
    public $releaseYear;
    public $rating;
    public $director;
    public $genre;

    function __construct($_title, $_releaseYear, $_rating, $_director, $_genre) {
        $this->setTitle($_title);
        $this->setReleaseYear($_releaseYear);
        $this->setRating($_rating);
        $this->setDirector($_director);
        $this->setGenre($_genre);
    }

    // $title setter and getter
    public function setTitle($_title) {
        $this->title = $_title;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }
    
    // $releaseYear setter and getter
    public function setReleaseYear($_releaseYear) {
        // Se non viene fornito un anno numerico, faccio un return
        if(!is_numeric($_releaseYear)) {
            return;
        }
        $this->releaseYear = $_releaseYear;
        return $this;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }

    // $rating setter and getter
    public function setRating($_rating) {
        // Se non viene fornito un voto numerico, faccio un return
        if(!is_numeric($_rating)) {
            return;
        }
        $this->rating = $_rating;
        return $this;
    }

    public function getRating() {
        return $this->rating;
    }

    // $director setter and getter
    public function setDirector($_director) {
        $this->director = $_director;
        return $this;
    }

    public function getDirector() {
        return $this->director;
    }

    // $genre setter and getter
    public function setGenre($_genre) {
        $this->genre = $_genre;
        return $this;
    }

    public function getGenre() {
        return $this->genre;
    }

    // Funzione che stampa una card con i dati del film
    public function printCard() {
    ?>
    <div>
        <h2><?php echo $this->title ?> <bold><?php echo $this->rating ?> &starf;</bold></h2>
        <h5>di <?php echo $this->director ?></h5>
        <div><?php echo $this->releaseYear ?></div>
        <div><?php echo $this->genre ?></div>
    </div>
    <?php
  }
}

?>