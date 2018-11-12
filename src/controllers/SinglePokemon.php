<?php

class SinglePokemon {
    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index($id) {
        try {
            $details = $this->app['pokeAPI']->singlePokemonDetails($id);

            view('singlePokemon', [
                'title' => 'Pokemon',
                'details' => $details,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }
}
