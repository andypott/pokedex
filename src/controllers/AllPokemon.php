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
            $pokemonList = (new PokemonList($rawList, $pokeAPI->getBaseURL()))->asArray();

            // Search if query param is set and it's not empty
            if (isset($_GET['q']) && trim($_GET['q']) !== '') {
                $searcher = new Searcher($pokemonList);
                $pokemonList = $searcher->search($_GET['q']);
            }


            view('allPokemon', [
                'title' => 'Pokédex',
                'pokemon' => $pokemonList,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
