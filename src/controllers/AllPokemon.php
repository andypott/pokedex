<?php

class AllPokemon {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index() {
        try {
            $pokeAPI = $this->app['pokeAPI'];
            $pokemon = $pokeAPI->allPokemonList();
            $pokemon = array_map(function($pmon) use ($pokeAPI) {
                $pmon->url = '/' . str_replace($pokeAPI->getBaseURL(), '', $pmon->url);
                return $pmon;
            }, $pokemon);

            view('allPokemon', [
                'title' => 'Pokédex',
                'pokemon' => $pokemon,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
