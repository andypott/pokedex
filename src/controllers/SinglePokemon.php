<?php

class SinglePokemon {
    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index($id) {
        try {
            $rawDetails = $this->app['pokeAPI']->fetch($this->app['pokeAPIURL'] . 'pokemon/' . $id);
            $details = new PokemonDetails($rawDetails);

            view('singlePokemon', [
                'title' => 'Pokemon',
                'details' => $details,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }
}
