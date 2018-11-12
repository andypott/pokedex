<?php

class PokeAPI {

    private $baseURL;

    public function __construct($baseURL) {
        $this->baseURL = $baseURL;
    }

    public function allPokemonList() {
        $url = $this->baseURL . 'pokemon';

        $rawList = file_get_contents($url);
        if ($rawList === false) {
            throw new Excpetion("Unable to fetch pokemon list");
        }

        $list = json_decode($rawList);

        return $list->results;
    }
}
