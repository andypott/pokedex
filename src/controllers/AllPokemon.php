<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        try {
            $pokemon = $this->app['pokeAPI']->allPokemonList();
            view('allPokemon', [
                'title' => 'Pokédex',
                'pokemon' => $pokemon,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
