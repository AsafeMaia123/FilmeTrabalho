<?php
namespace APP\Model;
enum FilmGender{
    case ACTION;
    case TERROR;
    case COMEDY;
    case THRILLER;
    
    public function toString()
    {
        return $this->name;
     }
}


