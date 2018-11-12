<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        try {
            $pokeAPI = $this->app['pokeAPI'];
            $rawList = $pokeAPI->allPokemonList();
            $pokemonList = new PokemonList($rawList, $pokeAPI->getBaseURL());


            view('allPokemon', [
                'title' => 'Pokédex',
                'pokemon' => $pokemonList->asArray(),
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
