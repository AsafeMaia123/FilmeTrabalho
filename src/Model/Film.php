<?php
namespace APP\Model;
class Film{
    public string $title;
    public int $duration;
    public FilmGender $filmGender;
    public int $yearOfRelease;
    public string $franchise;
    public Director $director;
    public Studio $studio;
    
public function __construct(
    string $title,
    int $duration,
    FilmGender $filmGender,
    int $yearOfRelease,
    string $franchise,
    Director $director,
    Studio $studio

)
{
     $this->title = $title;
$this->duration = $duration;
$this->filmGender = $filmGender;
$this->yearOfRelease = $yearOfRelease;
$this->franchise = $franchise;
$this->director = $director;
$this->studio = $studio;
}
}