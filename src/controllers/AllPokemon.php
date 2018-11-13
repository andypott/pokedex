<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        try {
            $rawList = $this->app['pokeAPI']->fetch($this->app['pokeAPIURL'] . 'pokemon');
            $pokemonList = (new PokemonList($rawList->results, $this->app['pokeAPIURL']))->asArray();

            $q = '';
            // Search if query param is set and it's not empty
            if (isset($_GET['q']) && trim($_GET['q']) !== '') {
                $searcher = new Searcher($pokemonList);
                $pokemonList = $searcher->search($_GET['q']);
                $q = $_GET['q'];
            }

            view('allPokemon', [
                'title' => 'Pokédex',
                'pokemon' => $pokemonList,
                'query' => $q,
            ]);
        } catch (Exception $e) {
            view('notFound', [
                'title' => 'Pokédex',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
