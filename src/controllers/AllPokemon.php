<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        $pokemon = $this->app['pokeAPI']->allPokemonList();
        view('allPokemon', [
            'title' => 'Pokédex',
            'pokemon' => $pokemon,
        ]);
    }
}
