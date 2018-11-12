<?php

class SinglePokemon {
    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function index($id) {
        view('singlePokemon', [
            'title' => 'Pokemon',
            'id' => $id,
        ]);
    }
}
