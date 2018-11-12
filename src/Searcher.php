<?php

class Searcher {

    private $list;

    public function __construct($allPokemonListArray) {
        $this->list = $allPokemonListArray;
    }

    public function search($term) {
        $term = trim(strtolower($term));

        $result = array_filter($this->list, function($pokemon) use ($term) {
            return strpos(strtolower($pokemon->name), $term) !== false;
        });

        // Need to reindex array so mustached will correctly display it
        return array_values($result);
    }
}
