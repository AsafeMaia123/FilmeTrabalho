<?php
namespace APP\Controller;

require"../../vendor/autoload.php";
use APP\Model\Director;
use APP\Model\Film;
use APP\Model\FilmGender;
use APP\Model\Studio;

//Criação dos objetos
$director_one= new Director("Stan Lee",65,"9999-9999");
$studio_one= new studio(
    name:"Marvel studios",
    phone:"88888-8888"
);
$film_one= new Film(
    yearOfRelease:2019,
    filmGender:FilmGender::ACTION,
director:$director_one,
studio:$studio_one,
duration:183,
franchise:"Vingadores",
title:"Vingadores ultimato"
);


$film_one->franchise="Vingadores";
$film_one->director= $director_one;
$film_one->duration= 183;
$film_one->filmGender=FilmGender::ACTION;
$film_one->studio=$studio_one;
$film_one->title="Vingadores ultimato";
$film_one->yearOfRelease= 2019;

echo"<pre>";
var_dump($film_one);
echo"</pre>";