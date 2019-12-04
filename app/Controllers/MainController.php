<?php

require_once __DIR__ . '/../Utils/TemplateEngine.php';
require_once __DIR__ . '/../Utils/DBData.php';



class MainController
{
    private $tplEngine;


    function __construct()
    {
        $this->tplEngine = new TemplateEngine();
    }


    function home()
    {
        $dbData = new DBData();
        $pokemons = $dbData->getPokemon();


        $this->tplEngine->show("home", array('pokemons' => $pokemons));
    }
    function typeList()
    {

        $dbData = new DBData();
        $types = $dbData->getType();
        $this->tplEngine->show("typeList", array('types' => $types));
    }

    function pokemonByType($urlParams)
    {
        $typeId = $urlParams['id'];
        $dbData = new DBData();
        $pokemons = $dbData->getPokemonByType($typeId);
        $currentType = $dbData->getTypeById($typeId);
        $this->tplEngine->show("pokemonByType", array('pokemons' => $pokemons, 'currentType' => $currentType));
    }


    function pokemonDetails($urlParams)
    {
        $pokemonId = $urlParams['id'];
        $dbData = new DBData();
        $pokemon = $dbData->getPokemonById($pokemonId);
        $types = $dbData->getTypesByPokemon($pokemon['numero']);

        $this->tplEngine->show("pokemonDetails", array('pokemon' => $pokemon, 'types'=>$types));
    }






    function error()
    {
        $this->tplEngine->show("404");
    }
}
