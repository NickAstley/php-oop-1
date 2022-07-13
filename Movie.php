<?php

class Movie {
    public $title;
    public $releaseYear;
    public $rating;
    public $duration;
    public $genre;

    function __construct($_title, $_releaseYear, $_rating, $_duration, $_genre) {
        $this->setTitle($_title);
        $this->setReleaseYear($_releaseYear);
        $this->setRating($_rating);
        $this->setDuration($_duration);
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
        $this->releaseYear = $_releaseYear;
        return $this;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }

    // $rating setter and getter
    public function setRating($_rating) {
        $this->rating = $_rating;
        return $this;
    }

    public function getRating() {
        return $this->rating;
    }

    // $duration setter and getter
    public function setDuration($_duration) {
        $this->duration = $_duration;
        return $this;
    }

    public function getDuration() {
        return $this->duration;
    }

    // $genre setter and getter
    public function setGenre($_genre) {
        $this->genre = $_genre;
        return $this;
    }

    public function getGenre() {
        return $this->genre;
    }
}

?>