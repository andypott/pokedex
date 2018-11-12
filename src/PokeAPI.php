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
            throw new Exception("Unable to fetch pokemon list");
        }

        $list = json_decode($rawList);

        return $list->results;
    }

    public function getBaseURL() {
        return $this->baseURL;
    }

    public function singlePokemonDetails($id) {
        $url = $this->baseURL . 'pokemon/' . $id;

        $data = file_get_contents($url);
        if ($data === false) {
            throw new Exception("Unable to fetch pokemon details for id $id");
        }

        $data = json_decode($data);
        return $data;
    }
}
