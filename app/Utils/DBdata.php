<?php
require_once  __DIR__ . '/../Models/Pokemon.php';

class DBData
{
    private $dbh;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $username = 'pokedex';
        $password = 'pokedex';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->dbh = new PDO($dsn, $username, $password, $options);
    }


    public function getPokemon()
    {
        $pokemonListSql = '
        SELECT *
        FROM pokemon
        
        ';
        $pdoStatement = $this->dbh->query($pokemonListSql);
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $pokemons;
    }
    public function getPokemonById($pokemonId)
    {
        $pokemonSql = '
        SELECT *
        FROM pokemon  
        WHERE id = '.$pokemonId.'      
        ';
        $pdoStatement = $this->dbh->query($pokemonSql);
        $pokemon = $pdoStatement->fetch(PDO::FETCH_ASSOC);
        return $pokemon;
    }

  





    public function getType()
    {
        $typeListSql = '
        SELECT *
        FROM type        
        ';
        $pdoStatement = $this->dbh->query($typeListSql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        return $types;
    }
    public function getTypeById($typeId)
    {
        $typeListSql = '
        SELECT *
        FROM type  
        WHERE id = '.$typeId.'      
        ';
        $pdoStatement = $this->dbh->query($typeListSql);
        $type = $pdoStatement->fetch(PDO::FETCH_ASSOC);
        return $type;
    }

    public function getPokemonByType($typeId)
    {         
        $pokemonTypeSql = '
        SELECT * 
        FROM pokemon_type
            INNER JOIN pokemon 
                ON pokemon_type.pokemon_numero = pokemon.numero
        WHERE type_id = ' . $typeId . '
        ';
         $pdoStatement = $this->dbh->query($pokemonTypeSql);
         $typePokemon = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
         return $typePokemon;
    }

    public function getTypesByPokemon($pokemonNumber)
    {         
        $typePokemonSql = '
        SELECT * 
        FROM pokemon_type
            INNER JOIN type 
                ON pokemon_type.type_id = type.id
        WHERE pokemon_numero = ' . $pokemonNumber . '
        ';
         $pdoStatement = $this->dbh->query($typePokemonSql);
         $typePokemon = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
         return $typePokemon;
    }
}
