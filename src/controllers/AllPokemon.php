<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        try {
            // Fetch empty list to find out how many pokemon are in the full list
            // Then fetch full list with that count
            // Not necessarily required at the time of writing as pagination is broken and the full
            // list is always returned, but this should keep things working when it's fixed
            $rawList = $this->app['pokeAPI']->fetch($this->app['pokeAPIURL'] . 'pokemon?limit=0');
            $count = $rawList->count;
            $rawList = $this->app['pokeAPI']->fetch($this->app['pokeAPIURL'] . 'pokemon?limit=' . $count);
            
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
